<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Serializer\Signature;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Signature\CompactSignatureInterface;
use Tatum\Cryptography\Buffertools\BufferInterface;

interface CompactSignatureSerializerInterface {
    /**
     * @param CompactSignatureInterface $signature
     * @return BufferInterface
     */
    public function serialize(CompactSignatureInterface $signature): BufferInterface;

    /**
     * @param BufferInterface $data
     * @return CompactSignatureInterface
     */
    public function parse(BufferInterface $data): CompactSignatureInterface;
}
