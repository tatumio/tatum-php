<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Key\PrivateKeyInterface;
use Tatum\Cryptography\Buffertools\BufferInterface;

interface PrivateKeySerializerInterface {
    /**
     * @param PrivateKeyInterface $privateKey
     * @return BufferInterface
     */
    public function serialize(PrivateKeyInterface $privateKey): BufferInterface;

    /**
     * @param BufferInterface $data
     * @param bool $compressed
     * @return PrivateKeyInterface
     */
    public function parse(BufferInterface $data, bool $compressed): PrivateKeyInterface;
}
