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
     * @param int $index
     * @return string
     * @throws \BitWasp\Bitcoin\Exceptions\Base58ChecksumFailure
     * @throws \BitWasp\Buffertools\Exceptions\ParserOutOfRange
     */
    private function generateBtcAddress(string $xpub, int $index): string
    {
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
     * @param string $currency
     * @param bool $testnet
     * @return string
     * @throws \BitWasp\Bitcoin\Exceptions\RandomBytesFailure
     */
    public static function generateAddress(
        string $currency,
        bool $testnet = true
    ): string {
        switch ($currency) {
            case Currency::BTC:
                return self::generateBtcAddress();
            default:
                throw new \UnexpectedValueException(
                    sprintf('Unsupported Blockchain %s!', strtoupper($currency))
                );
        }
    }
}
