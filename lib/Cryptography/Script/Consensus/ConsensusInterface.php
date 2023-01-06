<?php

namespace Tatum\Cryptography\Script\Consensus;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\Transaction\TransactionInterface;

interface ConsensusInterface {
    /**
     * @param TransactionInterface $tx
     * @param ScriptInterface $scriptPubKey
     * @param integer $nInputToSign
     * @param int $flags
     * @param integer $amount
     * @return bool
     */
    public function verify(
        TransactionInterface $tx,
        ScriptInterface $scriptPubKey,
        int $flags,
        int $nInputToSign,
        int $amount
    ): bool;
}
