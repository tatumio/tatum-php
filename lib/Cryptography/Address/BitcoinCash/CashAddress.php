<?php

namespace Tatum\Cryptography\Address\BitcoinCash;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Exceptions\Base32Exception;
use Tatum\Cryptography\Exceptions\BitcoinCashAddressException;
use Tatum\Cryptography\Exceptions\InvalidChecksumException;
use Tatum\Cryptography\Base32;

class CashAddress {
    /**
     * @var array
     */
    protected static $hashBits = [
        160 => 0,
        192 => 1,
        224 => 2,
        256 => 3,
        320 => 4,
        384 => 5,
        448 => 6,
        512 => 7
    ];

    /**
     * @var array
     */
    protected static $versionBits = [
        "pubkeyhash" => 0,
        "scripthash" => 1
    ];

    /**
     * @param string $prefix - prefix for address
     * @param string $scriptType - what type of address
     * @param string $hash - base256 binary, not HEX.
     * @return string
     * @throws Base32Exception
     * @throws BitcoinCashAddressException
     */
    public static function encode($prefix, $scriptType, $hash) {
        if (!array_key_exists($scriptType, self::$versionBits)) {
            throw new \RuntimeException("Unsupported script type");
        }

        $hashLength = strlen($hash);
        $addressVersion = self::createVersion($scriptType, $hashLength * 8);

        $bytes = array_merge([$addressVersion], array_values(unpack("C*", $hash)));
        $words = Base32::toWords(1 + $hashLength, $bytes);
        return Base32::encode($prefix, $words);
    }

    /**
     * @param $string - cashaddr string
     * @return string[] - prefix, scriptType, hash
     * @throws Base32Exception
     * @throws BitcoinCashAddressException
     */
    public static function decode($string) {
        try {
            /**
             * @var string $prefix
             * @var int[] $words
             */
            [$prefix, $words] = Base32::decode($string);
        } catch (InvalidChecksumException $e) {
            throw new BitcoinCashAddressException("Checksum failed to verify", 0, $e);
        } catch (Base32Exception $e) {
            throw new BitcoinCashAddressException("Failed to decode address", 0, $e);
        }

        $numWords = count($words);
        $bytes = Base32::fromWords($numWords, $words);
        $numBytes = count($bytes);

        [$scriptType, $hash] = self::extractPayload($numBytes, $bytes);

        return [$prefix, $scriptType, $hash];
    }

    /**
     * This function does not validate public keys beyond their
     * size and prefix. It will hash the data and produce the address,
     * even if it's invalid. You MUST validate them elsewhere.
     *
     * @param $prefix
     * @param $publicKey
     * @return string
     * @throws Base32Exception
     * @throws BitcoinCashAddressException
     */
    public static function pubKeyHashFromKey($prefix, $publicKey) {
        $length = strlen($publicKey);
        if ($length === 33) {
            if ($publicKey[0] !== "\x02" && $publicKey[0] !== "\x03") {
                throw new BitcoinCashAddressException("Invalid public key");
            }
        } elseif ($length === 65) {
            if ($publicKey[0] !== "\x04") {
                throw new BitcoinCashAddressException("Invalid public key");
            }
        } else {
            throw new BitcoinCashAddressException("Invalid public key");
        }

        return self::pubKeyHash($prefix, hash("ripemd160", hash("sha256", $publicKey, true), true));
    }

    /**
     * @param string $prefix
     * @param string $pubKeyHash
     * @return string
     * @throws Base32Exception
     * @throws BitcoinCashAddressException
     */
    public static function pubKeyHash($prefix, $pubKeyHash) {
        return self::hash160Type($prefix, "pubkeyhash", $pubKeyHash);
    }

    /**
     * @param string $prefix
     * @param string $scriptHash
     * @return string
     * @throws Base32Exception
     * @throws BitcoinCashAddressException
     */
    public static function scriptHash($prefix, $scriptHash) {
        return self::hash160Type($prefix, "scripthash", $scriptHash);
    }

    /**
     * @param string $prefix
     * @param string $type
     * @param string $hash160
     * @return string
     * @throws Base32Exception
     * @throws BitcoinCashAddressException
     */
    protected static function hash160Type($prefix, $type, $hash160) {
        if (strlen($hash160) !== 20) {
            throw new BitcoinCashAddressException("{$type} must be 20 bytes");
        }

        return self::encode($prefix, $type, $hash160);
    }

    /**
     * @param string $scriptType
     * @param int $hashLengthBits
     * @return int
     * @throws BitcoinCashAddressException
     */
    protected static function createVersion($scriptType, $hashLengthBits) {
        if (($scriptType === "pubkeyhash" || $scriptType === "scripthash") && $hashLengthBits !== 160) {
            throw new BitcoinCashAddressException("Invalid hash length [$hashLengthBits bits] for {$scriptType}");
        }

        return (self::$versionBits[$scriptType] << 3) | self::$hashBits[$hashLengthBits];
    }

    /**
     * @param int $version
     * @return array
     * @throws BitcoinCashAddressException
     */
    protected static function decodeVersion($version) {
        if (($version >> 7) & 1) {
            throw new BitcoinCashAddressException("Invalid version - MSB is reserved");
        }

        $scriptMarkerBits = ($version >> 3) & 0x1f;
        $hashMarkerBits = $version & 0x07;

        $hashBitsMap = array_flip(self::$hashBits);
        if (!array_key_exists($hashMarkerBits, $hashBitsMap)) {
            throw new BitcoinCashAddressException("Invalid version or hash length");
        }
        $hashLength = $hashBitsMap[$hashMarkerBits];

        switch ($scriptMarkerBits) {
            case 0:
                $scriptType = "pubkeyhash";
                break;
            case 1:
                $scriptType = "scripthash";
                break;
            default:
                throw new BitcoinCashAddressException("Invalid version or script type");
        }

        return [$scriptType, $hashLength];
    }

    /**
     * @param int $numBytes
     * @param int[] $payloadBytes
     * @return string[] - script type and hash
     * @throws BitcoinCashAddressException
     */
    protected static function extractPayload($numBytes, $payloadBytes) {
        if ($numBytes < 1) {
            throw new BitcoinCashAddressException("Empty base32 string");
        }

        [$scriptType, $hashLengthBits] = self::decodeVersion($payloadBytes[0]);

        if ($hashLengthBits / 8 !== $numBytes - 1) {
            throw new BitcoinCashAddressException("Hash length does not match version");
        }

        $hash = pack("C*", ...array_slice($payloadBytes, 1));

        return [$scriptType, $hash];
    }
}
