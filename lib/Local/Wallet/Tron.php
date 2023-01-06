<?php
/**
 * Tron HD wallet
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
use Tatum\Cryptography\Network\NetworkFactory;
use Tatum\Cryptography\Key\Factory\PrivateKeyFactory;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface;

class Tron extends Ethereum {
    /**
     * EVM chain
     */
    const CHAIN = Chain::TRON;

    /**
     * Get address from public key interface
     *
     * @param PublicKeyInterface $publicKey Public Key interface
     * @return string Evm address
     */
    protected function _addressFromPublicKey(PublicKeyInterface $publicKey): string {
        $address = "";

        $hex = "41" . substr(parent::_addressFromPublicKey($publicKey), 2);

        $bytes = array_values(
            unpack("C*", hex2bin($hex) . hex2bin(substr(hash("sha256", hex2bin(hash("sha256", hex2bin($hex)))), 0, 8)))
        );

        $decimal = $bytes[0];
        for ($i = 1, $l = count($bytes); $i < $l; $i++) {
            $decimal = bcmul($decimal, 256);
            $decimal = bcadd($decimal, $bytes[$i]);
        }

        $alphabet = "123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz";
        $base = strlen($alphabet);
        while ($decimal >= $base) {
            $div = bcdiv($decimal, $base, 0);
            $mod = bcmod($decimal, $base);
            $address .= $alphabet[$mod];
            $decimal = $div;
        }

        if ($decimal > 0) {
            $address .= $alphabet[$decimal];
        }

        $address = strrev($address);
        foreach ($bytes as $byte) {
            if (0 === $byte) {
                $address = $alphabet[0] . $address;
                continue;
            }
            break;
        }

        return $address;
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
        $result = parent::generatePrivateKey($mnemonic, $index);

        // Remove the "0x" prefix
        $result->setKey(substr($result->getKey(), 2));

        return $result;
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
                (new PrivateKeyFactory())->fromHexUncompressed($privateKey->getKey())->getPublicKey()
            )
        );
    }
}
