<?php
/**
 * Xdc (XinFin) HD Wallet Test
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
 * Xdc (XinFin) Test
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class XdcTest extends EthereumTest {
    /**
     * Mnemonic
     */
    const MNEMONIC = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

    /**
     * TestNet
     */
    const TESTNET_XPUB = "xpub6EbLFMjuqrkUMBZzsu7u4QY9e1iUD6GRXHswW7cTTW3gx7BMcaK6EKujYkLuFCBQbX5PS4n3BpQDRvnaF1zfabo7FH9JGn56MkJKWkGjeHY";
    const TESTNET_ADDRESS = "xdc9266045eea878f35e0041d3140f0d79f8606f04c";
    const TESTNET_PRIVATE_KEY = "0xad25407b6dba3907b1d001ddfecf909ba94fcdf4f4aead108709598b125e9585";

    /**
     * MainNet
     */
    const MAINNET_XPUB = "xpub6E3pK6iBee4DvBg1UdYny5HZF3F481gx2HUszdnVnqvBBEfGX33LKaPzGHx3bS7vGXns2NqChRRdd1u68oRgYYiLVEb3176McTZha2gMyWA";
    const MAINNET_ADDRESS = "xdcb2ca270f90c1e70de02fdcb8bb78fa420a5965c4";
    const MAINNET_PRIVATE_KEY = "0xd2805c0b0559e446f7c5efd8cec879cafdd76affb8e0d3b44fc63b7326b9056c";

    /**
     * Tatum SDK
     *
     * @var \Tatum\Sdk
     */
    protected $sdk;

    /**
     * Testnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Xdc
     */
    protected $tWallet;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Xdc
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
            ->xdc();

        $this->mWallet = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->xdc();
    }
}
