<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Serializer\Transaction;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Serializer\Types;
use Tatum\Cryptography\Transaction\OutPoint;
use Tatum\Cryptography\Transaction\OutPointInterface;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Parser;

class OutPointSerializer implements OutPointSerializerInterface {
    /**
     * @var \Tatum\Cryptography\Buffertools\Types\ByteString
     */
    private $txid;

    /**
     * @var \Tatum\Cryptography\Buffertools\Types\Uint32
     */
    private $vout;

    public function __construct() {
        $this->txid = Types::bytestringle(32);
        $this->vout = Types::uint32le();
    }

    /**
     * @param OutPointInterface $outpoint
     * @return BufferInterface
     * @throws \Exception
     */
    public function serialize(OutPointInterface $outpoint): BufferInterface {
        return new Buffer($this->txid->write($outpoint->getTxId()) . $this->vout->write($outpoint->getVout()));
    }

    /**
     * @param Parser $parser
     * @return OutPointInterface
     * @throws \Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange
     */
    public function fromParser(Parser $parser): OutPointInterface {
        return new OutPoint(
            new Buffer(strrev($parser->readBytes(32)->getBinary()), 32),
            unpack("V", $parser->readBytes(4)->getBinary())[1]
        );
    }

    /**
     * @param BufferInterface $data
     * @return OutPointInterface
     * @throws \Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange
     */
    public function parse(BufferInterface $data): OutPointInterface {
        return $this->fromParser(new Parser($data));
    }
}
