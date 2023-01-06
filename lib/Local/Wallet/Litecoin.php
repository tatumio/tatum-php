<?php
/**
 * Litecoin HD wallet
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
use Tatum\Cryptography\Network\NetworkFactory;
use Tatum\Cryptography\Key\Factory\PrivateKeyFactory;
use Tatum\Cryptography\Address\PayToPubKeyHashAddress;
use Tatum\Cryptography\Bitcoin as BTC;

class Litecoin extends AbstractWallet {
    /**
     * Generate Litecoin wallet
     *
     * @param string $mnemonic (optional) 24-word mnemonic; default <b>null</b>
     * @return \Tatum\Model\Wallet Wallet Model
     * @throws \InvalidArgumentException
     */
    public function generateWallet(string $mnemonic = null): \Tatum\Model\Wallet {
        $mnemonic = $this->_sanitizeMnemonic($mnemonic);

        BTC::setNetwork(
            $this->_caller->config()->isMainNet() ? NetworkFactory::litecoin() : NetworkFactory::litecoinTestnet()
        );

        return (new Model\Wallet())
            ->setMnemonic($mnemonic)
            ->setXpub($this->_getHdWallet(Chain::LTC, $mnemonic)->toExtendedPublicKey());
    }

    /**
     * Generate address from xPub and index
     *
     * @param string $xPub  Extended public key
     * @param int    $index Derivation index
     * @throws \InvalidArgumentException
     * @return \Tatum\Model\GeneratedAddressBtc
     */
    public function generateAddressFromXpub(string $xPub, int $index): \Tatum\Model\GeneratedAddressBtc {
        BTC::setNetwork(
            $this->_caller->config()->isMainNet() ? NetworkFactory::litecoin() : NetworkFactory::litecoinTestnet()
        );

        return (new Model\GeneratedAddressBtc())->setAddress(
            (new PayToPubKeyHashAddress($this->_getPublicKey($xPub, $index)->getPubKeyHash()))->getAddress()
        );
    }

    /**
     * Generate address from private key
     *
     * @param \Tatum\Model\PrivKey $privateKey Private key
     * @return \Tatum\Model\GeneratedAddressBtc
     */
    public function generateAddressFromPrivateKey(\Tatum\Model\PrivKey $privateKey): \Tatum\Model\GeneratedAddressBtc {
        BTC::setNetwork(
            $this->_caller->config()->isMainNet() ? NetworkFactory::litecoin() : NetworkFactory::litecoinTestnet()
        );

        return (new Model\GeneratedAddressBtc())->setAddress(
            (new PayToPubKeyHashAddress(
                (new PrivateKeyFactory())
                    ->fromWif($privateKey->getKey())
                    ->getPublicKey()
                    ->getPubKeyHash()
            ))->getAddress()
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
            $this->_caller->config()->isMainNet() ? NetworkFactory::litecoin() : NetworkFactory::litecoinTestnet()
        );

        return (new Model\PrivKey())->setKey(
            $this->_getHdWallet(Chain::LTC, $mnemonic, $index)
                ->getPrivateKey()
                ->toWif()
        );
    }
}
