<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

require(__DIR__."/wallet/Wallet.php");

trait Wallet{
use WalletOperation;
function generateWallet($coin, $mnemonic = ""){
   $this->ThrowMnemonicException($mnemonic);
   return $this->generateWalletOperation(strtolower(trim($coin)), trim($mnemonic));
}

}