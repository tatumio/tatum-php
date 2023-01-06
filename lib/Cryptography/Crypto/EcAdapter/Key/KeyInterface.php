<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Key;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PublicKeySerializerInterface;
use Tatum\Cryptography\SerializableInterface;
use Tatum\Cryptography\Buffertools\BufferInterface;

interface KeyInterface extends SerializableInterface {
    /**
     * Check if the key should be be using compressed format
     *
     * @return bool
     */
    public function isCompressed(): bool;

    /**
     * Return a boolean indicating whether the key is private.
     *
     * @return bool
     */
    public function isPrivate(): bool;

    /**
     * Return the hash of the public key.
     *
     * @param PublicKeySerializerInterface|null $serializer
     * @return BufferInterface
     */
    public function getPubKeyHash(PublicKeySerializerInterface $serializer = null): BufferInterface;

    /**
     * @param \GMP $offset
     * @return KeyInterface
     */
    public function tweakAdd(\GMP $offset): KeyInterface;

    /**
     * @param \GMP $offset
     * @return KeyInterface
     */
    public function tweakMul(\GMP $offset): KeyInterface;

    /**
     * @return BufferInterface
     */
    public function getBuffer(): BufferInterface;
}
