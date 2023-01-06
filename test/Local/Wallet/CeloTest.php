<?php
/**
 * Celo HD Wallet Test
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
 * Celo Test
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class CeloTest extends EthereumTest {
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
    const MAINNET_XPUB = "xpub6EBimZgcxSNpqm4oAYAksMjEvNhjXrLCFF4nSnwqovVduJvYdb6ccqrbBr9XvxUUxtcrAPgAXknaYumxjKHPjSCuXNN3cPTTdf45gKNffPR";
    const MAINNET_ADDRESS = "0xd08ae00c157cfc9fbaf81030ca178c6f341bcba0";
    const MAINNET_PRIVATE_KEY = "0xfceb7a85a734df87b99b0a97b4c46ab37e3aba73870f6896114227d3d7423a48";

    /**
     * Tatum SDK
     *
     * @var \Tatum\Sdk
     */
    protected $sdk;

    /**
     * Testnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Celo
     */
    protected $tWallet;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Celo
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
            ->celo();

        $this->mWallet = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->celo();
    }
}
