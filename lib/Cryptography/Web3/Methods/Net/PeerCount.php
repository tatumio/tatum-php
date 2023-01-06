<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Methods\Net;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException;
use Tatum\Cryptography\Web3\Methods\EthMethod;
use Tatum\Cryptography\Web3\Formatters\BigNumberFormatter;

class PeerCount extends EthMethod {
    /**
     * validators
     *
     * @var array
     */
    protected $validators = [];

    /**
     * inputFormatters
     *
     * @var array
     */
    protected $inputFormatters = [];

    /**
     * outputFormatters
     *
     * @var array
     */
    protected $outputFormatters = [BigNumberFormatter::class];

    /**
     * defaultValues
     *
     * @var array
     */
    protected $defaultValues = [];

    /**
     * construct
     *
     * @param string $method
     * @param array $arguments
     * @return void
     */
    // public function __construct($method='', $arguments=[])
    // {
    //     parent::__construct($method, $arguments);
    // }
}
