<?php

namespace Tatum\Test;

use Tatum\Utils\Currency;
use Tatum\Wallet\Wallet;

class WalletTest extends TestCase
{
    public function testGenerateWallets()
    {
        $currencies = Currency::keys();
        foreach ($currencies as $currency) {
            $wallet = new Wallet($currency);
            $generatedWallet = $wallet->generateWallet();
            self::assertWallet($generatedWallet);
        }
    }

    public function testGeneratePrivateKeys()
    {
        $currencies = Currency::keys();
        foreach ($currencies as $currency) {
            $wallet = new Wallet($currency);
            $generatedWallet = $wallet->generateWallet();
            $privateKey = $wallet->generatePrivateKey($generatedWallet['mnemonic'], 1);
            self::assertPrivateKey($privateKey);
        }
    }

    public function testGenerateAddresses()
    {
        $currencies = Currency::keys();
        foreach ($currencies as $currency) {
            $wallet = new Wallet($currency);
            $generatedWallet = $wallet->generateWallet();
            $address = $wallet->generateAddress($generatedWallet['xpub'], 1);
            self::assertAddress($address);
        }
    }

    /**
     * @param array<string> $walet
     */
    private static function assertWallet($walet)
    {
        self::assertNotNull($walet);
        self::assertIsArray($walet);
        self::assertArrayHasKey('xpub', $walet);
        self::assertArrayHasKey('mnemonic', $walet);
        self::assertIsString($walet['xpub']);
        self::assertIsString($walet['mnemonic']);
    }

    /**
     * @param array<string> $privateKey
     */
    private static function assertPrivateKey($privateKey)
    {
        self::assertNotNull($privateKey);
        self::assertIsArray($privateKey);
        self::assertArrayHasKey('key', $privateKey);
        self::assertIsString($privateKey['key']);
    }

    /**
     * @param array<string> $address
     */
    private static function assertAddress($address)
    {
        self::assertNotNull($address);
        self::assertIsArray($address);
        self::assertArrayHasKey('address', $address);
        self::assertIsString($address['address']);
    }
}
