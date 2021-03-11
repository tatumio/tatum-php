<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
define("TATUM", true);
define("TATUMIO", true);
define("TATUMPHP", true);
define("TATUMLIB", true);

if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

require('../vendor/autoload.php');
require(__DIR__."/exception/TatumException.php");
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
require(__DIR__."/Security.php");
require(__DIR__."/Transaction.php");
require(__DIR__."/Contract.php");
require(__DIR__."/Record.php");
require(__DIR__."/KMS.php");
require(__DIR__."/Service.php");

class Tatum{
use Base, Route, Request, Blockchain, BitcoinBlockchain, BitcoinTransaction, EthereumBlockchain,
EthereumTransaction, BcashBlockchain, BcashTransaction, LitecoinBlockchain, LitecoinTransaction, 
addressExtended, Wallet, Address, Offchain, Ledger, Transaction, Contract, Record, KMS, Service,
LedgerVirtualCurrency, LedgerTransaction, LedgerSubscription, LedgerOrderBook, LedgerCustomer, LedgerAccount,
SecurityAddress, SecurityKMS, OffchainCommon, OffchainBitcoin, OffchainBcash, OffchainEthereum, OffchainLitecoin, OffchainKMS;

public function __construct() {
    $this->network = getenv('NETWORK');
    $this->apiKey = $this->network === 'mainnet' ? getenv('TATUM_API_KEY') : getenv('TATUM_TESTNET_API_KEY');
    $this->doLogException = getenv('LOG_EXCEPTION');
    $this->TatumApiUrl = TATUM_API_URL;
    $this->TestVETUrl = TEST_VET_URL;
    $this->VETUrl = VET_URL;
    $this->supportedBlockchain = ['BTC', 'ETH', 'BCH', 'LTC', 'XRP', 'XLM', 'BNB', 
    'VET', 'NEO', 'GAS', 'MMY', 'PLTC', 'BAT', 'USDT', 'USDC', 'TUSD', 'MKR', 
    'LINK', 'PAX', 'PAXG', 'UNI', 'LEO', 'FREE', 'XCON'];
    $this->supportedETHBlockchain = ['ETH', 'MMY', 'PLTC', 'BAT', 'USDT', 'USDC', 'TUSD', 'MKR', 'LINK', 'PAX', 'PAXG', 'UNI', 'LEO', 'FREE', 'XCON'];
}

function getPath(string $coin){
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

function isLiteCoinAddress($address){
if($this->isTestNet()){
if(substr($address, 0) === '2' || substr($address, 0) == 'M'){
  //throw new \UnexpectedValueException('Unsupported Litecoin Address provided!');
}
}
}

function checkXpub($xpub){
if(!isset($xpub) || $xpub == "" || $xpub == '0'){
throw new \UnexpectedValueException('Xpub is required to be passed as must be valid string!'); 
}
}

function checkIndex(int $index){
if(!isset($index) || !is_numeric($index)){
throw new \UnexpectedValueException(sprintf('Index Must be a valid integer, given %s!', $index)); 
}
}

function checkMnemonic(string $mnemonic){
if(!isset($mnemonic) || $mnemonic == "" || count(explode(" ",$mnemonic)) != 24){
throw new \UnexpectedValueException(sprintf('Mnemonic must be exactly 24 words to be parsed, given '.count(explode(" ",$mnemonic)).' words!', $mnemonic)); 
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

function ThrowMnemonicException(string $mnemonic){
    if($mnemonic !== "" && count(explode(" ", $mnemonic)) != 24){
        throw new \UnexpectedValueException(sprintf('Mnemonic must be exactly 24 words to be parsed!'));
    }
}
}