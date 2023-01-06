<?php

/**
 * This file is part of rlp package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Util\Ethereum\RLP;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException;

/**
 * It's a string type instance for ethereum recursive length encoding.
 * Note: there is only static function in this class.
 *
 * @author Peter Lai
 * @link https://www.web3p.xyz
 * @filesource https://github.com/web3p/rlp
 */
class Str {
    /**
     * Return encoded string of given input and encoding.
     *
     * @param string $input input
     * @param string $encoding encoding
     * @return string encoded string of given input and encoding
     */
    static function encode(string $input, string $encoding = "utf8") {
        $output = "";
        switch ($encoding) {
            case "hex":
                if (strpos($input, "0x") === 0) {
                    $input = str_replace("0x", "", $input);
                }
                $output = $input;

                break;
            case "ascii":
                $outputs = array_map("ord", str_split($input, 1));
                foreach ($outputs as $src) {
                    $output .= dechex($src);
                }
                break;
            case "utf8":
                $outputs = unpack("C*", $input);
                foreach ($outputs as $src) {
                    $output .= dechex($src);
                }
                break;
            default:
                throw new InvalidArgumentException('Didn\'t support the encoding.');
                break;
        }
        $outputLen = mb_strlen($output);
        if ($outputLen > 0 && $outputLen % 2 !== 0) {
            return "0" . $output;
        }
        return $output;
    }

    /**
     * Return decoded hex encoded of given input, same with hex2bin
     *
     * @param string $input hex encoded string
     * @return string decoded of hex encoded string
     */
    static function decodeHex(string $input) {
        if (strpos($input, "0x") === 0) {
            $input = str_replace("0x", "", $input);
        }
        if (!preg_match("/[a-f0-9]+/i", $input)) {
            throw new InvalidArgumentException("Invalid hex string.");
        }
        $inputLen = mb_strlen($input);
        if ($inputLen > 0 && $inputLen % 2 !== 0) {
            $input = "0" . $input;
            $inputLen += 1;
        }
        $output = "";
        $start = 0;
        while ($start < $inputLen) {
            $hex = mb_substr($input, $start, 2);
            $chr = chr(hexdec($hex));
            $output .= $chr;
            $start += 2;
        }
        return $output;
    }
}
