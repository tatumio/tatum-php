<?php

namespace Tatum\Cryptography\Script\Consensus;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Script\Interpreter\Checker;
use Tatum\Cryptography\Script\Interpreter\Interpreter;
use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\Transaction\TransactionInterface;

class NativeConsensus implements ConsensusInterface {
    /**
     * @var EcAdapterInterface
     */
    private $adapter;

    /**
     * NativeConsensus constructor.
     * @param EcAdapterInterface $ecAdapter
     */
    public function __construct(EcAdapterInterface $ecAdapter = null) {
        $this->adapter = $ecAdapter ?: Bitcoin::getEcAdapter();
    }

    /**
     * @param TransactionInterface $tx
     * @param ScriptInterface $scriptPubKey
     * @param int $nInputToSign
     * @param int $flags
     * @param int $amount
     * @return bool
     */
    public function verify(
        TransactionInterface $tx,
        ScriptInterface $scriptPubKey,
        int $flags,
        int $nInputToSign,
        int $amount
    ): bool {
        $inputs = $tx->getInputs();
        $interpreter = new Interpreter($this->adapter);
        return $interpreter->verify(
            $inputs[$nInputToSign]->getScript(),
            $scriptPubKey,
            $flags,
            new Checker($this->adapter, $tx, $nInputToSign, $amount),
            isset($tx->getWitnesses()[$nInputToSign]) ? $tx->getWitness($nInputToSign) : null
        );
    }
}
