<?php
/**
 * Bitcoin Cash Transaction Test
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Test\Local\Transaction;
!class_exists("\Tatum\Sdk") && exit();

use Tatum\Sdk;
use Tatum\Local\Transaction\Bitcoin\Transfer;
use PHPUnit\Framework\TestCase;

/**
 * Bitcoin Cash Test
 *
 * @coversDefaultClass \Tatum\Local\Transaction
 */
class BitcoinCashTest extends TestCase {
    /**
     * Mnemonic
     */
    const MNEMONIC = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

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
    protected $tWallet;

    /**
     * Testnet:Local:Transaction
     *
     * @var \Tatum\Local\Transaction\BitcoinCash
     */
    protected $tTransaction;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\BitcoinCash
     */
    protected $mWallet;

    /**
     * Mainnet:Local:Transaction
     *
     * @var \Tatum\Local\Transaction\BitcoinCash
     */
    protected $mTransaction;

    /**
     * Set-up
     */
    public function setUp(): void {
        $this->sdk = new Sdk();

        $this->tWallet = $this->sdk
            ->testnet()
            ->local()
            ->wallet()
            ->bitcoinCash();

        $this->tTransaction = $this->sdk
            ->testnet()
            ->local()
            ->transaction()
            ->bitcoinCash();

        $this->mWallet = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->bitcoinCash();

        $this->mTransaction = $this->sdk
            ->mainnet()
            ->local()
            ->transaction()
            ->bitcoinCash();
    }

    /**
     * Bitcoin Cash Sign Transaction
     */
    public function testBitcoinCashSign(): void {
        // Sender private key
        $fromPrivateKey = $this->tWallet->generatePrivateKey(self::MNEMONIC, 1);

        // Change address
        $changeAddress = $this->tWallet->generateAddressFromPrivateKey($fromPrivateKey);

        // Recipient
        $toAddress = $this->tWallet->generateAddressFromPrivateKey(
            $this->tWallet->generatePrivateKey(self::MNEMONIC, 2)
        );

        // Sign the transaction (no broadcast)
        $txData = $this->tTransaction->sign(
            (new Transfer())
                ->setFee("0.01")
                ->setChangeAddress($changeAddress->getAddress())
                ->addSource($fromPrivateKey->getKey(), str_repeat("a", 64), 0, "1010000000")
                ->addTarget($toAddress->getAddress(), 1)
        );

        $this->assertEquals(
            $txData,
            "0100000001aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa0000000000ffffffff0200e1f505000000001976a914eb99bffb4dec6a59f8bcb152b2d7d7009650f92588ac403d2e36000000001976a91421398d9651c72f7c48f2d9f238f0f1baa601927988ac00000000"
        );
    }

    /**
     * Bitcoin Cash Sign Transaction - Main Network
     */
    public function testBitcoinCashSignMainNet(): void {
        // Sender private key
        $fromPrivateKey = $this->mWallet->generatePrivateKey(self::MNEMONIC, 1);

        // Change address
        $changeAddress = $this->mWallet->generateAddressFromPrivateKey($fromPrivateKey);

        // Recipient
        $toAddress = $this->mWallet->generateAddressFromPrivateKey(
            $this->mWallet->generatePrivateKey(self::MNEMONIC, 2)
        );

        // Sign the transaction (no broadcast)
        $txData = $this->mTransaction->sign(
            (new Transfer())
                ->setFee("0.01")
                ->setChangeAddress($changeAddress->getAddress())
                ->addSource($fromPrivateKey->getKey(), str_repeat("a", 64), 0, "1010000000")
                ->addTarget($toAddress->getAddress(), 1)
        );

        $this->assertEquals(
            $txData,
            "0100000001aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa0000000000ffffffff0200e1f505000000001976a914eb99bffb4dec6a59f8bcb152b2d7d7009650f92588ac403d2e36000000001976a91421398d9651c72f7c48f2d9f238f0f1baa601927988ac00000000"
        );
    }
}
