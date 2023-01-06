<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Transaction;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\SerializableInterface;

interface TransactionOutputInterface extends SerializableInterface {
    /**
     * Get the value of this output
     *
     * @return int
     */
    public function getValue(): int;

    /**
     * Get the script for this output
     *
     * @return ScriptInterface
     */
    public function getScript(): ScriptInterface;

    /**
     * @param TransactionOutputInterface $output
     * @return bool
     */
    public function equals(TransactionOutputInterface $output): bool;
}
