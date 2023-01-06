<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Utxo;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Transaction\OutPointInterface;
use Tatum\Cryptography\Transaction\TransactionOutputInterface;

interface UtxoInterface {
    /**
     * @return OutPointInterface
     */
    public function getOutPoint(): OutPointInterface;

    /**
     * @return TransactionOutputInterface
     */
    public function getOutput(): TransactionOutputInterface;
}
