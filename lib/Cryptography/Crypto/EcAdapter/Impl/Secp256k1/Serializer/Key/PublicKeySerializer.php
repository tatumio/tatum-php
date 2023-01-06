<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\Serializer\Key;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\Adapter\EcAdapter;
use Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\Key\PublicKey;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PublicKeySerializerInterface;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Parser;

class PublicKeySerializer implements PublicKeySerializerInterface {
    /**
     * @var EcAdapter
     */
    private $ecAdapter;

    /**
     * @param EcAdapter $ecAdapter
     */
    public function __construct(EcAdapter $ecAdapter) {
        $this->ecAdapter = $ecAdapter;
    }

    /**
     * @param PublicKey $publicKey
     * @return BufferInterface
     */
    private function doSerialize(PublicKey $publicKey) {
        $serialized = "";
        $isCompressed = $publicKey->isCompressed();
        if (
            !secp256k1_ec_pubkey_serialize(
                $this->ecAdapter->getContext(),
                $serialized,
                $publicKey->getResource(),
                $isCompressed ? SECP256K1_EC_COMPRESSED : SECP256K1_EC_UNCOMPRESSED
            )
        ) {
            throw new \RuntimeException("Secp256k1: Failed to serialize public key");
        }

        return new Buffer($serialized, $isCompressed ? PublicKey::LENGTH_COMPRESSED : PublicKey::LENGTH_UNCOMPRESSED);
    }

    /**
     * @param PublicKeyInterface $publicKey
     * @return BufferInterface
     */
    public function serialize(PublicKeyInterface $publicKey): BufferInterface {
        /** @var PublicKey $publicKey */
        return $this->doSerialize($publicKey);
    }

    /**
     * @param BufferInterface $buffer
     * @return PublicKeyInterface
     */
    public function parse(BufferInterface $buffer): PublicKeyInterface {
        $binary = $buffer->getBinary();
        $pubkey_t = null;
        if (!secp256k1_ec_pubkey_parse($this->ecAdapter->getContext(), $pubkey_t, $binary)) {
            throw new \RuntimeException("Secp256k1 failed to parse public key");
        }
        /** @var resource $pubkey_t */
        return new PublicKey($this->ecAdapter, $pubkey_t, $buffer->getSize() === 33);
    }
}
