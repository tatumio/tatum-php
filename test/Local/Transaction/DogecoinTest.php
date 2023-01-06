<?php
/**
 * Dogecoin Transaction Test
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
 * Dogecoin Test
 *
 * @coversDefaultClass \Tatum\Local\Transaction
 */
class DogecoinTest extends TestCase {
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
     * @var \Tatum\Local\Wallet\Dogecoin
     */
    protected $tWallet;

    /**
     * Testnet:Local:Transaction
     *
     * @var \Tatum\Local\Transaction\Dogecoin
     */
    protected $tTransaction;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Dogecoin
     */
    protected $mWallet;

    /**
     * Mainnet:Local:Transaction
     *
     * @var \Tatum\Local\Transaction\Dogecoin
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
            ->dogecoin();

        $this->tTransaction = $this->sdk
            ->testnet()
            ->local()
            ->transaction()
            ->dogecoin();

        $this->mWallet = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->dogecoin();

        $this->mTransaction = $this->sdk
            ->mainnet()
            ->local()
            ->transaction()
            ->dogecoin();
    }

    /**
     * Dogecoin Sign Transaction
     */
    public function testDogecoinSign(): void {
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
     * Dogecoin Sign Transaction - Main Network
     */
    public function testDogecoinSignMainNet(): void {
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
            "0100000001aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa0000000000ffffffff0200e1f505000000001976a914e3c6eadf66760615ee43322ea441d4949a969c8b88ac403d2e36000000001976a914451cf57eae87d2866c412ec1ec56a15af490020488ac00000000"
        );
    }
}
