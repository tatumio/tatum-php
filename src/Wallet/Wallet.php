<?php

namespace Tatum\Wallet;

use BitWasp\Bitcoin\Address\PayToPubKeyHashAddress;
use BitWasp\Bitcoin\Crypto\Random\Random;
use BitWasp\Bitcoin\Key\Factory\HierarchicalKeyFactory;
use BitWasp\Bitcoin\Mnemonic\Bip39\Bip39Mnemonic;
use BitWasp\Bitcoin\Mnemonic\Bip39\Bip39SeedGenerator;
use BitWasp\Bitcoin\Mnemonic\MnemonicFactory;
use BitWasp\Bitcoin\Network\NetworkFactory;
use BitWasp\Bitcoin\Network\NetworkInterface;
use BitWasp\Bitcoin\Bitcoin;
use Tatum\Utils\Currency;
use Tatum\Utils\Constant;
use UnexpectedValueException;
use kornrunner\Keccak;
use BitWasp\Bitcoin\Crypto\EcAdapter\Key\PublicKeyInterface;
use BitWasp\Bitcoin\Crypto\EcAdapter\Impl\PhpEcc\Serializer\Key\PublicKeySerializer;
use BitWasp\Bitcoin\Crypto\EcAdapter\EcAdapterFactory;
use Mdanter\Ecc\Serializer\Point\UncompressedPointSerializer;
use Mdanter\Ecc\EccFactory;

class Wallet
{

    /**
     * @var bool
     */
    private $isTestnet;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * Wallet constructor.
     * @param string $currency
     * @param bool $isTestnet
     */
    public function __construct(string $currency, bool $isTestnet = false)
    {
        $this->isTestnet = $isTestnet;
        $this->currency = $currency;
    }

    /**
     * @return NetworkInterface
     * @throws \Exception
     */
    private function generateBitcoinWithNetwork()
    {
        $Bitcoin = new Bitcoin();
        $Bitcoin->setNetwork($this->getBtcBasedNetwork());
        return $Bitcoin->getNetwork();
    }

    /**
     * @return string
     */
    private function generateMnemonic(): string
    {
        $random = new Random();
        $entropy = $random->bytes(Bip39Mnemonic::MAX_ENTROPY_BYTE_LEN);
        $bip39 = MnemonicFactory::bip39();
        return $bip39->entropyToMnemonic($entropy);
    }

    /**
     * @param $mnemonic
     */
    private function generateEntropyFromMnemonic($mnemonic): \BitWasp\Buffertools\BufferInterface
    {
        $bip39 = MnemonicFactory::bip39();
        return $bip39->mnemonicToEntropy($mnemonic);
    }

    /**
     * @param string $mnemonic
     * @return \BitWasp\Bitcoin\Key\Deterministic\HierarchicalKey
     * @throws \Exception
     */
    private function generateHierarchicalKey(string $mnemonic)
    {
        $factory = new HierarchicalKeyFactory();
        $seedGenerator = new Bip39SeedGenerator();
        $seed = $seedGenerator->getSeed($mnemonic);
        return $factory->fromEntropy($seed);
    }

    /**
     * @param string $mnemonic
     * @param NetworkInterface|null $network
     * @return string
     * @throws \Exception
     */
    private function generateXpub(string $mnemonic, NetworkInterface $network = null): string
    {
        $hierarchicalKey = $this->generateHierarchicalKey($mnemonic);
        $hdWallet = $hierarchicalKey->derivePath(Constant::DERIVATION_PATH[$this->currency]);
        return $hdWallet->toExtendedPublicKey($network);
    }

    /**
     * @param string $mnemonic
     * @return array<string>
     * @throws \Exception
     */
    private function generateBtcBasedWallet(string $mnemonic): array
    {
        $network = $this->generateBitcoinWithNetwork();
        $xpub = $this->generateXpub($mnemonic, $network);
        return ["mnemonic" => $mnemonic, "xpub" => $xpub];
    }

    /**
     * @param string $mnemonic
     * @return array<string>
     */
    private function generateEthWallet(string $mnemonic): array
    {
        $xpub = $this->generateXpub($mnemonic);
        return ["mnemonic" => $mnemonic, "xpub" => $xpub];
    }

    /**
     * @return NetworkInterface|\BitWasp\Bitcoin\Network\Networks\Dogecoin|\BitWasp\Bitcoin\Network\Networks\DogecoinTestnet|\BitWasp\Bitcoin\Network\Networks\LitecoinTestnet
     * @throws \Exception
     */
    private function getBtcBasedNetwork()
    {
        switch ($this->currency) {
            case Currency::BTC:
                return $this->isTestnet ? NetworkFactory::bitcoinTestnet() : NetworkFactory::bitcoin();
            case Currency::LTC:
                return $this->isTestnet ? NetworkFactory::litecoinTestnet() : NetworkFactory::litecoin();
            case Currency::DOGE:
                return $this->isTestnet ? NetworkFactory::dogecoinTestnet() : NetworkFactory::dogecoin();
            default:
                throw new UnexpectedValueException('Unsupported Blockchain' . $this->currency . '.');
        }
    }

    /**
     * @param string $mnemonic
     * @param int $index
     * @return array<string>
     * @throws \Exception
     */
    private function generateBtcBasedPrivateKey(string $mnemonic, int $index)
    {
        $network = $this->generateBitcoinWithNetwork();
        $hierarchicalKey = $this->generateHierarchicalKey($mnemonic);
        $privateKey = $hierarchicalKey
            ->derivePath(Constant::DERIVATION_PATH[$this->currency] . "/" . $index)
            ->getPrivateKey();
        return ["key" => $privateKey->toWif($network)];
    }

