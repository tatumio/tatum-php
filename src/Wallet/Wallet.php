<?php

namespace Tatum\Wallet;

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
use Tatum\Utils\Validation;
use UnexpectedValueException;

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
    public function generateBtcBasedPrivateKey(string $mnemonic, int $index)
    {
        $network = $this->generateBitcoinWithNetwork();
        $hierarchicalKey = $this->generateHierarchicalKey($mnemonic);
        $privateKey = $hierarchicalKey
            ->derivePath(Constant::DERIVATION_PATH[$this->currency] . "/" . $index)
            ->getPrivateKey();
        return ["key" => $privateKey->toWif($network)];
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
        Validation::isNotEmpty($this->currency, 'Param $currency must be set.');

        switch ($this->currency) {
            case Currency::BTC:
            case Currency::LTC:
            case Currency::DOGE:
                return $this->generateBtcBasedWallet($mnemonic);
            case Currency::ETH:
                return $this->generateEthWallet($mnemonic);
            default:
                throw new UnexpectedValueException('Unsupported Blockchain' . $this->currency . '.');
        }
    }

    /**
     * @param string|null $mnemonic
     * @param int $index
     * @return array<string>
     * @throws \Exception
     */
    public function generatePrivateKey(string $mnemonic, int $index): array
    {
        Validation::isNotEmpty($this->currency, 'Param $currency must be set.');

        switch ($this->currency) {
            case Currency::BTC:
            case Currency::LTC:
            case Currency::DOGE:
                return $this->generateBtcBasedPrivateKey($mnemonic, $index);
            case Currency::ETH:
                return ['asd' => 'dsa'];
            default:
                throw new UnexpectedValueException('Unsupported Blockchain' . $this->currency . '.');
        }
    }
}
