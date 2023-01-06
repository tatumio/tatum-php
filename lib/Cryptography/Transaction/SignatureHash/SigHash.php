<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Transaction\SignatureHash;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\Transaction\TransactionInterface;
use Tatum\Cryptography\Buffertools\BufferInterface;

abstract class SigHash implements SigHashInterface {
    const V0 = 0;
    const V1 = 1;

    /**
     * @var TransactionInterface
     */
    protected $tx;

    /**
     * SigHash constructor.
     * @param TransactionInterface $transaction
     */
    public function __construct(TransactionInterface $transaction) {
        $this->tx = $transaction;
    }

    /**
     * @param ScriptInterface $txOutScript
     * @param int $inputToSign
     * @param int $sighashType
     * @return BufferInterface
     */
    abstract public function calculate(
        ScriptInterface $txOutScript,
        int $inputToSign,
        int $sighashType = self::ALL
    ): BufferInterface;
}
