<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

use BitWasp\Bitcoin\Key\Factory\HierarchicalKeyFactory;
use BitWasp\Bitcoin\Key\Factory\PrivateKeyFactory;
use BitWasp\Bitcoin\Mnemonic\Bip39\Bip39SeedGenerator;
use BitWasp\Bitcoin\Address\PayToPubKeyHashAddress;
use BitWasp\Bitcoin\Bitcoin;
use BitWasp\Bitcoin\Network\NetworkFactory;
use BitWasp\Bitcoin\Script\ScriptType;
use Btccom\BitcoinCash\Network\Networks\BitcoinCash;
use Btccom\BitcoinCash\Network\Networks\BitcoinCashTestnet;
use Btccom\BitcoinCash\Address\CashAddress;

trait AddressOperation{

/**
 * Generate Bitcoin private key from mnemonic seed
 * @param $mnemonic mnemonic to generate private key from
 * @param $index derivation index of private key to generate.
 * @returns blockchain private key to the address
 */
    
function generateBtcPrivateKey(string $mnemonic, int $index){
    $this->checkIndex($index);
    $this->checkMnemonic($mnemonic);
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

/**
 * Generate Ethereum or any other ERC20 private key from mnemonic seed
 * @param $mnemonic mnemonic to generate private key from
 * @param $index derivation index of private key to generate.
 * @returns blockchain private key to the address
 */

function generateEthPrivateKey(string $mnemonic, int $index){
    $this->checkIndex($index);
    $this->checkMnemonic($mnemonic);
    $path = $this->getPath("ETH");
    $seedGenerator = new Bip39SeedGenerator();
    $seed = $seedGenerator->getSeed($mnemonic);
    $factory = new HierarchicalKeyFactory();
    $root = $factory->fromEntropy($seed);
    $hdwallet = $root->derivePath($path."/".$index)->getPrivateKey();
    $array = array("key" => '0x' .$hdwallet->getHex());
    return json_encode($array);
}

/**
 * Generate Litecoin private key from mnemonic seed
 * @param $mnemonic mnemonic to generate private key from
 * @param $index derivation index of private key to generate.
 * @returns blockchain private key to the address
 */

function generateLtcPrivateKey(string $mnemonic, int $index){
    $this->checkIndex($index);
    $this->checkMnemonic($mnemonic);
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

/**
 * Generate Bitcoin Cash private key from mnemonic seed
 * @param $mnemonic mnemonic to generate private key from
 * @param $index derivation index of private key to generate.
 * @returns blockchain private key to the address
 */

function generateBchPrivateKey(string $mnemonic, int $index){
    $this->checkIndex($index);
    $this->checkMnemonic($mnemonic);
    if($this->isMainNet()){
    $Bitcoin = new Bitcoin();
    $Bitcoin->setNetwork($this->isMainNet() ? new BitcoinCash() : new BitcoinCashTestnet());
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
    else{
    $data = json_encode(array('index' => (int) $index, 'mnemonic' => $mnemonic));
    return $this->post($data, "/{$this->getRoute("BCH")}/wallet/priv");
    }
}

/**
 * Convert Bitcoin Private Key to Address
 * @param $privateKey private key to use
 * @returns blockchain address
 */

function convertBtcPrivateKey(string $privateKey){
    $privateKey = (new PrivateKeyFactory())->fromWif($privateKey);
    $publicKey = $privateKey->getPublicKey();
    $hdaddress = new PayToPubKeyHashAddress($publicKey->getPubKeyHash());
     $array = array("address" => $hdaddress->getAddress());
     return json_encode($array);
}

/**
 * Convert Ethereum or any other ERC20 Private Key to Address
 * @param $privateKey private key to use
 * @returns blockchain address
 */

function convertEthPrivateKey(string $privateKey){
    $privateKey = (new PrivateKeyFactory())->fromHexUncompressed(substr($privateKey, 2));
    $publicKey = $privateKey->getPublicKey();
    $hdaddress = $this->getEthereumAddress($publicKey);
     $array = array("address" => $hdaddress);
     return json_encode($array);
}

/**
 * Convert Litecoin Private Key to Address
 * @param $privateKey private key to use
 * @returns blockchain address
 */

function convertLtcPrivateKey(string $privateKey){
    $privateKey = (new PrivateKeyFactory())->fromWif($privateKey);
    $publicKey = $privateKey->getPublicKey();
    $hdaddress = new PayToPubKeyHashAddress($publicKey->getPubKeyHash());
     $array = array("address" => $hdaddress->getAddress());
     return json_encode($array);
}

/**
 * Convert Bitcoin Cash Private Key to Address
 * @param $privateKey private key to use
 * @returns blockchain address
 */

function convertBchPrivateKey(string $privateKey){
    $Bitcoin = new Bitcoin();
    $Bitcoin->setNetwork($this->isMainNet() ? new BitcoinCash() : new BitcoinCashTestnet());
    $network = $Bitcoin->getNetwork();
    $privateKey = (new PrivateKeyFactory())->fromWif($privateKey);
    $publicKey = $privateKey->getPublicKey();
    $legacy_address = new PayToPubKeyHashAddress($publicKey->getPubKeyHash());
    $hdaddress = new CashAddress(ScriptType::P2PKH, $publicKey->getPubKeyHash());
     $array = array("address" => $hdaddress->getAddress($network));
     return json_encode($array);
}

/**
 * Generate Bitcoin address
 * @param $xpub extended public key to generate address from
 * @param $index derivation index of address to generate. Up to 2^31 addresses can be generated.
 * @returns blockchain address
 */

function generateBtcAddress(string $xpub, int $index){
    $this->checkIndex($index);
    $this->checkXpub($xpub);
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

/**
 * Generate Ethereum or any other ERC20 address
 * @param $xpub extended public key to generate address from
 * @param $index derivation index of address to generate. Up to 2^31 addresses can be generated.
 * @returns blockchain address
 */

function generateEthAddress(string $xpub, int $index){
    $this->checkIndex($index);
    $this->checkXpub($xpub);
    $factory = new HierarchicalKeyFactory();
    $root = $factory->fromExtended($xpub)
    ->withoutPrivateKey()
    ->derivePath($index);
    $pubkey = $root->getPublicKey();
    $hdaddress = $this->getEthereumAddress($pubkey);
     $array = array("address" => $hdaddress);
     return json_encode($array);
}

/**
 * Generate Litecoin address
 * @param $xpub extended public key to generate address from
 * @param $index derivation index of address to generate. Up to 2^31 addresses can be generated.
 * @returns blockchain address
 */

function generateLtcAddress(string $xpub, int $index){
    $this->checkIndex($index);
    $this->checkXpub($xpub);
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

/**
 * Generate Bitcoin Cash address
 * @param $xpub extended public key to generate address from
 * @param $index derivation index of address to generate. Up to 2^31 addresses can be generated.
 * @returns blockchain address
 */

function generateBchAddress(string $xpub, int $index){
    $this->checkIndex($index);
    $this->checkXpub($xpub);
    $Bitcoin = new Bitcoin();
    $Bitcoin->setNetwork($this->isMainNet() ? new BitcoinCash() : new BitcoinCashTestnet());
    $network = $Bitcoin->getNetwork();
    $factory = new HierarchicalKeyFactory();
    $root = $factory->fromExtended($xpub)
    ->withoutPrivateKey()
    ->derivePath($index);
    $pubkey = $root->getPublicKey($network);
    $legacy_address = new PayToPubKeyHashAddress($pubkey->getPubKeyHash());
    $hdaddress = new CashAddress(ScriptType::P2PKH, $pubkey->getPubKeyHash());
     $array = array("address" => $hdaddress->getAddress($network));
     return json_encode($array);
}

/**
 * Generate private key from mnemonic seed
 * @param $coin type of blockchain
 * @param $mnemonic mnemonic to generate private key from
 * @param $index derivation index of private key to generate.
 * @returns blockchain private key to the address
 */

function generatePrivateKeyFromMnemonic(string $coin, string $mnemonic, int $index){
    if($this->network !== 'testnet' && $this->network !== 'mainnet'){
        throw new \TypeError(sprintf('Unsupported Network Type %s!', $this->network));
    }
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

/**
 * Generate address
 * @param $coin type of blockchain
 * @param $xpub extended public key to generate address from
 * @param $index derivation index of address to generate. Up to 2^31 addresses can be generated.
 * @returns blockchain address
 */

    function generateAddressFromXPubOperation(string $coin, string $xpub, int $index){
    if($this->network !== 'testnet' && $this->network !== 'mainnet'){
    throw new \TypeError(sprintf('Unsupported Network Type %s!', $this->network));
    }
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

/**
 * Generate address from private key
 * @param $coin type of blockchain
 * @param $privateKey private key to use
 * @returns blockchain address to the private key
 */

function generateAddressFromPrivatekeyOperation(string $coin, string $privateKey){
if($this->network !== 'testnet' && $this->network !== 'mainnet'){
  throw new \TypeError(sprintf('Unsupported Network Type %s!', $this->network));
}
 if($this->in_arrayi($coin, $this->supportedBlockchain)){
                switch($coin){
                    case 'btc':
                    return $this->convertBtcPrivateKey($privateKey);
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
                    return $this->convertEthPrivateKey($privateKey);
                    break;
                    case 'bch':
                    return $this->convertBchPrivateKey($privateKey);
                    break;
                    case 'ltc':
                    return $this->convertLtcPrivateKey($privateKey);
                    break;
                    case 'xrp':
                        throw new \UnexpectedValueException(sprintf('Unsupported PrivateKey to Address on %s Blockchain!', strtoupper($coin)));
                    break;
                    case 'xlm':
                        throw new \UnexpectedValueException(sprintf('Unsupported PrivateKey to Address on %s Blockchain!', strtoupper($coin)));
                    break;
                    case 'bnb':
                        throw new \UnexpectedValueException(sprintf('Unsupported PrivateKey to Address on %s Blockchain!', strtoupper($coin)));
                    break;
                    case 'vet':
                        throw new \UnexpectedValueException(sprintf('Unsupported PrivateKey to Address on %s Blockchain!', strtoupper($coin)));
                    break;
                    case 'neo':
                        throw new \UnexpectedValueException(sprintf('Unsupported PrivateKey to Address on %s Blockchain!', strtoupper($coin)));
                    break;
                    case 'libra':
                        throw new \UnexpectedValueException(sprintf('Unsupported PrivateKey to Address on %s Blockchain!', strtoupper($coin)));
                    break;
                    case 'scrypta':
                        throw new \UnexpectedValueException(sprintf('Unsupported PrivateKey to Address on %s Blockchain!', strtoupper($coin)));
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