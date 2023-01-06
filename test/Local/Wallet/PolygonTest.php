<?php
/**
 * Polygon HD Wallet Test
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
 * Polygon Test
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class PolygonTest extends EthereumTest {
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
    const MAINNET_XPUB = "xpub6E1tdmD2fDQPzjn2Vw7f1Kgg5n9NCcvNPKDFpXweHWT5FRWamudABojmofJxMgB4gqz2y5wsqC3TSrhnZsdGNzdj3scWeXtSbB7AqrHA3YA";
    const MAINNET_ADDRESS = "0xf7d6c5a915ade8cfdf25c03d1ddeb344619cac55";
    const MAINNET_PRIVATE_KEY = "0xd5f4e8cb8d5c71f7eda8f21617a47d0c6c7d30b7e904aa15542b13f73848ee07";

    /**
     * Tatum SDK
     *
     * @var \Tatum\Sdk
     */
    protected $sdk;

    /**
     * Testnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Polygon
     */
    protected $tWallet;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Polygon
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
            ->polygon();

        $this->mWallet = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->polygon();
    }
}
