<?php
/**
 * Bitcoin HD Wallet Test
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Test\Local\Api;
!class_exists("\Tatum\Sdk") && exit();

use Tatum\Sdk;
use Tatum\Model;
use PHPUnit\Framework\TestCase;

/**
 * Bitcoin Test
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class BitcoinTest extends TestCase {
    /**
     * Mnemonic
     */
    const MNEMONIC = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

    /**
     * TestNet
     */
    const TESTNET_XPUB = "tpubDExxmbZbZ8hvcykrL66zGKsWy8p8CUmV4vUErffboQoahPr4goABNmaZnnRgmh8ePRcJ3eHuivEG87HBdsquU3FQJstbxJjKwhtjGiWrpB2";
    const TESTNET_ADDRESS = "tb1q97n8qc4n3qcd8thlfs0c0299thzqyrq6mwz5jn";
    const TESTNET_PRIVATE_KEY = "cTPGqe6hkwVY6JNHJUZ4wSUvPo8GNMe2cDFTsFV1jSqCBMDKpfSU";

    /**
     * MainNet
     */
    const MAINNET_XPUB = "xpub6EpS4SGGLmDmVJLLbuAudraunFMMJo1gGxmeVkbvp1VBCjCiqmxvrtfaLHQZ33k8Ag5mrwGppgHe38HMaDyTFhCfZ2C7EH2Vc8PMZsEkuh3";
    const MAINNET_ADDRESS = "bc1q7v70d7pt6zfxdz6hh7w07qyfk4hwev2v4chmj5";
    const MAINNET_PRIVATE_KEY = "KydkscRTQHmZu968gTVWgN9bNk3UeDvzzE7U7DxzeBCSmZb7uxJk";

    /**
     * Tatum SDK
     *
     * @var \Tatum\Sdk
     */
    protected $sdk;

    /**
     * Testnet:Api:Bitcoin
     *
     * @var \Tatum\Api\BitcoinApi
     */
    protected $tApi;

    /**
     * Mainnet:Api:Bitcoin
     *
     * @var \Tatum\Api\BitcoinApi
     */
    protected $mApi;

    /**
     * Set-up
     */
    public function setUp(): void {
        $this->sdk = new Sdk();

        $this->tApi = $this->sdk
            ->testnet()
            ->api()
            ->bitcoin();

        $this->mApi = $this->sdk
            ->mainnet()
            ->api()
            ->bitcoin();
    }

    /**
     * Generate Wallet
     */
    public function testWallet(): void {
        $wallet = $this->tApi->btcGenerateWallet(static::MNEMONIC);
        $this->assertInstanceOf(Model\Wallet::class, $wallet);
        $this->assertEquals($wallet->getXpub(), static::TESTNET_XPUB);

        $wallet = $this->mApi->btcGenerateWallet(static::MNEMONIC);
        $this->assertInstanceOf(Model\Wallet::class, $wallet);
        $this->assertEquals($wallet->getXpub(), static::MAINNET_XPUB);
    }

    /**
     * Generate Address from xPub
     */
    public function testAddressFromXpub(): void {
        $wallet = $this->tApi->btcGenerateAddress(static::TESTNET_XPUB, 1);
        $this->assertInstanceOf(Model\GeneratedAddressBtc::class, $wallet);
        $this->assertEquals($wallet->getAddress(), static::TESTNET_ADDRESS);

        $wallet = $this->mApi->btcGenerateAddress(static::MAINNET_XPUB, 1);
        $this->assertInstanceOf(Model\GeneratedAddressBtc::class, $wallet);
        $this->assertEquals($wallet->getAddress(), static::MAINNET_ADDRESS);
    }

    /**
     * Private Key from mnemonic
     */
    public function testPrivateKeyFromMnemonic(): void {
        $privateKey = $this->tApi->btcGenerateAddressPrivateKey(
            (new Model\PrivKeyRequest())->setMnemonic(static::MNEMONIC)->setIndex(1)
        );
        $this->assertInstanceOf(Model\PrivKey::class, $privateKey);
        $this->assertEquals($privateKey->getKey(), static::TESTNET_PRIVATE_KEY);

        $privateKey = $this->mApi->btcGenerateAddressPrivateKey(
            (new Model\PrivKeyRequest())->setMnemonic(static::MNEMONIC)->setIndex(1)
        );
        $this->assertInstanceOf(Model\PrivKey::class, $privateKey);
        $this->assertEquals($privateKey->getKey(), static::MAINNET_PRIVATE_KEY);
    }
}
