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
     * @param string|null $currency
     * @param bool $isTestnet
     */
    public function __construct(string $currency = null, bool $isTestnet = false)
    {
        $this->isTestnet = $isTestnet;
        $this->currency = $currency;
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
     * @param string $currency
     * @param string $mnemonic
     * @param NetworkInterface|null $network
     * @return string
     * @throws \Exception
     */
    private function generateXpub(string $currency, string $mnemonic, NetworkInterface $network = null): string
    {
        $factory = new HierarchicalKeyFactory();
        $seedGenerator = new Bip39SeedGenerator();
        $seed = $seedGenerator->getSeed($mnemonic);
        $root = $factory->fromEntropy($seed);
        $hdWallet = $root->derivePath(Constant::DERIVATION_PATH[$currency]);
        return $hdWallet->toExtendedPublicKey($network);
    }

    /**
     * @param string $mnemonic
     * @param bool $isTestnet
     * @return array<string>
     * @throws \Exception
     */
    private function generateBtcWallet(string $mnemonic, bool $isTestnet = false): array
    {
        $Bitcoin = new Bitcoin();
        $Bitcoin->setNetwork($isTestnet ? NetworkFactory::bitcoinTestnet() : NetworkFactory::bitcoin());
        $network = $Bitcoin->getNetwork();
        $xpub = $this->generateXpub(Currency::BTC, $mnemonic, $network);
        return ["mnemonic" => $mnemonic, "xpub" => $xpub];
    }

    /**
     * @param string $mnemonic
     * @return array<string>
     */
    private function generateEthWallet(string $mnemonic): array
    {
        $xpub = $this->generateXpub(Currency::ETH, $mnemonic);
        return ["mnemonic" => $mnemonic, "xpub" => $xpub];
    }

    /**
     * @param string $mnemonic
     * @param bool $isTestnet
     * @return array<string>
     * @throws \Exception
     */
    private function generateLtcWallet(string $mnemonic, bool $isTestnet = false): array
    {
        $Bitcoin = new Bitcoin();
        $Bitcoin->setNetwork($isTestnet ? NetworkFactory::litecoinTestnet() : NetworkFactory::litecoin());
        $network = $Bitcoin->getNetwork();
        $xpub = $this->generateXpub(Currency::LTC, $mnemonic, $network);
        return ["mnemonic" => $mnemonic, "xpub" => $xpub];
    }

    /**
     * @param string $mnemonic
     * @param bool $isTestnet
     * @return array<string>
     * @throws \Exception
     */
    private function generateDogeWallet(string $mnemonic, bool $isTestnet = false): array
    {
        $Bitcoin = new Bitcoin();
        $Bitcoin->setNetwork($isTestnet ? NetworkFactory::dogecoinTestnet() : NetworkFactory::dogecoin());
        $network = $Bitcoin->getNetwork();
        $xpub = $this->generateXpub(Currency::DOGE, $mnemonic, $network);
        return ["mnemonic" => $mnemonic, "xpub" => $xpub];
    }

    /**
     * @param string|null $currency
     * @param bool|null $isTestnet
     * @param string|null $mnemonic
     * @return array<string>
     * @throws \Exception
     */
    public function generateWallet(
        string $currency = null,
        bool $isTestnet = null,
        string $mnemonic = null
    ): array {
        $mnemonic = $mnemonic ? $mnemonic : $this->generateMnemonic();
        $isTestnet = $isTestnet ? $isTestnet : $this->isTestnet;
        $currency = $currency ? $currency : $this->currency;
        Validation::isNotEmpty($currency, 'Param $currency must be set.');

        switch ($currency) {
            case Currency::BTC:
                return $this->generateBtcWallet($mnemonic, $isTestnet);
            case Currency::LTC:
                return $this->generateLtcWallet($mnemonic, $isTestnet);
            case Currency::DOGE:
                return $this->generateDogeWallet($mnemonic, $isTestnet);
            case Currency::ETH:
                return $this->generateEthWallet($mnemonic);
            default:
                throw new UnexpectedValueException('Unsupported Blockchain' . $currency . '.');
        }
    }
}
