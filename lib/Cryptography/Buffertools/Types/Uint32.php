<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Buffertools\Types;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Buffertools\Parser;

class Uint32 extends AbstractUint {
    private $formatBE = "N";
    private $formatLE = "V";

    /**
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Buffertools\Types\TypeInterface::getBitSize()
     */
    public function getBitSize(): int {
        return 32;
    }

    /**
     * @param int|string $integer
     * @return string
     */
    public function write($integer): string {
        if ($this->isBigEndian()) {
            return pack($this->formatBE, $integer);
        }
        return pack($this->formatLE, $integer);
    }

    /**
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Buffertools\Types\TypeInterface::read()
     */
    public function read(Parser $parser) {
        $bytes = $parser->readBytes(4);
        if ($this->isBigEndian()) {
            return unpack($this->formatBE, $bytes->getBinary())[1];
        }
        return unpack($this->formatLE, $bytes->getBinary())[1];
    }
}
