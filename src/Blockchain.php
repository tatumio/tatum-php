<?php
/**
 * @author Adeleye Benjamin Adesanoye <benjamin.adesanoye@tatum.io>
 */

namespace Tatum;
require(__DIR__."/blockchain/Blockchain.php");

trait Blockchain{

function createWallets($coin, $mnemonic = ""){
    //$this->getHash()
   $ext = $mnemonic != "" ? "?mnemonic={$mnemonic}" : "";
   return $this->get("/{$this->getRoute($coin)}/wallet".$ext); 
}

function createHDWalletAddresss($coin, $xpub, $index){
    return $this->get("/{$this->getRoute($coin)}/address/{$xpub}/{$index}"); 
}

function createHDWalletPrivateKeys($coin, $data){
    return $this->post($data, "/{$this->getRoute($coin)}/wallet/priv"); 
}

}