<?php
/**
 * Litecoin Transaction Test
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
 * Litecoin Test
 *
 * @coversDefaultClass \Tatum\Local\Transaction
 */
class LitecoinTest extends TestCase {
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
     * @var \Tatum\Local\Wallet\Litecoin
     */
    protected $tWallet;

    /**
     * Testnet:Local:Transaction
     *
     * @var \Tatum\Local\Transaction\Litecoin
     */
    protected $tTransaction;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Litecoin
     */
    protected $mWallet;

    /**
     * Mainnet:Local:Transaction
     *
     * @var \Tatum\Local\Transaction\Litecoin
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
            ->litecoin();

        $this->tTransaction = $this->sdk
            ->testnet()
            ->local()
            ->transaction()
            ->litecoin();

        $this->mWallet = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->litecoin();

        $this->mTransaction = $this->sdk
            ->mainnet()
            ->local()
            ->transaction()
            ->litecoin();
    }

    /**
     * Litecoin Sign Transaction
     */
    public function testLitecoinSign(): void {
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
            "0100000001aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa0000000000ffffffff0200e1f505000000001976a914c4b798ba666e219e31b3529c7b3e8a8fd51a44d788ac403d2e36000000001976a9142fa67062b38830d3aeff4c1f87a8a55dc4020c1a88ac00000000"
        );
    }

    /**
     * Litecoin Sign Transaction - Main Network
     */
    public function testLitecoinSignMainNet(): void {
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
            "0100000001aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa0000000000ffffffff0200e1f505000000001976a9149c267a4e8120ab89e877a68f616cdb1e57e9421188ac403d2e36000000001976a91466b7e95acdb8eea97656e10c9c7fbe1fb2866e1c88ac00000000"
        );
    }
}
