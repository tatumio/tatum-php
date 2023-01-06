<?php
/**
 * Klaytn HD Wallet Test
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
 * Klaytn Test
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class KlaytnTest extends EthereumTest {
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
    const MAINNET_XPUB = "xpub6F5LSxdPKEeppQj18qu4mzMWfB2zwh5mL4gk749k5aNVhQV5E7U7S9Xo2Ycs18wqCVKpSU93e3wXvdJngwxC4SHfgXDhVuREcqNcicovCy3";
    const MAINNET_ADDRESS = "0xadfb4fc5eef315c7bb1af81e2860ef874cd1bad7";
    const MAINNET_PRIVATE_KEY = "0x1f03e0ba4f5c9cef084a4881b4dd851d04b41d41c58d9a06003715a157ddd30f";

    /**
     * Tatum SDK
     *
     * @var \Tatum\Sdk
     */
    protected $sdk;

    /**
     * Testnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Klaytn
     */
    protected $tWallet;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Klaytn
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
            ->klaytn();

        $this->mWallet = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->klaytn();
    }
}
