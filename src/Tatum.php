<?php
/**
 * @author Adeleye Benjamin Adesanoye <benjamin.adesanoye@tatum.io>
 */

namespace Tatum;

require('../vendor/autoload.php');
require(__DIR__."/Constant.php");
require(__DIR__."/DotEnv.php");
require(__DIR__."/Base.php");
require(__DIR__."/Route.php");
require(__DIR__."/Request.php");
require(__DIR__."/Blockchain.php");
require(__DIR__."/Wallet.php");
require(__DIR__."/Address.php");
require(__DIR__."/Offchain.php");
require(__DIR__."/Ledger.php");
require(__DIR__."/Transaction.php");
require(__DIR__."/Contract.php");
require(__DIR__."/Record.php");
require(__DIR__."/KMS.php");
require(__DIR__."/Service.php");

class Tatum{
use Base, Route, Request, Blockchain, Wallet, Address, Offchain, Ledger, Transaction, Contract, Record, KMS, Service;

public function __construct() {
    $this->network = getenv('NETWORK');
    $this->apiKey = $this->network === 'mainnet' ? getenv('TATUM_API_KEY') : getenv('TATUM_TESTNET_API_KEY');
    $this->LogException = getenv('LOG_EXCEPTION');
    $this->TatumApiUrl = TATUM_API_URL;
    $this->TestVETUrl = TEST_VET_URL;
    $this->VETUrl = VET_URL;
    $this->supportedBlockchain = ['BTC', 'ETH', 'BCH', 'LTC', 'XRP', 'XLM', 'BNB', 
    'VET', 'NEO', 'GAS', 'MMY', 'PLTC', 'BAT', 'USDT', 'USDC', 'TUSD', 'MKR', 
    'LINK', 'PAX', 'PAXG', 'UNI', 'LEO', 'FREE', 'XCON'];
}

function getPath($coin){
if($this->network !== 'testnet' && $this->network !== 'mainnet'){
throw new \TypeError(sprintf('Unsupported Network Type %s!', $this->network));
}
$coin = strtoupper($coin);
if(Base::in_arrayi($coin, $this->supportedBlockchain)){
   if($this->network === 'mainnet'){
    if($coin === 'BTC'){
    return BTC_DERIVATION_PATH;
    }
    else if($coin === 'BCH'){
    return BCH_DERIVATION_PATH;
    }
    else if($coin === 'ETH'){
    return ETH_DERIVATION_PATH;
    }
    else if($coin === 'LTC'){
    return LTC_DERIVATION_PATH;
    }
    else if($coin === 'VET'){
    return VET_DERIVATION_PATH;
    }
    else if($coin === 'LYRA'){
    return LYRA_DERIVATION_PATH;
    }
    }
    else{
        return TESTNET_DERIVATION_PATH;
    }
}
else{
throw new \UnexpectedValueException(sprintf('Unsupported Blockchain %s!', strtoupper($coin)));
  }
}

function getNetwork(){
if($this->network !== 'testnet' && $this->network !== 'mainnet'){
throw new \TypeError(sprintf('Unsupported Network Type %s!', $this->network));
}
return $this->network;
}

function isMainNet(){
if($this->network !== 'testnet' && $this->network !== 'mainnet'){
throw new \TypeError(sprintf('Unsupported Network Type %s!', $this->network));
}
if($this->network === 'mainnet'){
$return = true;
}
else{
$return = false;
}
return $return;
}

function isTestNet(){
if($this->network !== 'testnet' && $this->network !== 'mainnet'){
throw new \TypeError(sprintf('Unsupported Network Type %s!', $this->network));
}
if($this->network === 'testnet'){
$return = true;
}
else{
$return = false;
}
return $return;
}

function ThrowMnemonicException($mnemonic){
    if($mnemonic !== "" && count(explode(" ", $mnemonic)) != 24){
        throw new \UnexpectedValueException(sprintf('Mnemonic must be exactly 24 words to be parsed!'));
    }
}
}