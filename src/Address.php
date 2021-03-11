<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

require(__DIR__."/wallet/addressExtended.php");
require(__DIR__."/wallet/Address.php");

trait Address{
use AddressOperation;

/**
 * Generate Private Key
 * @param $coin blockchain to generate wallet for
 * @param $index index of private key
 * @param $mnemonic mnemonic seed to use. must be present
 * @returns private key
 */

function generatePrivateKey($coin, $mnemonic, $index){
   $this->ThrowMnemonicException($mnemonic);
   return $this->generatePrivateKeyFromMnemonic(strtolower(trim($coin)), trim($mnemonic), trim($index));
}

/**
 * Generate Address
 * @param $coin blockchain to generate wallet for
 * @param $index index of private key
 * @param $xpub xpub to use. must be present
 * @returns address
 */

function generateAddressFromXPub($coin, $xpub, $index){
   return $this->generateAddressFromXPubOperation(strtolower(trim($coin)), trim($xpub), trim($index));
}

/**
 * Generate Address from Private Key Wif
 * @param $coin blockchain to generate wallet for
 * @param $privateKey private key to use. must be present
 * @returns address
 */

function generateAddressFromPrivatekey($coin, $privateKey){
    return $this->generateAddressFromPrivatekeyOperation(strtolower(trim($coin)), trim($privateKey));
}

}