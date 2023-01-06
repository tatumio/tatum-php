<?php

declare(strict_types=1);

/**
 * Abstract Hierarchical Deterministic (HD) Wallet functionality
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Local\Wallet;
!defined("TATUM-SDK") && exit();

use Tatum\Sdk\Caller;
use Tatum\Local\Chain;
use Tatum\Cryptography\Crypto\Random\Random;
use Tatum\Cryptography\Key\Factory\HierarchicalKeyFactory;
use Tatum\Cryptography\Mnemonic\Bip39\Bip39Mnemonic;
use Tatum\Cryptography\Mnemonic\Bip39\Bip39SeedGenerator;
use Tatum\Cryptography\Mnemonic\MnemonicFactory;

abstract class AbstractWallet {
    /**
     * Caller object
     *
     * @var \Tatum\Sdk\Caller
     */
    protected $_caller;

    /**
     * Default TestNet derivation path
     *
     * @var string
     */
    const DP_TESTNET = "44'/1'/0'/0";

    /**
     * Derivation paths
     *
     * @var array Associative array of
     * blockchain name => [TestNet derivation path, MainNet derivation path]
     */
    const DERIVATION_PATHS = [
        Chain::BTC => [self::DP_TESTNET, "44'/0'/0'/0"],
        Chain::BCH => ["44'/145'/0'/0", "44'/145'/0'/0"],
        Chain::LTC => [self::DP_TESTNET, "44'/2'/0'/0"],
        Chain::ETH => [self::DP_TESTNET, "44'/60'/0'/0"],
        Chain::KCS => [self::DP_TESTNET, "44'/60'/0'/0"],
        Chain::BSC => [self::DP_TESTNET, "44'/60'/0'/0"],
        Chain::DOGE => [self::DP_TESTNET, "44'/3'/0'/0"],
        Chain::CELO => [self::DP_TESTNET, "44'/52752'/0'/0"],
        Chain::POLYGON => [self::DP_TESTNET, "44'/966'/0'/0"],
        Chain::HARMONY => [self::DP_TESTNET, "44'/1023'/0'/0"],
        Chain::KLAY => [self::DP_TESTNET, "44'/8217'/0'/0"],
        Chain::TRON => ["44'/195'/0'/0", "44'/195'/0'/0"],
        Chain::EGLD => [self::DP_TESTNET, "44'/508'/0'/0"],
        Chain::ADA => [self::DP_TESTNET, "1852'/1815'/0'"],
        Chain::FLOW => [self::DP_TESTNET, "44'/539'/0'/0"],
        Chain::NEO => [self::DP_TESTNET, "44'/888'/0'/0"],
        Chain::SOL => [self::DP_TESTNET, "44'/501'/0'/0'"],
        Chain::VET => [self::DP_TESTNET, "44'/818'/0'/0"],
        Chain::XDC => [self::DP_TESTNET, "44'/550'/0'/0"],
        Chain::XLM => [self::DP_TESTNET, "44'/148'/0'/0"],
        Chain::XRP => [self::DP_TESTNET, "44'/144'/0'/0"],
        Chain::BNB => [self::DP_TESTNET, "44'/714'/0'/0"]
    ];

    /**
     * Use main network
     *
     * @var boolean
     */
    protected $_mainNet = false;

    /**
     * Local Wallet Constructor
     *
     * @param \Tatum\Sdk\Caller $caller Caller object
     */
    public function __construct(Caller $caller) {
        $this->_caller = $caller;
    }

    /**
     * Generate wallet from mnemonic
     *
     * @param string $mnemonic (optional) 24-word mnemonic; default <b>null</b>
     * @return \Tatum\Model\Wallet Wallet Model
     * @throws \InvalidArgumentException
     */
    abstract public function generateWallet(string $mnemonic = null): \Tatum\Model\Wallet;

    /**
     * Generate address from extended public key and index
     *
     * @param string $xPub  Extended public key
     * @param int    $index Address index
     *
     * @return \Tatum\Model\ModelInterface Generated Address Model
     * @throws \InvalidArgumentException
     */
    abstract public function generateAddressFromXpub(string $xPub, int $index);

    /**
     * Generate address from private key
     *
     * @param \Tatum\Model\PrivKey $private key Private key
     *
     * @return \Tatum\Model\ModelInterface Generated Address Model
     * @throws \InvalidArgumentException
     */
    abstract public function generateAddressFromPrivateKey(\Tatum\Model\PrivKey $privateKey);

    /**
     * Generate private key from mnemonic and index
     *
     * @param string $mnemonic 24-word mnemonic
     * @param int    $index    Derivation index
     *
     * @return \Tatum\Model\PrivKey Private key Model
     * @throws \InvalidArgumentException
     */
    abstract public function generatePrivateKey(string $mnemonic, int $index): \Tatum\Model\PrivKey;

    /**
     * Sanitize mnemonic string OR generate a new one
     *
     * @param string $mnemonic (optional) Mnemonic string; default <b>null</b>
     *
     * @return string Mnemonic
     * @throws \InvalidArgumentException
     */
    protected function _sanitizeMnemonic(string $mnemonic = null): string {
        if (null === $mnemonic) {
            $mnemonic = MnemonicFactory::bip39()->entropyToMnemonic(
                (new Random())->bytes(Bip39Mnemonic::MAX_ENTROPY_BYTE_LEN)
            );
        } else {
            // Validate user input
            if ("string" !== gettype($mnemonic) || 24 !== str_word_count($mnemonic)) {
                throw new \InvalidArgumentException("Invalid mnemonic");
            }
        }

        return $mnemonic;
    }

    /**
     * Get the HD wallet derivation path
     * If the input is invalid return the TestNet path
     *
     * @param string $chain Blockchain
     *
     * @return string Derivation path
     */
    protected function _getDerivationPath(string $chain): string {
        return "string" === gettype($chain) && isset(self::DERIVATION_PATHS[$chain])
            ? self::DERIVATION_PATHS[$chain][$this->_caller->config()->isMainNet() ? 1 : 0]
            : self::DP_TESTNET;
    }

    /**
     * Get the public key interface
     *
     * @param string $xPub  Extended public key
     * @param int    $index Derivation index
     *
     * @return \Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface
     */
    protected function _getPublicKey(
        string $xPub,
        int $index
    ): \Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface {
        return (new HierarchicalKeyFactory())
            ->fromExtended($xPub)
            ->withoutPrivateKey()
            ->derivePath("$index")
            ->getPublicKey();
    }

    /**
     * Get HD Wallet object
     *
     * @param string $chain    Blockchain
     * @param string $mnemonic Mnemonic
     * @param int    $index    Index
     *
     * @return \Tatum\Cryptography\Key\Deterministic\HierarchicalKey
     */
    protected function _getHdWallet(
        $chain,
        $mnemonic,
        $index = 0
    ): \Tatum\Cryptography\Key\Deterministic\HierarchicalKey {
        return (new HierarchicalKeyFactory())
            ->fromEntropy((new Bip39SeedGenerator())->getSeed($mnemonic))
            ->derivePath($this->_getDerivationPath($chain) . ($index > 0 ? "/$index" : ""));
    }
}
