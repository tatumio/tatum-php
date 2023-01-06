<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Buffertools\Types;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\ByteOrder;
use Tatum\Cryptography\Buffertools\Parser;

class ByteString extends AbstractType {
    /**
     * @var int|string
     */
    private $length;

    /**
     * @param int           $length
     * @param int           $byteOrder
     */
    public function __construct(int $length, int $byteOrder = ByteOrder::BE) {
        $this->length = $length;
        parent::__construct($byteOrder);
    }

    /**
     * @param BufferInterface $string
     * @return string
     * @throws \Exception
     */
    public function write($string): string {
        if (!($string instanceof BufferInterface)) {
            throw new \InvalidArgumentException("FixedLengthString::write() input must implement BufferInterface");
        }

        $data = new Buffer($string->getBinary(), $this->length);
        if (!$this->isBigEndian()) {
            $data = $data->flip();
        }
        return $data->getBinary();
    }

    /**
     * @param Parser $parser
     * @return BufferInterface
     * @throws \Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange
     */
    public function read(Parser $parser): BufferInterface {
        $data = $parser->readBytes($this->length);
        if (!$this->isBigEndian()) {
            $data = $data->flip();
        }

        return $data;
    }
}
