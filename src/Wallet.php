<?php
/**
 * @author Adeleye Benjamin Adesanoye <benjamin.adesanoye@tatum.io>
 */

namespace Tatum;
require(__DIR__."/wallet/Wallet.php");

trait Wallet{
use WalletOperation;
function generateWallet($coin, $mnemonic = ""){
   $this->ThrowMnemonicException($mnemonic);
   return $this->generateWalletOperation(strtolower(trim($coin)), trim($mnemonic));
}

}