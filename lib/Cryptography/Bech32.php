<?php

namespace Tatum\Cryptography;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Exceptions\Bech32Exception;

class Bech32 {
    const GENERATOR = [0x3b6a57b2, 0x26508e6d, 0x1ea119fa, 0x3d4233dd, 0x2a1462b3];
    const CHARSET = "qpzry9x8gf2tvdw0s3jn54khce6mua7l";
    const CHARKEY_KEY = [
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        15,
        -1,
        10,
        17,
        21,
        20,
        26,
        30,
        7,
        5,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        29,
        -1,
        24,
        13,
        25,
        9,
        8,
        23,
        -1,
        18,
        22,
        31,
        27,
        19,
        -1,
        1,
        0,
        3,
        16,
        11,
        28,
        12,
        14,
        6,
        4,
        2,
        -1,
        -1,
        -1,
        -1,
        -1,
        -1,
        29,
        -1,
        24,
        13,
        25,
        9,
        8,
        23,
        -1,
        18,
        22,
        31,
        27,
        19,
        -1,
        1,
        0,
        3,
        16,
        11,
        28,
        12,
        14,
        6,
        4,
        2,
        -1,
        -1,
        -1,
        -1,
        -1
    ];

    /**
     * @param int[] $values
     * @param int $numValues
     * @return int
     */
    static function polyMod(array $values, $numValues) {
        $chk = 1;
        for ($i = 0; $i < $numValues; $i++) {
            $top = $chk >> 25;
            $chk = (($chk & 0x1ffffff) << 5) ^ $values[$i];

            for ($j = 0; $j < 5; $j++) {
                $value = ($top >> $j) & 1 ? self::GENERATOR[$j] : 0;
                $chk ^= $value;
            }
        }

        return $chk;
    }

    /**
     * Expands the human readable part into a character array for checksumming.
     * @param string $hrp
     * @param int $hrpLen
     * @return int[]
     */
    static function hrpExpand($hrp, $hrpLen) {
        $expand1 = [];
        $expand2 = [];
        for ($i = 0; $i < $hrpLen; $i++) {
            $o = ord($hrp[$i]);
            $expand1[] = $o >> 5;
            $expand2[] = $o & 31;
        }

        return array_merge($expand1, [0], $expand2);
    }

    /**
     * Converts words of $fromBits bits to $toBits bits in size.
     *
     * @param int[] $data - character array of data to convert
     * @param int $inLen - number of elements in array
     * @param int $fromBits - word (bit count) size of provided data
     * @param int $toBits - requested word size (bit count)
     * @param bool $pad - whether to pad (only when encoding)
     * @return int[]
     * @throws Bech32Exception
     */
    static function convertBits(array $data, $inLen, $fromBits, $toBits, $pad = true) {
        $acc = 0;
        $bits = 0;
        $ret = [];
        $maxv = (1 << $toBits) - 1;
        $maxacc = (1 << $fromBits + $toBits - 1) - 1;

        for ($i = 0; $i < $inLen; $i++) {
            $value = $data[$i];
            if ($value < 0 || $value >> $fromBits) {
                throw new Bech32Exception("Invalid value for convert bits");
            }

            $acc = (($acc << $fromBits) | $value) & $maxacc;
            $bits += $fromBits;

            while ($bits >= $toBits) {
                $bits -= $toBits;
                $ret[] = ($acc >> $bits) & $maxv;
            }
        }

        if ($pad) {
            if ($bits) {
                $ret[] = ($acc << $toBits - $bits) & $maxv;
            }
        } elseif ($bits >= $fromBits || ($acc << $toBits - $bits) & $maxv) {
            throw new Bech32Exception("Invalid data");
        }

        return $ret;
    }

    /**
     * @param string $hrp
     * @param int[] $convertedDataChars
     * @return int[]
     */
    static function createChecksum($hrp, array $convertedDataChars) {
        $values = array_merge(self::hrpExpand($hrp, strlen($hrp)), $convertedDataChars);
        $polyMod = self::polyMod(array_merge($values, [0, 0, 0, 0, 0, 0]), count($values) + 6) ^ 1;
        $results = [];
        for ($i = 0; $i < 6; $i++) {
            $results[$i] = ($polyMod >> 5 * (5 - $i)) & 31;
        }

        return $results;
    }

    /**
     * Verifies the checksum given $hrp and $convertedDataChars.
     *
     * @param string $hrp
     * @param int[] $convertedDataChars
     * @return bool
     */
    static function verifyChecksum($hrp, array $convertedDataChars) {
        $expandHrp = self::hrpExpand($hrp, strlen($hrp));
        $r = array_merge($expandHrp, $convertedDataChars);
        $poly = self::polyMod($r, count($r));
        return $poly === 1;
    }

