<?php
/**
 * Bitcoin Cash HD Wallet Test
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
 * Bitcoin Cash Test
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class BitcoinCashTest extends BitcoinTest {
    /**
     * Mnemonic
     */
    const MNEMONIC = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

    /**
     * TestNet
     */
    const TESTNET_XPUB = "tpubDErTz665Maw22hCxRXYGFtqAWE1yMhH927FRnLHhbZEA8Fudk2cgvBEnzj2dme5Bx48mrmTs7ytv7motQA3XHHxxjptYtQzrudaUoNeBg2D";
    const TESTNET_ADDRESS = "bchtest:qqsnnrvk28rj7lzg7tvlyw8s7xa2vqvj0yxq2xn9ld";
    const TESTNET_PRIVATE_KEY = "cUhQBn2AsUtuMBP6n9n17sEg8AUfJdJwtSrQy1vjoAKrRUfrTNF3";

    /**
     * MainNet
     */
    const MAINNET_XPUB = "xpub6EUqTrGPeJyZku26yLZB3yVoB6vKNJn5UUf8RnEZFeUGNyEvfombmjZxkgwrF97xA9bsFBwzat4sRbKH1JCHPrWfgE9FCtLdKfz53N1cgsR";
    const MAINNET_ADDRESS = "bitcoincash:qqsnnrvk28rj7lzg7tvlyw8s7xa2vqvj0yzjwp3jc3";
    const MAINNET_PRIVATE_KEY = "L4LQis2KSRCeBjuqPjxskYjcVwBFeBDFpQhwrbUEJ3frAjcYiT5k";

    /**
     * Tatum SDK
     *
     * @var \Tatum\Sdk
     */
    protected $sdk;

    /**
     * Testnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\BitcoinCash
     */
    protected $tApi;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\BitcoinCash
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
            ->bitcoinCash();

        $this->mApi = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->bitcoinCash();
    }
}
