<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Buffertools\Types;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange;
use Tatum\Cryptography\Buffertools\Parser;

class VarString extends AbstractType {
    /**
     * @var VarInt
     */
    private $varint;

    /**
     * @param VarInt $varInt
     */
    public function __construct(VarInt $varInt) {
        $this->varint = $varInt;
        parent::__construct($varInt->getByteOrder());
    }

    /**
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Buffertools\Types\TypeInterface::write()
     */
    public function write($buffer): string {
        if (!$buffer instanceof BufferInterface) {
            throw new \InvalidArgumentException("Must provide a buffer");
        }

        $binary = $this->varint->write($buffer->getSize()) . $buffer->getBinary();
        return $binary;
    }

    /**
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Buffertools\Types\TypeInterface::write()
     * @param Parser $parser
     * @return \Tatum\Cryptography\Buffertools\BufferInterface
     * @throws \Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange
     * @throws \Exception
     */
    public function read(Parser $parser): BufferInterface {
        $length = $this->varint->read($parser);

        if ($length > $parser->getSize() - $parser->getPosition()) {
            throw new ParserOutOfRange("Insufficient data remaining for VarString");
        }

        if (gmp_cmp(gmp_init($length, 10), gmp_init(0, 10)) == 0) {
            return new Buffer();
        }

        return $parser->readBytes((int) $length);
    }
}
