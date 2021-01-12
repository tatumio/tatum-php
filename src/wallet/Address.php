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
use BitWasp\Bitcoin\Key\Factory\PublicKeyFactory;
use BitWasp\Bitcoin\Address\PayToPubKeyHashAddress;
use BitWasp\Bitcoin\Key\Factory\PrivateKeyFactory;
use BitWasp\Bitcoin\Bitcoin;
use BitWasp\Bitcoin\Network\NetworkFactory;

use BitWasp\Bitcoin\Address\AddressCreator;
use BitWasp\Bitcoin\Key\Deterministic\HierarchicalKey;
use BitWasp\Bitcoin\Script\P2shScript;
use BitWasp\Bitcoin\Script\ScriptFactory;

trait AddressOperation{

function generateBtcPrivateKey($mnemonic, $index){
    $Bitcoin = new Bitcoin();
    $Bitcoin->setNetwork($this->isMainNet() ? NetworkFactory::bitcoin() : NetworkFactory::bitcoinTestnet());
    $network = $Bitcoin->getNetwork();
    $path = $this->getPath("BTC");
    $seedGenerator = new Bip39SeedGenerator();
    $seed = $seedGenerator->getSeed($mnemonic);
    $factory = new HierarchicalKeyFactory();
    $root = $factory->fromEntropy($seed);
    $hdwallet = $root->derivePath($path."/".$index)->getPrivateKey();
    $array = array("key" => $hdwallet->toWif($network));
    return json_encode($array);
}

function generateEthPrivateKey($mnemonic, $index){
    $Bitcoin = new Bitcoin();
    $Bitcoin->setNetwork(NetworkFactory::bitcoin());
    $network = $Bitcoin->getNetwork();
    $path = $this->getPath("ETH");
    $seedGenerator = new Bip39SeedGenerator();
    $seed = $seedGenerator->getSeed($mnemonic);
    $factory = new HierarchicalKeyFactory();
    $root = $factory->fromEntropy($seed);
    $hdwallet = $root->derivePath($path."/".$index)->getPrivateKey();
    $array = array("key" => $hdwallet->toWif($network));
    return json_encode($array);
}

function generateLtcPrivateKey($mnemonic, $index){
    $Bitcoin = new Bitcoin();
    $Bitcoin->setNetwork($this->isMainNet() ? NetworkFactory::litecoin() : NetworkFactory::litecoinTestnet());
    $network = $Bitcoin->getNetwork();
    $path = $this->getPath("LTC");
    $seedGenerator = new Bip39SeedGenerator();
    $seed = $seedGenerator->getSeed($mnemonic);
    $factory = new HierarchicalKeyFactory();
    $root = $factory->fromEntropy($seed);
    $hdwallet = $root->derivePath($path."/".$index)->getPrivateKey();
    $array = array("key" => $hdwallet->toWif($network));
    return json_encode($array);
}

function generateBchPrivateKey($mnemonic, $index){
    $Bitcoin = new Bitcoin();
    $Bitcoin->setNetwork($this->isMainNet() ? NetworkFactory::bitcoin() : NetworkFactory::bitcoinTestnet());
    $network = $Bitcoin->getNetwork();
    $path = $this->getPath("BCH");
    $seedGenerator = new Bip39SeedGenerator();
    $seed = $seedGenerator->getSeed($mnemonic);
    $factory = new HierarchicalKeyFactory();
    $root = $factory->fromEntropy($seed);
    $hdwallet = $root->derivePath($path."/".$index)->getPrivateKey();
    $array = array("key" => $hdwallet->toWif($network));
    return json_encode($array);
}

function generateBtcAddress($xpub, $index){
    $Bitcoin = new Bitcoin();
    $Bitcoin->setNetwork($this->isMainNet() ? NetworkFactory::bitcoin() : NetworkFactory::bitcoinTestnet());
    $network = $Bitcoin->getNetwork();
    $factory = new HierarchicalKeyFactory();
    $root = $factory->fromExtended($xpub)
    ->withoutPrivateKey()
    ->derivePath($index);
    $pubkey = $root->getPublicKey();
    $hdaddress = new PayToPubKeyHashAddress($pubkey->getPubKeyHash());
     $array = array("address" => $hdaddress->getAddress());
     return json_encode($array);
}

function generateEthAddress($xpub, $index){
    $this->ThrowTestNetException('ETH');
    $coin = $testnet && $testnet != "" ? "ETH-test" : "ETH";
    $col = 'address';
    $data = "--coin={$coin} --path=m -g --startindex={$index} --index={$index} --numderive=1 --key={$xpub} --cols={$col} --format=json";
    $return = $this->cli($data);
    if($return !== false && $return !== null && $return !== ""){
        $returnData = json_decode($return);
        $array = array("address" => $returnData->address);
        //$array = array("address" => $returnData[$index]->address);
        return json_encode($array);
    }
    else{
     $array = array("error" => true, "address" => null);
     return json_encode($array);
    }
}

function generateLtcAddress($xpub, $index){
    $Bitcoin = new Bitcoin();
    $Bitcoin->setNetwork($this->isMainNet() ? NetworkFactory::litecoin() : NetworkFactory::litecoinTestnet());
    $network = $Bitcoin->getNetwork();
    $factory = new HierarchicalKeyFactory();
    $root = $factory->fromExtended($xpub)
    ->withoutPrivateKey()
    ->derivePath($index);
    $pubkey = $root->getPublicKey();
    $hdaddress = new PayToPubKeyHashAddress($pubkey->getPubKeyHash());
     $array = array("address" => $hdaddress->getAddress());
     return json_encode($array);
}

function generateBchAddress($xpub, $index){
    $coin = $testnet && $testnet != "" ? "BCH-test" : "BCH";
    $col = 'address';
    $data = "--coin={$coin} --path=m -g --startindex={$index} --index={$index} --numderive=1 --key={$xpub} --cols={$col} --format=json";
    $return = $this->cli($data);
    if($return !== false && $return !== null && $return !== ""){
        $returnData = json_decode($return);
        $array = array("address" => $returnData->address);
        return json_encode($array);
    }
    else{
     $array = array("error" => true, "address" => null);
     return json_encode($array);
    }
}

function generatePrivateKeyFromMnemonic($coin, $mnemonic, $index){
    if($this->network !== 'testnet' && $this->network !== 'mainnet'){
        throw new \TypeError(sprintf('Unsupported Network Type %s!', $this->network));
    }
    $testnet = $this->network === 'testnet' ? true : false;
    if($this->in_arrayi($coin, $this->supportedBlockchain)){
        switch($coin){
            case 'btc':
            return $this->generateBtcPrivateKey($mnemonic, $index);
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
            return $this->generateEthPrivateKey($mnemonic, $index);
            break;
            case 'bch':
            return $this->generateBchPrivateKey($mnemonic, $index);
            break;
            case 'ltc':
            return $this->generateLtcPrivateKey($mnemonic, $index);
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

    function generateAddressFromXPubOperation($coin, $xpub, $index){
        if($this->network !== 'testnet' && $this->network !== 'mainnet'){
            throw new \TypeError(sprintf('Unsupported Network Type %s!', $this->network));
        }
        $testnet = $this->network === 'testnet' ? true : false;
        if($this->in_arrayi($coin, $this->supportedBlockchain)){
            switch($coin){
                case 'btc':
                return $this->generateBtcAddress($xpub, $index);
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
                return $this->generateEthAddress($xpub, $index);
                break;
                case 'bch':
                return $this->generateBchAddress($xpub, $index);
                break;
                case 'ltc':
                return $this->generateLtcAddress($xpub, $index);
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

        function generateAddressFromPrivatekeyOperation($coin, $privateKey){
            if($this->network !== 'testnet' && $this->network !== 'mainnet'){
                throw new \TypeError(sprintf('Unsupported Network Type %s!', $this->network));
            }
            $testnet = $this->network === 'testnet' ? true : false;
            if($this->in_arrayi($coin, $this->supportedBlockchain)){
                switch($coin){
                    case 'btc':
                    return $this->generateBtcWallet($testnet, $privateKey);
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
                    return $this->generateEthWallet($testnet, $mnemonic);
                    break;
                    case 'bch':
                    return $this->generateBchWallet($coin, $mnemonic);
                    break;
                    case 'ltc':
                    return $this->generateLtcWallet($coin, $mnemonic);
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