<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Methods\Eth;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException;
use Tatum\Cryptography\Web3\Methods\EthMethod;
use Tatum\Cryptography\Web3\Validators\AddressValidator;
use Tatum\Cryptography\Web3\Validators\HexValidator;
use Tatum\Cryptography\Web3\Formatters\AddressFormatter;
use Tatum\Cryptography\Web3\Formatters\HexFormatter;

class Sign extends EthMethod {
    /**
     * validators
     *
     * @var array
     */
    protected $validators = [AddressValidator::class, HexValidator::class];

    /**
     * inputFormatters
     *
     * @var array
     */
    protected $inputFormatters = [AddressFormatter::class, HexFormatter::class];

    /**
     * outputFormatters
     *
     * @var array
     */
    protected $outputFormatters = [];

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
