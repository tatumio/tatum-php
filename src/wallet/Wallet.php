<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

use BitWasp\Bitcoin\Crypto\Random\Random;
use BitWasp\Bitcoin\Key\Factory\HierarchicalKeyFactory;
use BitWasp\Bitcoin\Mnemonic\Bip39\Bip39Mnemonic;
use BitWasp\Bitcoin\Mnemonic\Bip39\Bip39SeedGenerator;
use BitWasp\Bitcoin\Mnemonic\MnemonicFactory;
use BitWasp\Bitcoin\Bitcoin;
use BitWasp\Bitcoin\Network\NetworkFactory;
use Btccom\BitcoinCash\Network\Networks\BitcoinCash;
use Btccom\BitcoinCash\Network\Networks\BitcoinCashTestnet;

trait WalletOperation{

/**
 * Generate mnemonic seed to use
 * @returns bip39 mnemonic
 */

function generateMnemonic(){
 // Generate a mnemonic
 $random = new Random();
 $entropy = $random->bytes(Bip39Mnemonic::MAX_ENTROPY_BYTE_LEN);
 $bip39 = MnemonicFactory::bip39();
return $bip39->entropyToMnemonic($entropy);
}

/**
 * Generate Bitcoin wallet
 * @param $mnemonic mnemonic seed to use
 * @returns wallet
 */

function generateBtcWallet(string $mnemonic = ""){
    $path = $this->getPath("BTC");
    $Bitcoin = new Bitcoin();
    $Bitcoin->setNetwork($this->isMainNet() ? NetworkFactory::bitcoin() : NetworkFactory::bitcoinTestnet());
    $network = $Bitcoin->getNetwork();
    $mnemonic = $mnemonic != "" ? $mnemonic : $this->generateMnemonic();
    $seedGenerator = new Bip39SeedGenerator();
    $seed = $seedGenerator->getSeed($mnemonic);
    $factory = new HierarchicalKeyFactory();
    $root = $factory->fromEntropy($seed);
    $hdwallet = $root->derivePath($path);

  $array = array("mnemonic" => $mnemonic, "xpub" => $hdwallet->toExtendedPublicKey($network));
  return json_encode($array);
}

/**
 * Generate Ethereum or any other ERC20 wallet
 * @param $mnemonic mnemonic seed to use
 * @returns wallet
 */

function generateEthWallet(string $mnemonic = ""){
    $path = $this->getPath("ETH");
    $mnemonic = $mnemonic != "" ? $mnemonic : $this->generateMnemonic();
    $seedGenerator = new Bip39SeedGenerator();
    $seed = $seedGenerator->getSeed($mnemonic);
    $factory = new HierarchicalKeyFactory();
    $root = $factory->fromEntropy($seed);
    $hdwallet = $root->derivePath($path);
  
    $array = array("mnemonic" => $mnemonic, "xpub" => $hdwallet->toExtendedPublicKey());
    return json_encode($array);
 }

 /**
 * Generate Litecoin wallet
 * @param $mnemonic mnemonic seed to use
 * @returns wallet
 */

 function generateLtcWallet(string $mnemonic = ""){
    $path = $this->getPath("LTC");
    $Bitcoin = new Bitcoin();
    $Bitcoin->setNetwork($this->isMainNet() ? NetworkFactory::litecoin() : NetworkFactory::litecoinTestnet());
    $network = $Bitcoin->getNetwork();
    $mnemonic = $mnemonic != "" ? $mnemonic : $this->generateMnemonic();
    $seedGenerator = new Bip39SeedGenerator();
    $seed = $seedGenerator->getSeed($mnemonic);
    $factory = new HierarchicalKeyFactory();
    $root = $factory->fromEntropy($seed);
    $hdwallet = $root->derivePath($path);
  
    $array = array("mnemonic" => $mnemonic, "xpub" => $hdwallet->toExtendedPublicKey($network));
    return json_encode($array);
  }

/**
 * Generate Bitcoin Cash wallet
 * @param $mnemonic mnemonic seed to use
 * @returns wallet
 */
  function generateBchWallet(string $mnemonic = ""){
    if($this->isMainNet()){
    $Bitcoin = new Bitcoin();
    $Bitcoin->setNetwork($this->isMainNet() ? new BitcoinCash() : new BitcoinCashTestnet());
    $network = $Bitcoin->getNetwork();
    $path = $this->getPath("BCH");
    $mnemonic = $mnemonic != "" ? $mnemonic : $this->generateMnemonic();
    $seedGenerator = new Bip39SeedGenerator();
    $seed = $seedGenerator->getSeed($mnemonic);
    $factory = new HierarchicalKeyFactory();
    $root = $factory->fromEntropy($seed);
    $hdwallet = $root->derivePath($path);
  
    $array = array("mnemonic" => $mnemonic, "xpub" => $hdwallet->toExtendedPublicKey($network));
    return json_encode($array);
    }
    else{
      $ext = $mnemonic != "" ? "?mnemonic=".rawurlencode($mnemonic) : "";
    return $this->get("/{$this->getRoute("BCH")}/wallet".$ext);
    }
  }

 /**
 * Generate wallet
 * @param $coin blockchain to generate wallet for
 * @param $mnemonic mnemonic seed to use. If not present, new one will be generated
 * @returns wallet or a combination of address and xpub
 */

function generateWalletOperation(string $coin, string $mnemonic = ""){
if($this->network !== 'testnet' && $this->network !== 'mainnet'){
    throw new \TypeError(sprintf('Unsupported Network Type %s!', $this->network));
}
if($this->in_arrayi($coin, $this->supportedBlockchain)){
    switch($coin){
        case 'btc':
        return $this->generateBtcWallet($mnemonic);
        break;
        case 'eth':
        case 'usdt':
        case 'usdc':
        case 'tusd':
        case 'leo':
        case 'link':
        case 'uni':
        case 'free':
        case 'mkr':
        case 'bat':
        case 'pax':
        case 'paxg':
        case 'pltc':
        case 'xcon':
        case 'mmy':
        return $this->generateEthWallet($mnemonic);
        break;
        case 'bch':
        return $this->generateBchWallet($mnemonic);
        break;
        case 'ltc':
        return $this->generateLtcWallet($mnemonic);
        break;
        case 'xrp':
        return "xrp";
        break;
        case 'xlm':
        return "xlm";
        break;
        case 'bnb':
        return "bnb";
        break;
        case 'vet':
        return "vet";
        break;
        case 'neo':
        return "neo";
        break;
        case 'libra':
        return "libra";
        break;
        case 'scrypta':
        return "scrypta";
        break;
        default:
        throw new \UnexpectedValueException(sprintf('Unsupported Blockchain %s!', strtoupper($coin)));
        break;
        }
}
else{
    throw new \UnexpectedValueException(sprintf('Unsupported Blockchain %s!', strtoupper($coin)));
 }
}
}