<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Key\Factory;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Crypto\EcAdapter\EcSerializer;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PrivateKeyInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PrivateKeySerializerInterface;
use Tatum\Cryptography\Crypto\Random\Random;
use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Serializer\Key\PrivateKey\WifPrivateKeySerializer;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class PrivateKeyFactory {
    /**
     * @var PrivateKeySerializerInterface
     */
    private $privSerializer;

    /**
     * @var WifPrivateKeySerializer
     */
    private $wifSerializer;

    /**
     * PrivateKeyFactory constructor.
     * @param EcAdapterInterface $ecAdapter
     */
    public function __construct(EcAdapterInterface $ecAdapter = null) {
        $ecAdapter = $ecAdapter ?: Bitcoin::getEcAdapter();
        $this->privSerializer = EcSerializer::getSerializer(PrivateKeySerializerInterface::class, true, $ecAdapter);
        $this->wifSerializer = new WifPrivateKeySerializer($this->privSerializer);
    }

    /**
     * @param Random $random
     * @return PrivateKeyInterface
     * @throws \Tatum\Cryptography\Exceptions\RandomBytesFailure
     */
    public function generateCompressed(Random $random): PrivateKeyInterface {
        return $this->privSerializer->parse($random->bytes(32), true);
    }

    /**
     * @param Random $random
     * @return PrivateKeyInterface
     * @throws \Tatum\Cryptography\Exceptions\RandomBytesFailure
     */
    public function generateUncompressed(Random $random): PrivateKeyInterface {
        return $this->privSerializer->parse($random->bytes(32), false);
    }

    /**
     * @param BufferInterface $raw
     * @return PrivateKeyInterface
     * @throws \Exception
     */
    public function fromBufferCompressed(BufferInterface $raw): PrivateKeyInterface {
        return $this->privSerializer->parse($raw, true);
    }

    /**
     * @param BufferInterface $raw
     * @return PrivateKeyInterface
     * @throws \Exception
     */
    public function fromBufferUncompressed(BufferInterface $raw): PrivateKeyInterface {
        return $this->privSerializer->parse($raw, false);
    }

    /**
     * @param string $hex
     * @return PrivateKeyInterface
     * @throws \Exception
     */
    public function fromHexCompressed(string $hex): PrivateKeyInterface {
        return $this->fromBufferCompressed(Buffer::hex($hex));
    }

    /**
     * @param string $hex
     * @return PrivateKeyInterface
     * @throws \Exception
     */
    public function fromHexUncompressed(string $hex): PrivateKeyInterface {
        return $this->fromBufferUncompressed(Buffer::hex($hex));
    }

    /**
     * @param string $wif
     * @param NetworkInterface $network
     * @return PrivateKeyInterface
     * @throws \Tatum\Cryptography\Exceptions\Base58ChecksumFailure
     * @throws \Tatum\Cryptography\Exceptions\InvalidPrivateKey
     * @throws \Exception
     */
    public function fromWif(string $wif, NetworkInterface $network = null): PrivateKeyInterface {
        return $this->wifSerializer->parse($wif, $network);
    }
}
