<?php
/**
 * Tron HD Wallet Test
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
 * Tron Test
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class TronTest extends EthereumTest {
    /**
     * Mnemonic
     */
    const MNEMONIC = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

    /**
     * TestNet
     */
    const TESTNET_XPUB = "xpub6EXfKKFNJZmi6Vk7JPkB8R2vosJiDuMxVS9wRKj9SNv76aJ3AN3wp9niq5cLyFnrcSJGiwCst1jyTmJ1FcJM7xbEK9ov9hSeewcvMRFHiQq";
    const TESTNET_ADDRESS = "TG2ui7qioq2m6kNQutetFu6mYstJnhPesr";
    const TESTNET_PRIVATE_KEY = "51062cefc351f36b7dbf479d0f86bcb4a5aef3381d866ea76c31ac7241d01f1b";

    /**
     * MainNet
     */
    const MAINNET_XPUB = "xpub6EXfKKFNJZmi6Vk7JPkB8R2vosJiDuMxVS9wRKj9SNv76aJ3AN3wp9niq5cLyFnrcSJGiwCst1jyTmJ1FcJM7xbEK9ov9hSeewcvMRFHiQq";
    const MAINNET_ADDRESS = "TG2ui7qioq2m6kNQutetFu6mYstJnhPesr";
    const MAINNET_PRIVATE_KEY = "51062cefc351f36b7dbf479d0f86bcb4a5aef3381d866ea76c31ac7241d01f1b";

    /**
     * Tatum SDK
     *
     * @var \Tatum\Sdk
     */
    protected $sdk;

    /**
     * Testnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Tron
     */
    protected $tWallet;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Tron
     */
    protected $mWallet;

    /**
     * Set-up
     */
    public function setUp(): void {
        $this->sdk = new Sdk();

        $this->tWallet = $this->sdk
            ->testnet()
            ->local()
            ->wallet()
            ->tron();

        $this->mWallet = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->tron();
    }
}
