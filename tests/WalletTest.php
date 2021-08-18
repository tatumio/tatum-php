<?php

namespace Tatum\Test;

use Tatum\Utils\Currency;
use Tatum\Wallet\Wallet;

class WalletTest extends TestCase
{
    public function testBtcWallet()
    {
        $wallet = new Wallet();
        $generatedWallet = $wallet->generateWallet(Currency::BTC);
        self::assertWallet($generatedWallet);
    }

    public function testLtcWallet()
    {
        $wallet = new Wallet();
        $generatedWallet = $wallet->generateWallet(Currency::LTC);
        self::assertWallet($generatedWallet);
    }

    public function testDogeWallet()
    {
        $wallet = new Wallet();
        $generatedWallet = $wallet->generateWallet(Currency::DOGE);
        self::assertWallet($generatedWallet);
    }

    public function testEthWallet()
    {
        $wallet = new Wallet();
        $generatedWallet = $wallet->generateWallet(Currency::ETH);
        self::assertWallet($generatedWallet);
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
}
