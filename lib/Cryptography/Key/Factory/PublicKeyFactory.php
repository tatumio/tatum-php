<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Key\Factory;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Crypto\EcAdapter\EcSerializer;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PublicKeySerializerInterface;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class PublicKeyFactory {
    /**
     * @var PublicKeySerializerInterface
     */
    private $serializer;

    /**
     * PublicKeyFactory constructor.
     * @param EcAdapterInterface $ecAdapter
     */
    public function __construct(EcAdapterInterface $ecAdapter = null) {
        $ecAdapter = $ecAdapter ?: Bitcoin::getEcAdapter();
        $this->serializer = EcSerializer::getSerializer(PublicKeySerializerInterface::class, true, $ecAdapter);
    }

    /**
     * @param string $hex
     * @return PublicKeyInterface
     * @throws \Exception
     */
    public function fromHex(string $hex): PublicKeyInterface {
        return $this->fromBuffer(Buffer::hex($hex));
    }

    /**
     * @param BufferInterface $buffer
     * @return PublicKeyInterface
     */
    public function fromBuffer(BufferInterface $buffer): PublicKeyInterface {
        return $this->serializer->parse($buffer);
    }
}
