<?php
/**
 * VeChain HD Wallet Test
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
 * VeChain Test
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class VeChainTest extends EthereumTest {
    /**
     * Mnemonic
     */
    const MNEMONIC = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

    /**
     * TestNet
     */
    const TESTNET_XPUB = "xpub6EbLFMjuqrkUMBZzsu7u4QY9e1iUD6GRXHswW7cTTW3gx7BMcaK6EKujYkLuFCBQbX5PS4n3BpQDRvnaF1zfabo7FH9JGn56MkJKWkGjeHY";
    const TESTNET_ADDRESS = "0x9266045eea878f35e0041d3140f0d79f8606f04c";
    const TESTNET_PRIVATE_KEY = "0xad25407b6dba3907b1d001ddfecf909ba94fcdf4f4aead108709598b125e9585";

    /**
     * MainNet
     */
    const MAINNET_XPUB = "xpub6F4mm7iVNb1adBuPbTNhiiH68Zco5ocstgi1ZuMRFJ94cGBmxJF4zn4hu6ARNFhbd7DMVA5D1BaFVkGKagrPisaqMji7pP8fV3KcwAvEihH";
    const MAINNET_ADDRESS = "0x83c38d4222adf55c62677f52deb5b7c4b6ff2d4b";
    const MAINNET_PRIVATE_KEY = "0x003ee7e6fe5925bd2e930a2bfc4e8332192c94562adf307c3eb5c5091a1a4e00";

    /**
     * Tatum SDK
     *
     * @var \Tatum\Sdk
     */
    protected $sdk;

    /**
     * Testnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\VeChain
     */
    protected $tWallet;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\VeChain
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
            ->vechain();

        $this->mWallet = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->vechain();
    }
}
