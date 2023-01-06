<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Signature;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Buffertools\BufferInterface;

interface SignatureSortInterface {
    /**
     * @param \Tatum\Cryptography\Crypto\EcAdapter\Signature\SignatureInterface[] $signatures
     * @param \Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface[] $publicKeys
     * @param BufferInterface $messageHash
     * @return \SplObjectStorage
     */
    public function link(array $signatures, array $publicKeys, BufferInterface $messageHash): \SplObjectStorage;
}
