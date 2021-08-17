<?php

namespace Tatum\Wallet;

use BitWasp\Bitcoin\Address\PayToPubKeyHashAddress;
use BitWasp\Bitcoin\Bitcoin;
use BitWasp\Bitcoin\Key\Factory\HierarchicalKeyFactory;
use BitWasp\Bitcoin\Mnemonic\MnemonicFactory;
use BitWasp\Bitcoin\Network\NetworkFactory;
use Tatum\Utils\Currency;

class Address
{
    /**
     * @param string $xpub
     * @param int    $index
     * @return string
     * @throws \BitWasp\Bitcoin\Exceptions\Base58ChecksumFailure
     * @throws \BitWasp\Buffertools\Exceptions\ParserOutOfRange
     */
    private static function generateBtcAddress(string $xpub, int $index): string
    {
        return $xpub . $index;
    }



    /**
     * @param string $currency
     * @param bool   $testnet
     * @return string
     * @throws \BitWasp\Bitcoin\Exceptions\RandomBytesFailure
     */
    public static function generateAddress(
        string $currency,
        bool $testnet = true
    ): string {
        switch ($currency) {
            case Currency::BTC:
                return self::generateBtcAddress('a', 1);
            default:
                throw new \UnexpectedValueException(
                    sprintf('Unsupported Blockchain %s!', strtoupper($currency))
                );
        }
    }
}
