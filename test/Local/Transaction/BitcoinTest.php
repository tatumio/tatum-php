<?php
/**
 * Bitcoin Transaction Test
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
 * Bitcoin Test
 *
 * @coversDefaultClass \Tatum\Local\Transaction
 */
class BitcoinTest extends TestCase {
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
     * @var \Tatum\Local\Wallet\Bitcoin
     */
    protected $tWallet;

    /**
     * Testnet:Local:Transaction
     *
     * @var \Tatum\Local\Transaction\Bitcoin
     */
    protected $tTransaction;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Bitcoin
     */
    protected $mWallet;

    /**
     * Mainnet:Local:Transaction
     *
     * @var \Tatum\Local\Transaction\Bitcoin
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
            ->bitcoin();

        $this->tTransaction = $this->sdk
            ->testnet()
            ->local()
            ->transaction()
            ->bitcoin();

        $this->mWallet = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->bitcoin();

        $this->mTransaction = $this->sdk
            ->mainnet()
            ->local()
            ->transaction()
            ->bitcoin();
    }

    /**
     * Bitcoin Sign Transaction
     */
    public function testBitcoinSign(): void {
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
                ->addSource($fromPrivateKey->getKey(), str_repeat("0", 64), 0, "1010000000")
                ->addTarget($toAddress->getAddress(), 1)
        );

        $this->assertEquals(
            $txData,
            "010000000100000000000000000000000000000000000000000000000000000000000000000000000000ffffffff0200e1f50500000000160014c4b798ba666e219e31b3529c7b3e8a8fd51a44d7403d2e36000000001600142fa67062b38830d3aeff4c1f87a8a55dc4020c1a00000000"
        );
    }

    /**
     * Bitcoin Sign Transaction - Main Network
     */
    public function testBitcoinSignMainNet(): void {
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
                ->addSource($fromPrivateKey->getKey(), str_repeat("0", 64), 0, "1010000000")
                ->addTarget($toAddress->getAddress(), 1)
        );

        $this->assertEquals(
            $txData,
            "010000000100000000000000000000000000000000000000000000000000000000000000000000000000ffffffff0200e1f5050000000016001403cf14d12a1973a738bb4119e8b960ea0ee424db403d2e3600000000160014f33cf6f82bd092668b57bf9cff0089b56eecb14c00000000"
        );
    }
}
