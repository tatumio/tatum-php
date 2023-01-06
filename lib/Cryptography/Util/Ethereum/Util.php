<?php

/**
 * This file is part of ethereum-util package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Util\Ethereum;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException;
use RuntimeException;
use Tatum\Cryptography\Keccak;
use Tatum\Cryptography\Elliptic\EC;
use Tatum\Cryptography\Elliptic\EC\KeyPair;
use Tatum\Cryptography\Elliptic\EC\Signature;

class Util {
    /**
     * SHA3_NULL_HASH
     *
     * @const string
     */
    const SHA3_NULL_HASH = "c5d2460186f7233c927e7db2dcc703c0e500b653ca82273b7bfad8045d85a470";

    /**
     * secp256k1
     *
     * @var \Tatum\Cryptography\Elliptic\EC
     */
    protected $secp256k1;

    /**
     * construct
     *
     * @return void
     */
    public function __construct() {
        $this->secp256k1 = new EC("secp256k1");
    }

    /**
     * get
     *
     * @param string $name
     * @return mixed
     */
    public function __get($name) {
        $method = "get" . ucfirst($name);

        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], []);
        }
        return false;
    }

    /**
     * set
     *
     * @param string $name
     * @param mixed $value
     * @return mixed
     */
    public function __set($name, $value) {
        $method = "set" . ucfirst($name);

        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], [$value]);
        }
        return false;
    }

    /**
     * sha3
     * keccak256
     *
     * @param string $value
     * @return string
     */
    public function sha3(string $value) {
        $hash = Keccak::hash($value, 256);

        if ($hash === $this::SHA3_NULL_HASH) {
            return null;
        }
        return $hash;
    }

    /**
     * isZeroPrefixed
     *
     * @param string $value
     * @return bool
     */
    public function isZeroPrefixed(string $value) {
        return strpos($value, "0x") === 0;
    }

    /**
     * stripZero
     *
     * @param string $value
     * @return string
     */
    public function stripZero(string $value) {
        if ($this->isZeroPrefixed($value)) {
            $count = 1;
            return str_replace("0x", "", $value, $count);
        }
        return $value;
    }

    /**
     * isHex
     *
     * @param string $value
     * @return bool
     */
    public function isHex(string $value) {
        return is_string($value) && preg_match('/^(0x)?[a-fA-F0-9]+$/', $value) === 1;
    }

    /**
     * publicKeyToAddress
     *
     * @param string $publicKey
     * @return string
     */
    public function publicKeyToAddress(string $publicKey) {
        if ($this->isHex($publicKey) === false) {
            throw new InvalidArgumentException("Invalid public key format.");
        }
        $publicKey = $this->stripZero($publicKey);

        if (strlen($publicKey) !== 130) {
            throw new InvalidArgumentException("Invalid public key length.");
        }
        return "0x" . substr($this->sha3(substr(hex2bin($publicKey), 1)), 24);
    }

    /**
     * privateKeyToPublicKey
     *
     * @param string $privateKey
     * @return string
     */
    public function privateKeyToPublicKey(string $privateKey) {
        if ($this->isHex($privateKey) === false) {
            throw new InvalidArgumentException("Invalid private key format.");
        }
        $privateKey = $this->stripZero($privateKey);

        if (strlen($privateKey) !== 64) {
            throw new InvalidArgumentException("Invalid private key length.");
        }
        $privateKey = $this->secp256k1->keyFromPrivate($privateKey, "hex");
        $publicKey = $privateKey->getPublic(false, "hex");

        return "0x" . $publicKey;
    }

    /**
     * recoverPublicKey
     *
     * @param string $hash
     * @param string $r
     * @param string $s
     * @param int $v
     * @return string
     */
    public function recoverPublicKey(string $hash, string $r, string $s, int $v) {
        if ($this->isHex($hash) === false) {
            throw new InvalidArgumentException("Invalid hash format.");
        }
        $hash = $this->stripZero($hash);

        if ($this->isHex($r) === false || $this->isHex($s) === false) {
            throw new InvalidArgumentException("Invalid signature format.");
        }
        $r = $this->stripZero($r);
        $s = $this->stripZero($s);

        if (strlen($r) !== 64 || strlen($s) !== 64) {
            throw new InvalidArgumentException("Invalid signature length.");
        }
        $publicKey = $this->secp256k1->recoverPubKey(
            $hash,
            [
                "r" => $r,
                "s" => $s
            ],
            $v
        );
        $publicKey = $publicKey->encode("hex");

        return "0x" . $publicKey;
    }

    /**
     * ecsign
     *
     * @param string $privateKey
     * @param string $message
     * @returnTatum\Cryptography\Elliptic\EC\Signature
     */
    public function ecsign(string $privateKey, string $message) {
        if ($this->isHex($privateKey) === false) {
            throw new InvalidArgumentException("Invalid private key format.");
        }
        $privateKeyLength = strlen($this->stripZero($privateKey));

        if ($privateKeyLength % 2 !== 0 && $privateKeyLength !== 64) {
            throw new InvalidArgumentException("Private key length was wrong.");
        }
        $secp256k1 = new EC("secp256k1");
        $privateKey = $secp256k1->keyFromPrivate($privateKey, "hex");
        $signature = $privateKey->sign($message, [
            "canonical" => true
        ]);
        // Ethereum v is recovery param + 35
        // Or recovery param + 35 + (chain id * 2)
        $signature->recoveryParam += 35;

        return $signature;
    }

    /**
     * hasPersonalMessage
     *
     * @param string $message
     * @return string
     */
    public function hashPersonalMessage(string $message) {
        $prefix = sprintf("\x19Ethereum Signed Message:\n%d", mb_strlen($message));
        return $this->sha3($prefix . $message);
    }
}
