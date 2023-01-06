<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Signature;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Crypto\EcAdapter\EcSerializer;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Signature\DerSignatureSerializerInterface;
use Tatum\Cryptography\Serializer\Signature\TransactionSignatureSerializer;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class TransactionSignatureFactory {
    /**
     * @param string $string
     * @param EcAdapterInterface|null $ecAdapter
     * @return TransactionSignatureInterface
     * @throws \Exception
     */
    public static function fromHex(
        string $string,
        EcAdapterInterface $ecAdapter = null
    ): TransactionSignatureInterface {
        return self::fromBuffer(Buffer::hex($string), $ecAdapter);
    }

    /**
     * @param BufferInterface $buffer
     * @param EcAdapterInterface|null $ecAdapter
     * @return TransactionSignatureInterface
     * @throws \Exception
     */
    public static function fromBuffer(
        BufferInterface $buffer,
        EcAdapterInterface $ecAdapter = null
    ): TransactionSignatureInterface {
        $serializer = new TransactionSignatureSerializer(
            EcSerializer::getSerializer(DerSignatureSerializerInterface::class, true, $ecAdapter)
        );

        return $serializer->parse($buffer);
    }
}
