<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Signature;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Signature\SignatureInterface;
use Tatum\Cryptography\SerializableInterface;

interface TransactionSignatureInterface extends SerializableInterface {
    /**
     * @return SignatureInterface
     */
    public function getSignature(): SignatureInterface;

    /**
     * @return int
     */
    public function getHashType(): int;

    /**
     * @param TransactionSignatureInterface $other
     * @return bool
     */
    public function equals(TransactionSignatureInterface $other): bool;
}
