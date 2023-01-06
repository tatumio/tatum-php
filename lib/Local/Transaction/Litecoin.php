<?php
/**
 * Litecoin Transaction
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Local\Transaction;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Network\NetworkFactory;
use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Local\Transaction\Bitcoin\Transfer;

class Litecoin extends Bitcoin {
    /**
     * Sign Litecoin transaction
     *
     * @param \Tatum\Local\Transaction\Bitcoin\Transfer $transfer Transfer object
     * @return string
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function sign(Transfer $transfer): string {
        return parent::sign($transfer);
    }

    /**
     * Network interface for Litecoin
     *
     * @return \Tatum\Cryptography\Network\NetworkInterface;
     */
    protected function _getNetwork(): NetworkInterface {
        return $this->_caller->config()->isMainNet() ? NetworkFactory::litecoin() : NetworkFactory::litecoinTestnet();
    }
}
