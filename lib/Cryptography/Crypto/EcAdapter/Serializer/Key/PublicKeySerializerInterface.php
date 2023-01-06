<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface;
use Tatum\Cryptography\Buffertools\BufferInterface;

interface PublicKeySerializerInterface {
    /**
     * @param PublicKeyInterface $publicKey
     * @return BufferInterface
     */
    public function serialize(PublicKeyInterface $publicKey): BufferInterface;

    /**
     * @param BufferInterface $data
     * @return PublicKeyInterface
     */
    public function parse(BufferInterface $data);
}
