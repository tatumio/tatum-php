<?php
/**
 * Dogecoin HD Wallet
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
use Tatum\Cryptography\Bitcoin as BTC;
use Tatum\Cryptography\Key\Factory\PrivateKeyFactory;
use Tatum\Cryptography\Network\NetworkFactory;
use Tatum\Cryptography\Address;

class Dogecoin extends AbstractWallet {
    /**
     * Generate Dogecoin wallet
     *
     * @param string $mnemonic (optional) 24-word mnemonic; default <b>null</b>
     * @return \Tatum\Model\Wallet Wallet Model
     * @throws \InvalidArgumentException
     */
    public function generateWallet(string $mnemonic = null): \Tatum\Model\Wallet {
        $mnemonic = $this->_sanitizeMnemonic($mnemonic);

        BTC::setNetwork(
            $this->_caller->config()->isMainNet() ? NetworkFactory::bitcoin() : NetworkFactory::dogecoinTestnet()
        );

        return (new Model\Wallet())
            ->setMnemonic($mnemonic)
            ->setXpub($this->_getHdWallet(Chain::DOGE, $mnemonic)->toExtendedPublicKey());
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
            $this->_caller->config()->isMainNet() ? NetworkFactory::bitcoin() : NetworkFactory::dogecoinTestnet()
        );

        // Get the address
        return (new Model\GeneratedAddressBtc())->setAddress(
            (new Address\PayToPubKeyHashAddress($this->_getPublicKey($xPub, $index)->getPubKeyHash()))->getAddress(
                $this->_caller->config()->isMainNet() ? NetworkFactory::dogecoin() : NetworkFactory::dogecoinTestnet()
            )
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
            $this->_caller->config()->isMainNet() ? NetworkFactory::dogecoin() : NetworkFactory::dogecoinTestnet()
        );

        return (new Model\GeneratedAddressBtc())->setAddress(
            (new Address\PayToPubKeyHashAddress(
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
            $this->_caller->config()->isMainNet() ? NetworkFactory::dogecoin() : NetworkFactory::dogecoinTestnet()
        );

        return (new Model\PrivKey())->setKey(
            $this->_getHdWallet(Chain::DOGE, $mnemonic, $index)
                ->getPrivateKey()
                ->toWif()
        );
    }
}
