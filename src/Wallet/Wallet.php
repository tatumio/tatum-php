<?php

namespace Tatum\Wallet;

use BitWasp\Bitcoin\Mnemonic\MnemonicFactory;
use Tatum\Utils\Currency;

class Wallet
{

    /**
     * @return string
     * @throws \BitWasp\Bitcoin\Exceptions\RandomBytesFailure
     */
    private static function generateBtcWallet(): string
    {
        return MnemonicFactory::bip39()->create();
    }

    /**
     * @param string $currency
     * @param bool   $testnet
     * @return string
     * @throws \BitWasp\Bitcoin\Exceptions\RandomBytesFailure
     */
    public static function generateWallet(
        string $currency,
        bool $testnet = true
    ): string {
        switch ($currency) {
            case Currency::BTC:
                return self::generateBtcWallet();
            default:
                throw new \UnexpectedValueException(
                    sprintf('Unsupported Blockchain %s!', strtoupper($currency))
                );
        }
    }
}
