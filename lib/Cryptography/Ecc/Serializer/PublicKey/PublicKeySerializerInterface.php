<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Serializer\PublicKey;

use Tatum\Cryptography\Ecc\Crypto\Key\PublicKeyInterface;

interface PublicKeySerializerInterface {
    /**
     * @param  PublicKeyInterface $key
     * @return string
     */
    public function serialize(PublicKeyInterface $key): string;

    /**
     * @param  string $formattedKey
     * @return PublicKeyInterface
     */
    public function parse(string $formattedKey): PublicKeyInterface;
}
