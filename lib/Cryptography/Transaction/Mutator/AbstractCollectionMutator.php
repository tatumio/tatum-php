<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Transaction\Mutator;
!defined("TATUM-SDK") && exit();

abstract class AbstractCollectionMutator implements \Iterator, \ArrayAccess, \Countable {
    /**
     * @var array
     */
    protected $set = [];

    /**
     * @return array
     */
    public function all(): array {
        return $this->set;
    }

    /**
     * @return bool
     */
    public function isNull(): bool {
        return 0 === count($this->set);
    }

    /**
     * @return int
     */
    public function count(): int {
        return count($this->set);
    }

    /**
     *
     */
    public function rewind(): void {
        reset($this->set);
    }

    /**
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function current() {
        return current($this->set);
    }

    /**
     * @return int
     */
    #[\ReturnTypeWillChange]
    public function key() {
        return key($this->set);
    }

    /**
     *
     */
    public function next(): void {
        next($this->set);
    }

    /**
     * @return bool
     */
    public function valid(): bool {
        return key($this->set) < count($this->set) - 1;
    }

    /**
     * @param int $offset
     * @return bool
     */
    public function offsetExists($offset): bool {
        return isset($this->set[$offset]);
    }

    /**
     * @param int $offset
     */
    public function offsetUnset($offset): void {
        if (!$this->offsetExists($offset)) {
            throw new \InvalidArgumentException("Offset does not exist");
        }

        unset($this->set[$offset]);
    }

    /**
     * @param int $offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) {
        if (!$this->offsetExists($offset)) {
            throw new \OutOfRangeException("Nothing found at this offset");
        }
        return $this->set[$offset];
    }

    /**
     * @param int $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value): void {
        $this->set[$offset] = $value;
    }
}
