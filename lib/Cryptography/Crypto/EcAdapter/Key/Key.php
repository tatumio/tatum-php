<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Key;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PublicKeySerializerInterface;
use Tatum\Cryptography\Crypto\Hash;
use Tatum\Cryptography\Serializable;
use Tatum\Cryptography\Buffertools\BufferInterface;

abstract class Key extends Serializable implements KeyInterface {
    /**
     * @var BufferInterface
     */
    protected $pubKeyHash;

    /**
     * @return bool
     */
    public function isPrivate(): bool {
        return $this instanceof PrivateKeyInterface;
    }

    /**
     * @param PublicKeySerializerInterface|null $serializer
     * @return \Tatum\Cryptography\Buffertools\BufferInterface
     */
    public function getPubKeyHash(PublicKeySerializerInterface $serializer = null): BufferInterface {
        if ($this instanceof PrivateKeyInterface) {
            $publicKey = $this->getPublicKey();
        } else {
            $publicKey = $this;
        }

        if (null === $this->pubKeyHash) {
            $this->pubKeyHash = Hash::sha256ripe160(
                $serializer ? $serializer->serialize($publicKey) : $publicKey->getBuffer()
            );
        }

        return $this->pubKeyHash;
    }
}
