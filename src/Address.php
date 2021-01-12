<?php
/**
 * @author Adeleye Benjamin Adesanoye <benjamin.adesanoye@tatum.io>
 */

namespace Tatum;
require(__DIR__."/wallet/Address.php");

trait Address{
use AddressOperation;

function generatePrivateKey($coin, $mnemonic, $index){
   $this->ThrowMnemonicException($mnemonic);
   return $this->generatePrivateKeyFromMnemonic(strtolower(trim($coin)), trim($mnemonic), trim($index));
}

function generateAddressFromXPub($coin, $xpub, $index){
   return $this->generateAddressFromXPubOperation(strtolower(trim($coin)), trim($xpub), trim($index));
}

function generateAddressFromPrivatekey($coin, $privateKey){
    return $this->generateAddressFromPrivatekeyOperation(strtolower(trim($coin)), trim($privateKey));
}

}