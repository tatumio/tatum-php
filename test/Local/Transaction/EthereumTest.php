<?php
/**
 * Ethereum Transaction Test
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Test\Local\Transaction;
!class_exists("\Tatum\Sdk") && exit();

use Tatum\Sdk;
use Tatum\Model;
use PHPUnit\Framework\TestCase;

/**
 * Ethereum Test
 *
 * @coversDefaultClass \Tatum\Local\Transaction
 */
class EthereumTest extends TestCase {
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
     * @var \Tatum\Local\Wallet\Ethereum
     */
    protected $tWallet;

    /**
     * Testnet:Local:Transaction
     *
     * @var \Tatum\Local\Transaction\Ethereum
     */
    protected $tTransaction;

    /**
     * Mainnet:Local:Wallet
     *
     * @var \Tatum\Local\Wallet\Ethereum
     */
    protected $mWallet;

    /**
     * Mainnet:Local:Transaction
     *
     * @var \Tatum\Local\Transaction\Ethereum
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
            ->ethereum();

        $this->tTransaction = $this->sdk
            ->testnet()
            ->local()
            ->transaction()
            ->ethereum();

        $this->mWallet = $this->sdk
            ->mainnet()
            ->local()
            ->wallet()
            ->ethereum();

        $this->mTransaction = $this->sdk
            ->mainnet()
            ->local()
            ->transaction()
            ->ethereum();
    }

    /**
     * Ethereum Sign Transaction
     */
    public function testEthereumSign(): void {
        // Sender private key
        $fromPrivateKey = $this->tWallet->generatePrivateKey(self::MNEMONIC, 1);

        // Recipient; generate address at index 2
        $toAddress = $this->tWallet->generateAddressFromPrivateKey(
            $this->tWallet->generatePrivateKey(self::MNEMONIC, 2)
        );

        // Prepare the transaction
        $transaction = (new Model\TransferEthBlockchain())
            ->setFromPrivateKey($fromPrivateKey->getKey())
            ->setTo($toAddress->getAddress())
            ->setAmount(1)
            ->setNonce(0)
            ->setFee((new Model\CustomFee())->setGasPrice(55)->setGasLimit(60));

        // Sign the transaction (no broadcast)
        $txData = $this->tTransaction->sign($transaction);
        $this->assertEquals(
            $txData,
            "0xf86f80850cce416600850df84758009428b4581f76976dcdaf93fb7ef7740300e3e68f6c880de0b6b3a76400008029a0cd79e104c3d5bb48adadc4b41bb1a67f195e4dcf98008b4f0487de99c5d8dea3a07130eb5b8a6926766af7bbf63b7c654c5671456887bca235206326599d7f65d9"
        );
    }

    /**
     * Ethereum Sign Transaction - Main Network
     */
    public function testEthereumSignMainNet(): void {
        // Sender private key
        $fromPrivateKey = $this->mWallet->generatePrivateKey(self::MNEMONIC, 1);

        // Recipient; generate address at index 2
        $toAddress = $this->mWallet->generateAddressFromPrivateKey(
            $this->mWallet->generatePrivateKey(self::MNEMONIC, 2)
        );

        // Prepare the transaction
        $transaction = (new Model\TransferEthBlockchain())
            ->setFromPrivateKey($fromPrivateKey->getKey())
            ->setTo($toAddress->getAddress())
            ->setAmount(1)
            ->setNonce(0)
            ->setFee((new Model\CustomFee())->setGasPrice(55)->setGasLimit(60));

        // Sign the transaction (no broadcast)
        $txData = $this->mTransaction->sign($transaction);
        $this->assertEquals(
            $txData,
            "0xf86f80850cce416600850df847580094c071f55bcfb12d94b7630412404a5197343238ee880de0b6b3a76400008025a03c5a536031ec25917479532469b0d9a7c625d3f7cb9815b373c080cf2d1dda63a05261a60d1bbb5f1befec6ce755f27cad18fcf38e40a57f3211d0c5e832219d6a"
        );
    }
}
