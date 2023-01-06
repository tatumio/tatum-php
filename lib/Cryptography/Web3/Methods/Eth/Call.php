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
use Tatum\Cryptography\Web3\Validators\TagValidator;
use Tatum\Cryptography\Web3\Validators\QuantityValidator;
use Tatum\Cryptography\Web3\Validators\CallValidator;
use Tatum\Cryptography\Web3\Formatters\TransactionFormatter;
use Tatum\Cryptography\Web3\Formatters\OptionalQuantityFormatter;

class Call extends EthMethod {
    /**
     * validators
     *
     * @var array
     */
    protected $validators = [CallValidator::class, [TagValidator::class, QuantityValidator::class]];

    /**
     * inputFormatters
     *
     * @var array
     */
    protected $inputFormatters = [TransactionFormatter::class, OptionalQuantityFormatter::class];

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
        1 => "latest"
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
