<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Transaction\Mutator;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Transaction\TransactionOutputInterface;

class OutputCollectionMutator extends AbstractCollectionMutator {
    /**
     * @param TransactionOutputInterface[] $outputs
     */
    public function __construct(array $outputs) {
        /** @var OutputMutator[] $set */
        $this->set = [];
        foreach ($outputs as $i => $output) {
            /** @var int $i */
            $this->set[$i] = new OutputMutator($output);
        }
    }

    /**
     * @return OutputMutator
     */
    public function current(): OutputMutator {
        return current($this->set);
    }

    /**
     * @param int $offset
     * @return OutputMutator
     */
    public function offsetGet($offset): OutputMutator {
        if (!$this->offsetExists($offset)) {
            throw new \OutOfRangeException("Output does not exist");
        }

        return $this->set[$offset];
    }

    /**
     * @return TransactionOutputInterface[]
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
     * @param TransactionOutputInterface $output
     * @return $this
     */
    public function add(TransactionOutputInterface $output) {
        $this->set[] = new OutputMutator($output);
        return $this;
    }

    /**
     * @param int $i
     * @param TransactionOutputInterface $output
     * @return $this
     */
    public function set($i, TransactionOutputInterface $output) {
        $this->set[$i] = new OutputMutator($output);
        return $this;
    }
}
