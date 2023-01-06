<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Serializer\Key\PrivateKey;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Base58;
use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PrivateKeyInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PrivateKeySerializerInterface;
use Tatum\Cryptography\Exceptions\Base58ChecksumFailure;
use Tatum\Cryptography\Exceptions\InvalidPrivateKey;
use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Buffertools\Buffer;

class WifPrivateKeySerializer {
    /**
     * @var PrivateKeySerializerInterface
     */
    private $keySerializer;

    /**
     * @param PrivateKeySerializerInterface $serializer
     */
    public function __construct(PrivateKeySerializerInterface $serializer) {
        $this->keySerializer = $serializer;
    }

    /**
     * @param NetworkInterface $network
     * @param PrivateKeyInterface $privateKey
     * @return string
     * @throws \Exception
     */
    public function serialize(NetworkInterface $network, PrivateKeyInterface $privateKey): string {
        $prefix = pack("H*", $network->getPrivByte());
        if ($privateKey->isCompressed()) {
            $ending = "\x01";
        } else {
            $ending = "";
        }

        return Base58::encodeCheck(
            new Buffer("{$prefix}{$this->keySerializer->serialize($privateKey)->getBinary()}{$ending}")
        );
    }

    /**
     * @param string $wif
     * @param NetworkInterface|null $network
     * @return PrivateKeyInterface
     * @throws Base58ChecksumFailure
     * @throws InvalidPrivateKey
     * @throws \Exception
     */
    public function parse(string $wif, NetworkInterface $network = null): PrivateKeyInterface {
        $network = $network ?: Bitcoin::getNetwork();
        $data = Base58::decodeCheck($wif);
        if ($data->slice(0, 1)->getHex() !== $network->getPrivByte()) {
            throw new \RuntimeException("WIF prefix does not match networks");
        }

        $payload = $data->slice(1);
        $size = $payload->getSize();

        if (33 === $size) {
            $compressed = true;
            $payload = $payload->slice(0, 32);
        } elseif (32 === $size) {
            $compressed = false;
        } else {
            throw new InvalidPrivateKey(
                "Private key should be always be 32 or 33 bytes (depending on if it's compressed)"
            );
        }

        return $this->keySerializer->parse($payload, $compressed);
    }
}
