<?php
/**
 * Bitcoin HD Wallet Test
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Test\Local\Wallet;
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
     * Testnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Bitcoin
     */
    protected $tApi;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Bitcoin
     */
    protected $mApi;

    /**
     * Set-up
     */
    public function setUp(): void {
        $this->sdk = new Sdk();

        $this->tApi = $this->sdk
            ->testnet()
            ->local()
            ->wallet()
            ->bitcoin();

        $this->mApi = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->bitcoin();
    }

    /**
     * Mnemonic must be a string
     */
    public function testExceptionMnemonicString() {
        $this->expectException(\InvalidArgumentException::class);
        $this->tApi->generateWallet(1);
    }

    /**
     * Mnemonic must be 24 words
     */
    public function testExceptionMnemonic24() {
        $this->expectException(\InvalidArgumentException::class);
        $this->tApi->generateWallet("a b");
    }

    /**
     * xPub must correspond to the right network
     */
    public function testExceptionNetwork(): void {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("HD key magic bytes do not match network magic bytes");

        $this->tApi->generateAddressFromXpub(static::MAINNET_XPUB, 1);
    }

    /**
     * Generate Wallet
     */
    public function testWallet(): void {
        $wallet = $this->tApi->generateWallet(static::MNEMONIC);
        $this->assertInstanceOf(Model\Wallet::class, $wallet);
        $this->assertEquals($wallet->getXpub(), static::TESTNET_XPUB);

        $wallet = $this->mApi->generateWallet(static::MNEMONIC);
        $this->assertInstanceOf(Model\Wallet::class, $wallet);
        $this->assertEquals($wallet->getXpub(), static::MAINNET_XPUB);
    }

    /**
     * Generate Address from xPub
     */
    public function testAddressFromXpub(): void {
        $wallet = $this->tApi->generateAddressFromXpub(static::TESTNET_XPUB, 1);
        $this->assertInstanceOf(Model\GeneratedAddressBtc::class, $wallet);
        $this->assertEquals($wallet->getAddress(), static::TESTNET_ADDRESS);

        $wallet = $this->mApi->generateAddressFromXpub(static::MAINNET_XPUB, 1);
        $this->assertInstanceOf(Model\GeneratedAddressBtc::class, $wallet);
        $this->assertEquals($wallet->getAddress(), static::MAINNET_ADDRESS);
    }

    /**
     * Generate Address from private key
     */
    public function testAddressFromPrivateKey(): void {
        $wallet = $this->tApi->generateAddressFromPrivateKey(
            (new Model\PrivKey())->setKey(static::TESTNET_PRIVATE_KEY)
        );
        $this->assertInstanceOf(Model\GeneratedAddressBtc::class, $wallet);
        $this->assertEquals($wallet->getAddress(), static::TESTNET_ADDRESS);

        $wallet = $this->mApi->generateAddressFromPrivateKey(
            (new Model\PrivKey())->setKey(static::MAINNET_PRIVATE_KEY)
        );
        $this->assertInstanceOf(Model\GeneratedAddressBtc::class, $wallet);
        $this->assertEquals($wallet->getAddress(), static::MAINNET_ADDRESS);
    }

    /**
     * Private Key from mnemonic
     */
    public function testPrivateKeyFromMnemonic(): void {
        $privateKey = $this->tApi->generatePrivateKey(static::MNEMONIC, 1);
        $this->assertInstanceOf(Model\PrivKey::class, $privateKey);
        $this->assertEquals($privateKey->getKey(), static::TESTNET_PRIVATE_KEY);

        $privateKey = $this->mApi->generatePrivateKey(static::MNEMONIC, 1);
        $this->assertInstanceOf(Model\PrivKey::class, $privateKey);
        $this->assertEquals($privateKey->getKey(), static::MAINNET_PRIVATE_KEY);
    }
}
