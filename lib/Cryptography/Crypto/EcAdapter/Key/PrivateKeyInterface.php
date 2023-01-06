<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Key;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Impl\PhpEcc\Signature\CompactSignature;
use Tatum\Cryptography\Crypto\EcAdapter\Signature\CompactSignatureInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Signature\SignatureInterface;
use Tatum\Cryptography\Crypto\Random\RbgInterface;
use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Buffertools\BufferInterface;

interface PrivateKeyInterface extends KeyInterface {
    /**
     * Return the decimal secret multiplier
     *
     * @return \GMP
     */
    public function getSecret();

    /**
     * @param BufferInterface $msg32
     * @param RbgInterface $rbg
     * @return SignatureInterface
     */
    public function sign(BufferInterface $msg32, RbgInterface $rbg = null);

    /**
     * @param BufferInterface $msg32
     * @param RbgInterface|null $rbgInterface
     * @return CompactSignature
     */
    public function signCompact(BufferInterface $msg32, RbgInterface $rbgInterface = null);

    /**
     * Return the public key.
     *
     * @return PublicKeyInterface
     */
    public function getPublicKey();

    /**
     * Convert the private key to wallet import format. This function
     * optionally takes a NetworkInterface for exporting keys for other networks.
     *
     * @param NetworkInterface $network
     * @return string
     */
    public function toWif(NetworkInterface $network = null);
}
