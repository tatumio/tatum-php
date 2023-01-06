<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Script\Parser;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Math\Math;
use Tatum\Cryptography\Script\Opcodes;
use Tatum\Cryptography\Script\Script;
use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\Buffertools\Buffer;

class Parser implements \Iterator {
    /**
     * @var Math
     */
    private $math;

    /**
     * @var BufferInterface
     */
    private $empty;

    /**
     * @var ScriptInterface
     */
    private $script;

    /**
     * @var int
     */
    private $count = 0;

    /**
     * @var int
     */
    private $position = 0;

    /**
     * @var int
     */
    private $end = 0;

    /**
     * @var int
     */
    private $execPtr = 0;

    /**
     * @var string
     */
    private $data = "";

    /**
     * @var Operation[]
     */
    private $array = [];

    /**
     * ScriptParser constructor.
     * @param Math $math
     * @param ScriptInterface $script
     */
    public function __construct(Math $math, ScriptInterface $script) {
        $this->math = $math;
        $buffer = $script->getBuffer();
        $this->data = $buffer->getBinary();
        $this->end = $buffer->getSize();
        $this->script = $script;
        $this->empty = new Buffer("", 0);
    }

    /**
     * @return int
     */
    public function getPosition(): int {
        return $this->position;
    }

    /**
     * @param string $packFormat
     * @param integer $strSize
     * @return array|bool
     */
    private function unpackSize(string $packFormat, int $strSize) {
        if ($this->end - $this->position < $strSize) {
            return false;
        }

        $size = unpack($packFormat, substr($this->data, $this->position, $strSize));
        $size = $size[1];
        $this->position += $strSize;

        return $size;
    }

    /**
     * @param int $ptr
     * @return Operation
     */
    private function doNext(int $ptr) {
        if ($this->position >= $this->end) {
            throw new \RuntimeException("Position exceeds end of script!");
        }

        $opCode = ord($this->data[$this->position++]);
        $pushData = $this->empty;
        $dataSize = 0;

        if ($opCode <= Opcodes::OP_PUSHDATA4) {
            if ($opCode < Opcodes::OP_PUSHDATA1) {
                $dataSize = $opCode;
            } elseif ($opCode === Opcodes::OP_PUSHDATA1) {
                $dataSize = $this->unpackSize("C", 1);
            } elseif ($opCode === Opcodes::OP_PUSHDATA2) {
                $dataSize = $this->unpackSize("v", 2);
            } else {
                $dataSize = $this->unpackSize("V", 4);
            }

            $delta = $this->end - $this->position;
            if ($dataSize === false || $delta < 0 || $delta < $dataSize) {
                throw new \RuntimeException("Failed to unpack data from Script");
            }

            if ($dataSize > 0) {
                $pushData = new Buffer(substr($this->data, $this->position, $dataSize), $dataSize);
            }

            $this->position += $dataSize;
        }

        $this->array[$ptr] = new Operation($opCode, $pushData, $dataSize);
        $this->count++;

        return $this->array[$ptr];
    }

    /**
     * @param int $begin
     * @param null|int $length
     * @return Script
     */
    public function slice(int $begin, int $length = null) {
        if ($begin < 0) {
            throw new \RuntimeException("Invalid start of script - cannot be negative or ");
        }

        $maxLength = $this->end - $begin;

        if (null === $length) {
            $length = $maxLength;
        } else {
            if ($length > $maxLength) {
                throw new \RuntimeException("Cannot slice this much from script");
            }
        }

        return new Script(new Buffer(substr($this->data, $begin, $length)));
    }

    /**
     * Rewind
     */
    #[\ReturnTypeWillChange]
    public function rewind() {
        $this->execPtr = 0;
        $this->position = 0;
    }

    /**
     * @return Operation
     */
    #[\ReturnTypeWillChange]
    public function current() {
        if (isset($this->array[$this->execPtr])) {
            $exec = $this->array[$this->execPtr];
        } else {
            $exec = $this->doNext($this->execPtr);
        }

        return $exec;
    }

    /**
     * @return int
     */
    #[\ReturnTypeWillChange]
    public function key() {
        return $this->execPtr;
    }

    /**
     * @return Operation|null
     */
    #[\ReturnTypeWillChange]
    public function next() {
        $ptr = $this->execPtr;
        if (isset($this->array[$ptr])) {
            $this->execPtr++;
            return $this->array[$ptr];
        }

        return null;
    }

    /**
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function valid() {
        return isset($this->array[$this->execPtr]) || $this->position < $this->end;
    }

    /**
     * @return Operation[]
     */
    public function decode(): array {
        $result = [];
        foreach ($this as $operation) {
            $result[] = $operation;
        }

        return $result;
    }

    /**
     * @return string
     */
    public function getHumanReadable(): string {
        return implode(
            " ",
            array_map(function (Operation $operation) {
                $op = $operation->getOp();
                if (
                    $op === Opcodes::OP_0 ||
                    $op === Opcodes::OP_1NEGATE ||
                    ($op >= Opcodes::OP_1 && $op <= Opcodes::OP_16)
                ) {
                    return $this->script->getOpcodes()->getOp($op);
                } elseif ($operation->isPush()) {
                    return $operation->getData()->getHex();
                } else {
                    return $this->script->getOpcodes()->getOp($operation->getOp());
                }
            }, $this->decode())
        );
    }
}
