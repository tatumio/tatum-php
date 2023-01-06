<?php
/**
 * Ethereum HD Wallet
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Local\Wallet;
!defined("TATUM-SDK") && exit();

use Tatum\Model;
use Tatum\Local\Chain;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface;
use Tatum\Cryptography\Key\Factory\PrivateKeyFactory;
use Tatum\Cryptography\Bitcoin as BTC;
use Tatum\Cryptography\Network\NetworkFactory;
use Tatum\Cryptography\Crypto\EcAdapter\EcAdapterFactory;
use Tatum\Cryptography\Crypto\EcAdapter\Impl\PhpEcc\Serializer\Key\PublicKeySerializer;
use Tatum\Cryptography\Ecc\Serializer\Point\UncompressedPointSerializer;
use Tatum\Cryptography\Ecc\EccFactory;
use Tatum\Cryptography\Keccak;

class Ethereum extends AbstractWallet {
    /**
     * EVM chain
     */
    const CHAIN = Chain::ETH;

    /**
     * Public key serializer
     *
     * @var PublicKeySerializer
     */
    private static $_pubKeySerializer = null;

    /**
     * Uncompressed point serializer
     *
     * @var UncompressedPointSerializer
     */
    private static $_ucPointSerializer = null;

    /**
     * Generate wallet
     *
     * @param string $mnemonic (optional) 24-word mnemonic; default <b>null</b>
     * @return \Tatum\Model\Wallet Wallet Model
     * @throws \InvalidArgumentException
     */
    public function generateWallet(string $mnemonic = null): \Tatum\Model\Wallet {
        $mnemonic = $this->_sanitizeMnemonic($mnemonic);

        BTC::setNetwork(NetworkFactory::bitcoin());

        return (new Model\Wallet())
            ->setMnemonic($mnemonic)
            ->setXpub($this->_getHdWallet(static::CHAIN, $mnemonic)->toExtendedPublicKey());
    }

    /**
     * Generate address from xPub and index
     *
     * @param string $xPub  Extended public key
     * @param int    $index Derivation index
     * @throws \InvalidArgumentException
     * @return \Tatum\Model\GeneratedAddressEth
     */
    public function generateAddressFromXpub(string $xPub, int $index): \Tatum\Model\GeneratedAddressEth {
        BTC::setNetwork(NetworkFactory::bitcoin());

        return (new Model\GeneratedAddressEth())->setAddress(
            $this->_addressFromPublicKey($this->_getPublicKey($xPub, $index))
        );
    }

    /**
     * Generate address from private key
     *
     * @param \Tatum\Model\PrivKey $privateKey Private key
     * @return \Tatum\Model\GeneratedAddressEth
     */
    public function generateAddressFromPrivateKey(\Tatum\Model\PrivKey $privateKey): \Tatum\Model\GeneratedAddressEth {
        BTC::setNetwork(NetworkFactory::bitcoin());

        return (new Model\GeneratedAddressEth())->setAddress(
            $this->_addressFromPublicKey(
                (new PrivateKeyFactory())->fromHexUncompressed(substr($privateKey->getKey(), 2))->getPublicKey()
            )
        );
    }

    /**
     * Generate private key from mnemonic and index
     *
     * @param string $mnemonic 24-word mnemonic
     * @param int    $index    Derivation index
     * @throws \InvalidArgumentException
     * @return \Tatum\Model\PrivKey Private key Model
     */
    public function generatePrivateKey(string $mnemonic, int $index): \Tatum\Model\PrivKey {
        $this->_sanitizeMnemonic($mnemonic);

        BTC::setNetwork(
            $this->_caller->config()->isMainNet() ? NetworkFactory::bitcoin() : NetworkFactory::bitcoinTestnet()
        );

        return (new Model\PrivKey())->setKey(
            "0x" .
                $this->_getHdWallet(static::CHAIN, $mnemonic, $index)
                    ->getPrivateKey()
                    ->getHex()
        );
    }

    /**
     * Get address from public key interface
     *
     * @param PublicKeyInterface $publicKey Public Key interface
     * @return string Evm address
     */
    protected function _addressFromPublicKey(PublicKeyInterface $publicKey): string {
        // Initialize the serializer
        if (null === self::$_pubKeySerializer) {
            self::$_pubKeySerializer = new PublicKeySerializer(
                EcAdapterFactory::getPhpEcc(BTC::getMath(), BTC::getGenerator())
            );
            self::$_ucPointSerializer = new UncompressedPointSerializer(EccFactory::getAdapter());
        }

        // Calcukate the Keccak hash
        $keccak = Keccak::hash(
            hex2bin(
                substr(
                    self::$_ucPointSerializer->serialize(
                        self::$_pubKeySerializer->parse($publicKey->getBuffer())->getPoint()
                    ),
                    2
                )
            ),
            256
        );

        return "0x" . strtolower(substr($keccak, -40));
    }
}
