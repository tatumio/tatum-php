<?php

namespace Tatum\Wallet;

use BitWasp\Bitcoin\Crypto\Random\Random;
use BitWasp\Bitcoin\Key\Factory\HierarchicalKeyFactory;
use BitWasp\Bitcoin\Mnemonic\Bip39\Bip39Mnemonic;
use BitWasp\Bitcoin\Mnemonic\Bip39\Bip39SeedGenerator;
use BitWasp\Bitcoin\Mnemonic\MnemonicFactory;
use BitWasp\Bitcoin\Network\NetworkFactory;
use BitWasp\Bitcoin\Bitcoin;
use Tatum\Utils\Currency;

class Wallet
{

    private $isMainnet;

    public function __construct(bool $isMainnet = true)
    {
        $this->isMainnet = $isMainnet;
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
     */
    private function generateXpub(string $currency, string $mnemonic, $network)
    {
        $factory = new HierarchicalKeyFactory();
        $seedGenerator = new Bip39SeedGenerator();
        $seed = $seedGenerator->getSeed($mnemonic);
        $root = $factory->fromEntropy($seed);
        $hdWallet = $root->derivePath(DERIVATION_PATH[$currency]);
        return $hdWallet->toExtendedPublicKey($network);
    }

    /**
     * @param string $mnemonic
     * @return array
     */
    private function generateBtcWallet(string $mnemonic, bool $isTestnet): array
    {
        $Bitcoin = new Bitcoin();
        $Bitcoin->setNetwork($isTestnet ? NetworkFactory::bitcoinTestnet(): NetworkFactory::bitcoin());
        $network = $Bitcoin->getNetwork();
        $xpub = $this->generateXpub(Currency::BTC, $mnemonic, $network);
        return ["mnemonic" => $mnemonic, "xpub" => $xpub];
    }

    /**
     * @param string|null $currency
     * @param bool $testnet
     * @param string|null $mnemonic
     * @return array
     */
    public function generateWallet(
        bool $testnet = null,
        string $currency = null,
        string $mnemonic = null
    ): array {
        $mnemonic = $mnemonic ? $mnemonic : $this->generateMnemonic();
        switch ($currency) {
            case Currency::BTC:
                return self::generateBtcWallet($testnet);
            default:
                throw new \UnexpectedValueException(
                    sprintf('Unsupported Blockchain %s!', strtoupper($currency))
                );
        }
    }
}
