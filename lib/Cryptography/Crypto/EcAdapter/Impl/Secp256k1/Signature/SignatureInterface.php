<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\Signature;

interface SignatureInterface extends \Tatum\Cryptography\Crypto\EcAdapter\Signature\SignatureInterface {
    /**
     * @return resource
     */
    public function getResource();
}
