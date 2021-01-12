<?php
/**
 * @author Adeleye Benjamin Adesanoye <benjamin.adesanoye@tatum.io>
 */

namespace Tatum;
use BitWasp\Bitcoin\Crypto\Random\Random;
use BitWasp\Bitcoin\Key\Factory\HierarchicalKeyFactory;
use BitWasp\Bitcoin\Mnemonic\Bip39\Bip39Mnemonic;
use BitWasp\Bitcoin\Mnemonic\Bip39\Bip39SeedGenerator;
use BitWasp\Bitcoin\Mnemonic\MnemonicFactory;
use BitWasp\Bitcoin\Bitcoin;
use BitWasp\Bitcoin\Network\NetworkFactory;

trait WalletOperation{

function generateMnemonic(){
 // Generate a mnemonic
 $random = new Random();
 $entropy = $random->bytes(Bip39Mnemonic::MAX_ENTROPY_BYTE_LEN);
 $bip39 = MnemonicFactory::bip39();
return $bip39->entropyToMnemonic($entropy);
}

function generateBtcWallet($mnemonic = ""){
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

  $array = array("mnemonic" => $mnemonic, "xpub" => $hdwallet->toExtendedPublicKey());
  return json_encode($array);
}

function generateEthWallet($mnemonic = ""){
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

 function generateLtcWallet($mnemonic = ""){
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
  
    $array = array("mnemonic" => $mnemonic, "xpub" => $hdwallet->toExtendedPublicKey());
    return json_encode($array);
  }

  function generateBchWallet($mnemonic = ""){
    $path = $this->getPath("BCH");
    $mnemonic = $mnemonic != "" ? $mnemonic : $this->generateMnemonic();
    $seedGenerator = new Bip39SeedGenerator();
    $seed = $seedGenerator->getSeed($mnemonic);
    $factory = new HierarchicalKeyFactory();
    $root = $factory->fromEntropy($seed);
    $hdwallet = $root->derivePath($path);
  
    $array = array("mnemonic" => $mnemonic, "xpub" => $hdwallet->toExtendedPublicKey());
    return json_encode($array);
  }

function generateWalletOperation($coin, $mnemonic = ""){
if($this->network !== 'testnet' && $this->network !== 'mainnet'){
    throw new \TypeError(sprintf('Unsupported Network Type %s!', $this->network));
}
$testnet = $this->network === 'testnet' ? true : false;
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