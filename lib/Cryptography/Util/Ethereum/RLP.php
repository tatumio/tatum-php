<?php

/**
 * This file is part of rlp package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Util\Ethereum;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException;
use RuntimeException;
use Tatum\Cryptography\Util\Ethereum\RLP\Str;
use Tatum\Cryptography\Util\Ethereum\RLP\Numeric;

/**
 * It's a instance for ethereum recursive length encoding.
 * 
 * RLP encode:
 * 
 * ```php
 * use Tatum\Cryptography\Util\Ethereum\RLP;

 * $rlp = new RLP;
 * // c483646f67
 * $encoded = $rlp->encode(['dog']);
 * 
 * // 83646f67
 * $encoded = $rlp->encode('dog');
 * ```
 * 
 * RLP decode:
 * 
 * ```php
 * use Tatum\Cryptography\Util\Ethereum\RLP;
 * use Tatum\Cryptography\Util\Ethereum\RLP\Types\Str;
 * 
 * $rlp = new RLP;
 * $encoded = $rlp->encode(['dog']);
 * 
 * // only accept 0x prefixed hex string
 * $decoded = $rlp->decode('0x' . $encoded);
 * 
 * // show 646f67
 * echo $decoded[0];
 * 
 * // show dog
 * echo hex2bin($decoded[0]);
 * 
 * // or you can
 * echo Str::decodeHex($decoded[0]);
 * ```
 * 
 * @author Peter Lai
 * @link https://www.web3p.xyz
 * @filesource https://github.com/web3p/rlp
 */
class RLP {
    /**
     * Return RLP encoded of the given inputs.
     *
     * @param mixed $inputs mixed type of data you want to RLP encode
     * @return string RLP encoded hex string of inputs
     */
    public function encode($inputs) {
        $output = "";
        if (is_array($inputs)) {
            foreach ($inputs as $input) {
                $output .= $this->encode($input);
            }
            $length = mb_strlen($output) / 2;
            return $this->encodeLength($length, 192) . $output;
        }
        $input = $this->encodeInput($inputs);
        $length = mb_strlen($input) / 2;

        // first byte < 0x80
        if ($length === 1 && hexdec(mb_substr($input, 0, 2)) < 0x80) {
            return $input;
        }
        return $this->encodeLength($length, 128) . $input;
    }

    /**
     * Return RLP decoded of the given hex encoded data.
     *
     * @param string $input hex encoded data
     * @return array decoded data
     */
    public function decode(string $input) {
        if (strpos($input, "0x") === 0) {
            $input = str_replace("0x", "", $input);
        }
        if (!preg_match("/[a-f0-9]/i", $input)) {
            throw new InvalidArgumentException('The input type didn\'t support.');
        }
        $input = $this->padToEven($input);
        $decoded = $this->decodeData($input);
        return $decoded["data"];
    }

    /**
     * Main function of RLP decode.
     *
     * @param string $input hex encoded data
     * @return array decoded data
     */
    protected function decodeData(string $input) {
        $firstByte = mb_substr($input, 0, 2);
        $firstByteDec = hexdec($firstByte);

        if ($firstByteDec <= 0x7f) {
            return [
                "data" => $firstByte,
                "remainder" => mb_substr($input, 2)
            ];
        } elseif ($firstByteDec <= 0xb7) {
            $length = $firstByteDec - 0x7f;
            $data = "";

            if ($firstByteDec !== 0x80) {
                $data = mb_substr($input, 2, ($length - 1) * 2);
            }
            $firstByteData = hexdec(mb_substr($data, 0, 2));
            if ($length === 2 && $firstByteData < 0x80) {
                throw new RuntimeException("Byte must be less than 0x80.");
            }
            return [
                "data" => $data,
                "remainder" => mb_substr($input, $length * 2)
            ];
        } elseif ($firstByteDec <= 0xbf) {
            $llength = $firstByteDec - 0xb6;
            $hexLength = mb_substr($input, 2, ($llength - 1) * 2);

            if ($hexLength === "00") {
                throw new RuntimeException("Invalid RLP.");
            }
            $length = hexdec($hexLength);
            $data = mb_substr($input, $llength * 2, $length * 2);

            if (mb_strlen($data) < $length * 2) {
                throw new RuntimeException("Invalid RLP.");
            }
            return [
                "data" => $data,
                "remainder" => mb_substr($input, ($length + $llength) * 2)
            ];
        } elseif ($firstByteDec <= 0xf7) {
            $length = $firstByteDec - 0xbf;
            $innerRemainder = mb_substr($input, 2, ($length - 1) * 2);
            $decoded = [];

            while (mb_strlen($innerRemainder)) {
                $data = $this->decodeData($innerRemainder);
                $decoded[] = $data["data"];
                $innerRemainder = $data["remainder"];
            }
            return [
                "data" => $decoded,
                "remainder" => mb_substr($input, $length * 2)
            ];
        } else {
            $llength = $firstByteDec - 0xf6;
            $hexLength = mb_substr($input, 2, ($llength - 1) * 2);
            $decoded = [];

            if ($hexLength === "00") {
                throw new RuntimeException("Invalid RLP.");
            }
            $length = hexdec($hexLength);
            $totalLength = $llength + $length;

            if ($totalLength * 2 > mb_strlen($input)) {
                throw new RuntimeException("Invalid RLP: total length is bigger than data length.");
            }
            $innerRemainder = $hexLength = mb_substr($input, $llength * 2, $totalLength * 2);

            if (mb_strlen($innerRemainder) === 0) {
                throw new RuntimeException("Invalid RLP: list has invalid length.");
            }

            while (mb_strlen($innerRemainder)) {
                $data = $this->decodeData($innerRemainder);
                $decoded[] = $data["data"];
                $innerRemainder = $data["remainder"];
            }
            return [
                "data" => $decoded,
                "remainder" => mb_substr($input, $length * 2)
            ];
        }
    }

    /**
     * Return RLP encoded the length of data.
     *
     * @param int $length length of data
     * @param int $offset offset of data
     * @return string hex encoded of the length
     */
    protected function encodeLength(int $length, int $offset) {
        if ($length < 56) {
            return dechex(strval($length + $offset));
        }
        $hexLength = $this->intToHex($length);
        $firstByte = $this->intToHex($offset + 55 + strlen($hexLength) / 2);
        return $firstByte . $hexLength;
    }

    /**
     * Return hex of the given integer.
     *
     * @param int $input integer
     * @return string hex encoded of the input
     */
    protected function intToHex(int $input) {
        $hex = dechex($input);

        return $this->padToEven($hex);
    }

    /**
     * Pad hex encoded data to even length (add 0).
     *
     * @param string $input hex encoded string
     * @return string hex encoded string
     */
    protected function padToEven(string $input) {
        if (strlen($input) % 2 !== 0) {
            $input = "0" . $input;
        }
        return $input;
    }

    /**
     * Main encode function to transform data to hex encoded string.
     *
     * @param mixed $input data
     * @return string hex encoded string
     */
    protected function encodeInput($input) {
        if (is_string($input)) {
            if (strpos($input, "0x") === 0) {
                return Str::encode($input, "hex");
            }
            return Str::encode($input);
        } elseif (is_numeric($input)) {
            return Numeric::encode($input);
        } elseif ($input === null) {
            return "";
        }
        throw new InvalidArgumentException('The input type didn\'t support.');
    }
}
