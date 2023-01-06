<?php
/**
 * Xdc (XinFin) HD Wallet
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Local\Wallet;
!defined("TATUM-SDK") && exit();

use Tatum\Local\Chain;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface;

class Xdc extends Ethereum {
    /**
     * EVM chain
     */
    const CHAIN = Chain::XDC;

    /**
     * Get address from public key interface
     *
     * @param PublicKeyInterface $publicKey Public Key interface
     * @return string Evm address
     */
    protected function _addressFromPublicKey(PublicKeyInterface $publicKey): string {
        return "xdc" . substr(parent::_addressFromPublicKey($publicKey), 2);
    }
}
