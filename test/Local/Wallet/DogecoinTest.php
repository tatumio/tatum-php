<?php
/**
 * Dogecoin HD Wallet Test
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Test\Local\Wallet;
!class_exists("\Tatum\Sdk") && exit();

use Tatum\Sdk;

/**
 * DogecoinTest
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class DogecoinTest extends BitcoinTest {
    /**
     * Mnemonic
     */
    const MNEMONIC = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

    /**
     * TestNet
     */
    const TESTNET_XPUB = "tpubDExxmbZbZ8hvcykrL66zGKsWy8p8CUmV4vUErffboQoahPr4goABNmaZnnRgmh8ePRcJ3eHuivEG87HBdsquU3FQJstbxJjKwhtjGiWrpB2";
    const TESTNET_ADDRESS = "nYY7QfwDEbYsb7xpC7yms6SzjMhbYdr5vy";
    const TESTNET_PRIVATE_KEY = "ckYXyxpW7FKp3LPpQdLrXnfttfXa3CBUw6VizABCiQLck1ZVbNq2";

    /**
     * MainNet
     */
    const MAINNET_XPUB = "xpub6FKmR47ApZ12PZngFJeNrpEahSaxrRh3H223muR154sCLA86agnBAAzuzubQk18TB3xY6d8PetA8nfXjFbLNsjjfHJM3CwUnoKLgU65CWdq";
    const MAINNET_ADDRESS = "DBSXrbgnSM1R7uZ4qtt4ZKUVPhiK4dYstS";
    const MAINNET_PRIVATE_KEY = "QVL75MAoN4KSmchsUKfYZAoVJMq5iwwH7BgPo5LMFFFiuXvaTAkv";

    /**
     * Tatum SDK
     *
     * @var \Tatum\Sdk
     */
    protected $sdk;

    /**
     * Testnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Dogecoin
     */
    protected $tApi;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Dogecoin
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
            ->dogecoin();

        $this->mApi = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->dogecoin();
    }
}
