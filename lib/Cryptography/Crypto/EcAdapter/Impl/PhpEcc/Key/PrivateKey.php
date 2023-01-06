<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Impl\PhpEcc\Key;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Crypto\EcAdapter\Impl\PhpEcc\Adapter\EcAdapter;
use Tatum\Cryptography\Crypto\EcAdapter\Impl\PhpEcc\Serializer\Key\PrivateKeySerializer;
use Tatum\Cryptography\Crypto\EcAdapter\Impl\PhpEcc\Signature\CompactSignature;
use Tatum\Cryptography\Crypto\EcAdapter\Signature\CompactSignatureInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Impl\PhpEcc\Signature\Signature;
use Tatum\Cryptography\Crypto\EcAdapter\Key\Key;
use Tatum\Cryptography\Crypto\EcAdapter\Key\KeyInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PrivateKeyInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Signature\SignatureInterface;
use Tatum\Cryptography\Crypto\Random\RbgInterface;
use Tatum\Cryptography\Crypto\Random\Rfc6979;
use Tatum\Cryptography\Exceptions\InvalidPrivateKey;
use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Serializer\Key\PrivateKey\WifPrivateKeySerializer;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Ecc\Crypto\Signature\Signer;

class PrivateKey extends Key implements PrivateKeyInterface {
    /**
     * @var \GMP
     */
    private $secretMultiplier;

    /**
     * @var bool
     */
    private $compressed;

    /**
     * @var PublicKey
     */
    private $publicKey;

    /**
     * @var EcAdapter
     */
    private $ecAdapter;

    /**
     * @param EcAdapter $ecAdapter
     * @param \GMP $int
     * @param bool $compressed
     * @throws InvalidPrivateKey
     */
    public function __construct(EcAdapter $ecAdapter, \GMP $int, bool $compressed = false) {
        if (false === $ecAdapter->validatePrivateKey(Buffer::int(gmp_strval($int, 10), 32))) {
            throw new InvalidPrivateKey("Invalid private key - must be less than curve order.");
        }

        $this->ecAdapter = $ecAdapter;
        $this->secretMultiplier = $int;
        $this->compressed = $compressed;
    }

    /**
     * @return \GMP
     */
    public function getSecret(): \GMP {
        return $this->secretMultiplier;
    }

    /**
     * @param BufferInterface $msg32
     * @param RbgInterface|null $rbg
     * @return Signature
     */
    public function sign(BufferInterface $msg32, RbgInterface $rbg = null): SignatureInterface {
        $rbg = $rbg ?: new Rfc6979($this->ecAdapter, $this, $msg32);
        $randomK = gmp_init($rbg->bytes(32)->getHex(), 16);
        $hash = gmp_init($msg32->getHex(), 16);

        $math = $this->ecAdapter->getMath();
        $signer = new Signer($math);
        $signature = $signer->sign(
            $this->ecAdapter->getGenerator()->getPrivateKeyFrom($this->secretMultiplier),
            $hash,
            $randomK
        );
        $s = $signature->getS();

        // if s is less than half the curve order, invert s
        if (!$this->ecAdapter->validateSignatureElement($s, true)) {
            $s = $math->sub($this->ecAdapter->getOrder(), $s);
        }

        return new Signature($this->ecAdapter, $signature->getR(), $s);
    }

    /**
     * @param BufferInterface $msg32
     * @param RbgInterface|null $rbg
     * @return CompactSignatureInterface
     * @throws \Exception
     */
    public function signCompact(BufferInterface $msg32, RbgInterface $rbg = null): CompactSignatureInterface {
        $sign = $this->sign($msg32, $rbg);

        // calculate the recovery param
        // there should be a way to get this when signing too, but idk how ...
        return new CompactSignature(
            $this->ecAdapter,
            $sign->getR(),
            $sign->getS(),
            $this->ecAdapter->calcPubKeyRecoveryParam($sign->getR(), $sign->getS(), $msg32, $this->getPublicKey()),
            $this->isCompressed()
        );
    }

    /**
     * @param \GMP $tweak
     * @return KeyInterface
     */
    public function tweakAdd(\GMP $tweak): KeyInterface {
        $adapter = $this->ecAdapter;
        $modMath = $adapter->getMath()->getModularArithmetic($adapter->getGenerator()->getOrder());
        return $adapter->getPrivateKey($modMath->add($tweak, $this->getSecret()), $this->compressed);
    }

    /**
     * @param \GMP $tweak
     * @return KeyInterface
     */
    public function tweakMul(\GMP $tweak): KeyInterface {
        $adapter = $this->ecAdapter;
        $modMath = $adapter->getMath()->getModularArithmetic($adapter->getGenerator()->getOrder());
        return $adapter->getPrivateKey($modMath->mul($tweak, $this->getSecret()), $this->compressed);
    }

    /**
     * {@inheritDoc}
     */
    public function isCompressed(): bool {
        return $this->compressed;
    }

    /**
     * Return the public key
     *
     * @return PublicKey
     */
    public function getPublicKey(): PublicKeyInterface {
        if (null === $this->publicKey) {
            $point = $this->ecAdapter->getGenerator()->mul($this->secretMultiplier);
            $this->publicKey = new PublicKey($this->ecAdapter, $point, $this->compressed);
        }

        return $this->publicKey;
    }

    /**
     * @param NetworkInterface $network
     * @return string
     */
    public function toWif(NetworkInterface $network = null): string {
        $network = $network ?: Bitcoin::getNetwork();
        $serializer = new WifPrivateKeySerializer(new PrivateKeySerializer($this->ecAdapter));

        return $serializer->serialize($network, $this);
    }

    /**
     * @return BufferInterface
     */
    public function getBuffer(): BufferInterface {
        return (new PrivateKeySerializer($this->ecAdapter))->serialize($this);
    }
}
