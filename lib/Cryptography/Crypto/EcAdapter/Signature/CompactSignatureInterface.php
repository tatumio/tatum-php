<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Signature;
!defined("TATUM-SDK") && exit();

interface CompactSignatureInterface extends SignatureInterface {
    /**
     * @return SignatureInterface
     */
    public function convert();

    /**
     * @return int
     */
    public function getRecoveryId();

    /**
     * @return bool
     */
    public function isCompressed();
}
