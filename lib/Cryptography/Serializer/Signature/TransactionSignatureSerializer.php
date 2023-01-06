<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Serializer\Signature;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Signature\DerSignatureSerializerInterface;
use Tatum\Cryptography\Signature\TransactionSignature;
use Tatum\Cryptography\Signature\TransactionSignatureInterface;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class TransactionSignatureSerializer {
    /**
     * @var DerSignatureSerializerInterface
     */
    private $sigSerializer;

    /**
     * @param DerSignatureSerializerInterface $sigSerializer
     */
    public function __construct(DerSignatureSerializerInterface $sigSerializer) {
        $this->sigSerializer = $sigSerializer;
    }

    /**
     * @param TransactionSignatureInterface $txSig
     * @return BufferInterface
     */
    public function serialize(TransactionSignatureInterface $txSig): BufferInterface {
        return new Buffer(
            $this->sigSerializer->serialize($txSig->getSignature())->getBinary() . pack("C", $txSig->getHashType())
        );
    }

    /**
     * @param BufferInterface $buffer
     * @return TransactionSignatureInterface
     * @throws \Exception
     */
    public function parse(BufferInterface $buffer): TransactionSignatureInterface {
        $adapter = $this->sigSerializer->getEcAdapter();

        if ($buffer->getSize() < 1) {
            throw new \RuntimeException("Empty signature");
        }

        return new TransactionSignature(
            $adapter,
            $this->sigSerializer->parse($buffer->slice(0, -1)),
            (int) $buffer->slice(-1)->getInt()
        );
    }
}
