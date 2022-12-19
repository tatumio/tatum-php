<?php
/**
 * Harmony.ONE HD Wallet
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Local\Wallet;

use Tatum\Local\Chain;

class Harmony extends Ethereum {
    /**
     * EVM chain
     */
    const CHAIN = Chain::HARMONY;
}
