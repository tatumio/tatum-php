<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Methods;

interface IMethod {
    /**
     * transform
     *
     * @param array &$data
     * @param array $rules
     * @return array
     */
    public function transform($data, $rules);
}
