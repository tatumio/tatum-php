<?php

namespace Tatum\Test;

use Tatum\Utils\Currency;
use Tatum\Wallet\Wallet;

class WalletTest extends TestCase
{
    public function testBtcWallet()
    {
        $wallet = new Wallet(Currency::BTC);
        $generatedWallet = $wallet->generateWallet();
        self::assertWallet($generatedWallet);
    }

    public function testLtcWallet()
    {
        $wallet = new Wallet(Currency::LTC);
        $generatedWallet = $wallet->generateWallet();
        self::assertWallet($generatedWallet);
    }

    public function testDogeWallet()
    {
        $wallet = new Wallet(Currency::DOGE);
        $generatedWallet = $wallet->generateWallet();
        self::assertWallet($generatedWallet);
    }

    public function testEthWallet()
    {
        $wallet = new Wallet(Currency::ETH);
        $generatedWallet = $wallet->generateWallet();
        self::assertWallet($generatedWallet);
    }

//    public function testPrivateKey

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
