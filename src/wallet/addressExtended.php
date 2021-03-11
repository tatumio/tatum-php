<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

// (c) 
// This script uses some of the code and ideas from the following repositories:
// https://github.com/dan-da/hd-wallet-derive

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

use BitWasp\Bitcoin\Bitcoin;

// For ethereum addresses
use kornrunner\Keccak;
use BitWasp\Bitcoin\Crypto\EcAdapter\Key\PublicKeyInterface;
use BitWasp\Bitcoin\Crypto\EcAdapter\Impl\PhpEcc\Serializer\Key\PublicKeySerializer;
use BitWasp\Bitcoin\Crypto\EcAdapter\EcAdapterFactory;
use Mdanter\Ecc\Serializer\Point\UncompressedPointSerializer;
use Mdanter\Ecc\EccFactory;

Trait addressExtended{

function getEthereumAddress(PublicKeyInterface $publicKey){
    static $pubkey_serializer = null;
    static $point_serializer = null;
    if(!$pubkey_serializer){
        $adapter = EcAdapterFactory::getPhpEcc(Bitcoin::getMath(), Bitcoin::getGenerator());
        $pubkey_serializer = new PublicKeySerializer($adapter);
        $point_serializer = new UncompressedPointSerializer(EccFactory::getAdapter());
    }

    $pubKey = $pubkey_serializer->parse($publicKey->getBuffer());
    $point = $publicKey->getPoint();
    $upk = $point_serializer->serialize($point);
    $upk = hex2bin(substr($upk, 2));

    $keccak = Keccak::hash($upk, 256);
    $eth_address_lower = strtolower(substr($keccak, -40));

    $hash = Keccak::hash($eth_address_lower, 256);
    $eth_address = '';
    for($i = 0; $i < 40; $i++) {
        // the nth letter should be uppercase if the nth digit of casemap is 1
        $char = substr($eth_address_lower, $i, 1);

        if(ctype_digit($char)){
            $eth_address .= $char;
        }
        else if('0' <= $hash[$i] && $hash[$i] <= '7'){
            $eth_address .= strtolower($char);
        }
        else{
            $eth_address .= strtoupper($char);
        }
    }

    return '0x'. $eth_address;
}

}