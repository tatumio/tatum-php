<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Methods\Personal;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException;
use Tatum\Cryptography\Web3\Methods\EthMethod;
use Tatum\Cryptography\Web3\Validators\AddressValidator;
use Tatum\Cryptography\Web3\Validators\StringValidator;
use Tatum\Cryptography\Web3\Validators\QuantityValidator;
use Tatum\Cryptography\Web3\Formatters\AddressFormatter;
use Tatum\Cryptography\Web3\Formatters\StringFormatter;
use Tatum\Cryptography\Web3\Formatters\NumberFormatter;

class UnlockAccount extends EthMethod {
    /**
     * validators
     *
     * @var array
     */
    protected $validators = [AddressValidator::class, StringValidator::class, QuantityValidator::class];

    /**
     * inputFormatters
     *
     * @var array
     */
    protected $inputFormatters = [AddressFormatter::class, StringFormatter::class, NumberFormatter::class];

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
    protected $defaultValues = [
        2 => 300
    ];

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
