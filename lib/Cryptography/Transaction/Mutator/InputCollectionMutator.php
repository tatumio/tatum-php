<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Transaction\Mutator;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Transaction\TransactionInputInterface;

class InputCollectionMutator extends AbstractCollectionMutator {
    /**
     * @param TransactionInputInterface[] $inputs
     */
    public function __construct(array $inputs) {
        foreach ($inputs as $input) {
            $this->set[] = new InputMutator($input);
        }
    }

    /**
     * @return InputMutator
     */
    public function current(): InputMutator {
        return current($this->set);
    }

    /**
     * @param int $offset
     * @return InputMutator
     */
    public function offsetGet($offset): InputMutator {
        if (!$this->offsetExists($offset)) {
            throw new \OutOfRangeException("Input does not exist");
        }

        return $this->set[$offset];
    }

    /**
     * @return TransactionInputInterface[]
     */
    public function done(): array {
        $set = [];
        foreach ($this->set as $mutator) {
            $set[] = $mutator->done();
        }

        return $set;
    }

    /**
     * @param int $start
     * @param int $length
     * @return $this
     */
    public function slice(int $start, int $length) {
        $end = count($this->set);
        if ($start > $end || $length > $end) {
            throw new \RuntimeException("Invalid start or length");
        }

        $this->set = array_values(array_slice($this->set, $start, $length));
        return $this;
    }

    /**
     * @return $this
     */
    public function null() {
        $this->slice(0, 0);
        return $this;
    }

    /**
     * @param TransactionInputInterface $input
     * @return $this
     */
    public function add(TransactionInputInterface $input) {
        $this->set[] = new InputMutator($input);
        return $this;
    }

    /**
     * @param int $i
     * @param TransactionInputInterface $input
     * @return $this
     */
    public function set(int $i, TransactionInputInterface $input) {
        $this->set[$i] = new InputMutator($input);
        return $this;
    }
}