    /**
     * @param string $hrp
     * @param array $combinedDataChars
     * @return string
     */
    static function encode($hrp, array $combinedDataChars) {
        $checksum = self::createChecksum($hrp, $combinedDataChars);
        $characters = array_merge($combinedDataChars, $checksum);

        $encoded = [];
        for ($i = 0, $n = count($characters); $i < $n; $i++) {
            $encoded[$i] = self::CHARSET[$characters[$i]];
        }

        return "{$hrp}1" . implode("", $encoded);
    }

    /**
     * @throws Bech32Exception
     * @param string $sBech - the bech32 encoded string
     * @return array - returns [$hrp, $dataChars]
     */
    static function decodeRaw($sBech) {
        $length = strlen($sBech);
        if ($length < 8) {
            throw new Bech32Exception("Bech32 string is too short");
        }

        $chars = array_values(unpack("C*", $sBech));

        $haveUpper = false;
        $haveLower = false;
        $positionOne = -1;

        for ($i = 0; $i < $length; $i++) {
            $x = $chars[$i];
            if ($x < 33 || $x > 126) {
                throw new Bech32Exception("Out of range character in bech32 string");
            }

            if ($x >= 0x61 && $x <= 0x7a) {
                $haveLower = true;
            }

            if ($x >= 0x41 && $x <= 0x5a) {
                $haveUpper = true;
                $x = $chars[$i] = $x + 0x20;
            }

            // find location of last '1' character
            if ($x === 0x31) {
                $positionOne = $i;
            }
        }

        if ($haveUpper && $haveLower) {
            throw new Bech32Exception("Data contains mixture of higher/lower case characters");
        }

        if ($positionOne === -1) {
            throw new Bech32Exception("Missing separator character");
        }

        if ($positionOne < 1) {
            throw new Bech32Exception("Empty HRP");
        }

        if ($positionOne + 7 > $length) {
            throw new Bech32Exception("Too short checksum");
        }

        $hrp = pack("C*", ...array_slice($chars, 0, $positionOne));

        $data = [];
        for ($i = $positionOne + 1; $i < $length; $i++) {
            $data[] = $chars[$i] & 0x80 ? -1 : self::CHARKEY_KEY[$chars[$i]];
        }

        if (!self::verifyChecksum($hrp, $data)) {
            throw new Bech32Exception("Invalid bech32 checksum");
        }

        return [$hrp, array_slice($data, 0, -6)];
    }

    /**
     * Validates a bech32 string and returns [$hrp, $dataChars] if
     * the conversion was successful. An exception is thrown on invalid
     * data.
     *
     * @param string $sBech - the bech32 encoded string
     * @return array - returns [$hrp, $dataChars]
     * @throws Bech32Exception
     */
    static function decode($sBech) {
        $length = strlen($sBech);
        if ($length > 90) {
            throw new Bech32Exception("Bech32 string cannot exceed 90 characters in length");
        }

        return self::decodeRaw($sBech);
    }

    /**
     * @param int $version
     * @param string $program
     * @throws Bech32Exception
     */
    static function validateWitnessProgram($version, $program) {
        if ($version < 0 || $version > 16) {
            throw new Bech32Exception("Invalid witness version");
        }

        $sizeProgram = strlen($program);
        if ($version === 0) {
            if ($sizeProgram !== 20 && $sizeProgram !== 32) {
                throw new Bech32Exception("Invalid size for V0 witness program");
            }
        }

        if ($sizeProgram < 2 || $sizeProgram > 40) {
            throw new Bech32Exception("Witness program size was out of valid range");
        }
    }

    /**
     * @param string $hrp - human readable part
     * @param int $version - segwit script version
     * @param string $program - segwit witness program
     * @return string - the encoded address
     * @throws Bech32Exception
     */
    static function encodeSegwit($hrp, $version, $program) {
        $version = (int) $version;
        self::validateWitnessProgram($version, $program);

        $programChars = array_values(unpack("C*", $program));
        $programBits = self::convertBits($programChars, count($programChars), 8, 5, true);
        $encodeData = array_merge([$version], $programBits);

        return self::encode($hrp, $encodeData);
    }

    /**
     * @param string $hrp - human readable part
     * @param string $bech32 - Bech32 string to be decoded
     * @return array - [$version, $program]
     * @throws Bech32Exception
     */
    static function decodeSegwit($hrp, $bech32) {
        [$hrpGot, $data] = self::decode($bech32);
        if ($hrpGot !== $hrp) {
            throw new Bech32Exception("Invalid prefix for address");
        }

        $dataLen = count($data);
        if ($dataLen === 0 || $dataLen > 65) {
            throw new Bech32Exception("Invalid length for segwit address");
        }

        $decoded = self::convertBits(array_slice($data, 1), count($data) - 1, 5, 8, false);
        $program = pack("C*", ...$decoded);

        self::validateWitnessProgram($data[0], $program);

        return [$data[0], $program];
    }
}
