<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Transaction\Factory;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\Script\ScriptWitnessInterface;

class SigValues {
    /**
     * @var ScriptInterface
     */
    private $scriptSig;

    /**
     * @var ScriptWitnessInterface
     */
    private $scriptWitness;

    /**
     * SigValues constructor.
     * @param ScriptInterface $scriptSig
     * @param ScriptWitnessInterface $scriptWitness
     */
    public function __construct(ScriptInterface $scriptSig, ScriptWitnessInterface $scriptWitness) {
        $this->scriptSig = $scriptSig;
        $this->scriptWitness = $scriptWitness;
    }

    /**
     * @return ScriptInterface
     */
    public function getScriptSig(): ScriptInterface {
        return $this->scriptSig;
    }

    /**
     * @return ScriptWitnessInterface
     */
    public function getScriptWitness(): ScriptWitnessInterface {
        return $this->scriptWitness;
    }
}
