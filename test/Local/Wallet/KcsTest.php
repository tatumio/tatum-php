<?php
/**
 * Kcs (KuCoin Token) HD Wallet Test
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
 * Kcs (KuCoin Token) Test
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class KcsTest extends EthereumTest {
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
    const MAINNET_XPUB = "xpub6F8hPiUFLGJJvj55gXG6fwqRJrUauCi2rHp5qPrC1Yj6FL3nG63GDawESEwChqsdf2tFqB2F51HduMBNHsF6oTxWb9Dqg3XZizNUc8afzGd";
    const MAINNET_ADDRESS = "0x4062d6e78636b78cd0a99be05036982db987c3a8";
    const MAINNET_PRIVATE_KEY = "0x280e2d743c6d7aa2ed2d4a170758adb8785975ac7d0e8f8c67fc649dc69ca7de";

    /**
     * Tatum SDK
     *
     * @var \Tatum\Sdk
     */
    protected $sdk;

    /**
     * Testnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Kcs
     */
    protected $tWallet;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Kcs
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
            ->kcs();

        $this->mWallet = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->kcs();
    }
}