    /**
     * @param string $mnemonic
     * @param int $index
     * @return array<string>
     * @throws \Exception
     */
    private function generateEthPrivateKey(string $mnemonic, int $index)
    {
        $root = $this->generateHierarchicalKey($mnemonic);
        $privateKey = $root->derivePath(Constant::DERIVATION_PATH[$this->currency] . "/" . $index)->getPrivateKey();
        return ["key" => '0x' . $privateKey->getHex()];
    }

    /**
     * @param string $xpub
     * @param int $index
     * @return array<string>
     * @throws \BitWasp\Bitcoin\Exceptions\Base58ChecksumFailure
     * @throws \BitWasp\Buffertools\Exceptions\ParserOutOfRange
     */
    private function generateBtcBasedAddress(string $xpub, int $index)
    {
        $factory = new HierarchicalKeyFactory();
        $publicKeyHash = $factory->fromExtended($xpub)
            ->withoutPrivateKey()
            ->derivePath(strval($index))
            ->getPublicKey()
            ->getPubKeyHash();
        $publicKey = new PayToPubKeyHashAddress($publicKeyHash);
        return ["address" => $publicKey->getAddress()];
    }

    /**
     * @param string $xpub
     * @param int $index
     * @return array<string>
     * @throws \BitWasp\Bitcoin\Exceptions\Base58ChecksumFailure
     * @throws \BitWasp\Buffertools\Exceptions\ParserOutOfRange
     */
    private function generateEthAddress(string $xpub, int $index)
    {
        $factory = new HierarchicalKeyFactory();
        $root = $factory->fromExtended($xpub)
            ->withoutPrivateKey()
            ->derivePath(strval($index));
        $pubkey = $root->getPublicKey();
        $address = $this->generateEthAddressFromPubKey($pubkey);
        return ["address" => $address];
    }

    /**
     * @param PublicKeyInterface $publicKey
     * @return string
     * @throws \Exception
     */
    private function generateEthAddressFromPubKey(PublicKeyInterface $publicKey): string
    {
        static $pubkey_serializer = null;
        static $point_serializer = null;
        if (!$pubkey_serializer) {
            $adapter = EcAdapterFactory::getPhpEcc(Bitcoin::getMath(), Bitcoin::getGenerator());
            $pubkey_serializer = new PublicKeySerializer($adapter);
            $point_serializer = new UncompressedPointSerializer();
        }

        $pubKey = $pubkey_serializer->parse($publicKey->getBuffer());
        $point = $pubKey->getPoint();
        $upk = $point_serializer->serialize($point);
        $upk = hex2bin(substr($upk, 2));

        $keccak = Keccak::hash($upk, 256);
        $eth_address_lower = strtolower(substr($keccak, -40));

        $hash = Keccak::hash($eth_address_lower, 256);
        $eth_address = '';
        for ($i = 0; $i < 40; $i++) {
            // the nth letter should be uppercase if the nth digit of casemap is 1
            $char = substr($eth_address_lower, $i, 1);

            if (ctype_digit($char)) {
                $eth_address .= $char;
            } elseif ('0' <= $hash[$i] && $hash[$i] <= '7') {
                $eth_address .= strtolower($char);
            } else {
                $eth_address .= strtoupper($char);
            }
        }

        return '0x' . $eth_address;
    }

    /**
     * @param string|null $mnemonic
     * @return array<string>
     * @throws \Exception
     */
    public function generateWallet(
        string $mnemonic = null
    ): array {
        $mnemonic = $mnemonic ? $mnemonic : $this->generateMnemonic();

        switch ($this->currency) {
            case Currency::BTC:
            case Currency::LTC:
            case Currency::DOGE:
                return $this->generateBtcBasedWallet($mnemonic);
            case Currency::ETH:
            case Currency::ADA:
                return $this->generateEthWallet($mnemonic);
            default:
                throw new UnexpectedValueException('Unsupported Blockchain' . $this->currency . '.');
        }
    }

    /**
     * @param string $mnemonic
     * @param int $index
     * @return array<string>
     * @throws \Exception
     */
    public function generatePrivateKey(string $mnemonic, int $index): array
    {
        switch ($this->currency) {
            case Currency::BTC:
            case Currency::LTC:
            case Currency::DOGE:
                return $this->generateBtcBasedPrivateKey($mnemonic, $index);
            case Currency::ETH:
                return $this->generateEthPrivateKey($mnemonic, $index);
            default:
                throw new UnexpectedValueException('Unsupported Blockchain' . $this->currency . '.');
        }
    }

    /**
     * @param string $xpub
     * @param int $index
     * @return array<string>
     * @throws \BitWasp\Bitcoin\Exceptions\Base58ChecksumFailure
     * @throws \BitWasp\Buffertools\Exceptions\ParserOutOfRange
     */
    public function generateAddress(string $xpub, int $index): array
    {
        switch ($this->currency) {
            case Currency::BTC:
            case Currency::LTC:
            case Currency::DOGE:
                return $this->generateBtcBasedAddress($xpub, $index);
            case Currency::ETH:
                return $this->generateEthAddress($xpub, $index);
            default:
                throw new UnexpectedValueException('Unsupported Blockchain' . $this->currency . '.');
        }
    }
}
