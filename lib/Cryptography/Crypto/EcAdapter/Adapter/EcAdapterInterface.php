<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Adapter;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Key\PrivateKeyInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Signature\CompactSignatureInterface;
use Tatum\Cryptography\Math\Math;
use Tatum\Cryptography\Buffertools\BufferInterface;

interface EcAdapterInterface {
    /**
     * @return Math
     */
    public function getMath(): Math;

    /**
     * @return \Tatum\Cryptography\Ecc\Primitives\GeneratorPoint
     */
    public function getGenerator();

    /**
     * @return \GMP
     */
    public function getOrder(): \GMP;

    /**
     * @param BufferInterface $buffer
     * @return bool
     */
    public function validatePrivateKey(BufferInterface $buffer): bool;

    /**
     * @param \GMP $element
     * @param bool|false $halfOrder
     * @return bool
     */
    public function validateSignatureElement(\GMP $element, bool $halfOrder = false): bool;

    /**
     * @param \GMP $scalar
     * @param bool|false $compressed
     * @return PrivateKeyInterface
     */
    public function getPrivateKey(\GMP $scalar, bool $compressed = false): PrivateKeyInterface;

    /**
     * @param BufferInterface $messageHash
     * @param CompactSignatureInterface $compactSignature
     * @return PublicKeyInterface
     */
    public function recover(
        BufferInterface $messageHash,
        CompactSignatureInterface $compactSignature
    ): PublicKeyInterface;
}
