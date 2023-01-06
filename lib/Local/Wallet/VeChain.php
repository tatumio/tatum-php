<?php
/**
 * VeChain HD Wallet
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Local\Wallet;
!defined("TATUM-SDK") && exit();

use Tatum\Local\Chain;

class VeChain extends Ethereum {
    /**
     * EVM chain
     */
    const CHAIN = Chain::VET;
}
