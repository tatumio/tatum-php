<?php
/**
 * Harmony.ONE HD Wallet Test
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
 * Harmony.ONE Test
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class HarmonyTest extends EthereumTest {
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
    const MAINNET_XPUB = "xpub6ExGFJnhSapc41YWRWsi4wF4M7eAQHLbErD3BXJmZ1MSk4Wd3v5CvJ3MFS1aMjfGGxnNQSY6j7hfuSM2ivGg73kXTK8dGEdwqJYQhoaYvcR";
    const MAINNET_ADDRESS = "0x3a25662967c8374276bb4a75dfb55985fe5c0795";
    const MAINNET_PRIVATE_KEY = "0x48dbb40caa20acfcdb50235922867fc6c7bb4c93b1c7fd4af0e89be28b25302a";

    /**
     * Tatum SDK
     *
     * @var \Tatum\Sdk
     */
    protected $sdk;

    /**
     * Testnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Harmony
     */
    protected $tWallet;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Harmony
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
            ->harmony();

        $this->mWallet = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->harmony();
    }
}
