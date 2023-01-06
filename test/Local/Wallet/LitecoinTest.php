<?php
/**
 * Litecoin HD Wallet Test
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
 * Litecoin Test
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class LitecoinTest extends BitcoinTest {
    /**
     * Mnemonic
     */
    const MNEMONIC = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

    /**
     * TestNet
     */
    const TESTNET_XPUB = "ttub4fxCiRuvD7JU842PNEAHYoy6Co1uLs3Tk65nthME7Gh9RzwrGnaVKJ9DFMcZLWwCokEdPwLPNG8wbrpstZqFrhF4nKoKdS6YrbEJZP7s9pR";
    const TESTNET_ADDRESS = "mjruSTLdpEd7xFge9HK8tquRUMBi7ecdqV";
    const TESTNET_PRIVATE_KEY = "cTPGqe6hkwVY6JNHJUZ4wSUvPo8GNMe2cDFTsFV1jSqCBMDKpfSU";

    /**
     * MainNet
     */
    const MAINNET_XPUB = "Ltub2bRbkJ41qR4dWJ9XgMjChoLby5nycjKSHKDTwYvHrnaLeUmTQPkKntx28xbJQCAteXZ39xMXf7EwnU5ei2L9VYnm33NEhk8GDbamTsrFH54";
    const MAINNET_ADDRESS = "LUb5WBFuQqNyMXjgHJY4FQGMXfHKwyWCf7";
    const MAINNET_PRIVATE_KEY = "T3bNkAH9BDfKYmHxE84tSRZJ3jVwjergpfQosUDXypYocm1bwfj4";

    /**
     * Tatum SDK
     *
     * @var \Tatum\Sdk
     */
    protected $sdk;

    /**
     * Testnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Litecoin
     */
    protected $tApi;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Litecoin
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
            ->litecoin();

        $this->mApi = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->litecoin();
    }
}
