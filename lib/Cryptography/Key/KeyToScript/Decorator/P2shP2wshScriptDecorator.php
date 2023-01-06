<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Key\KeyToScript\Decorator;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Key\KeyInterface;
use Tatum\Cryptography\Key\KeyToScript\ScriptAndSignData;
use Tatum\Cryptography\Script\P2shScript;
use Tatum\Cryptography\Script\ScriptType;
use Tatum\Cryptography\Script\WitnessScript;
use Tatum\Cryptography\Transaction\Factory\SignData;

class P2shP2wshScriptDecorator extends ScriptHashDecorator {
    /**
     * @var string[]
     */
    protected $allowedScriptTypes = [ScriptType::MULTISIG, ScriptType::P2PKH, ScriptType::P2PK];

    /**
     * @var string
     */
    protected $decorateType = "scripthash|witness_v0_scripthash";

    /**
     * @param KeyInterface ...$keys
     * @return ScriptAndSignData
     * @throws \Tatum\Cryptography\Exceptions\P2shScriptException
     * @throws \Tatum\Cryptography\Exceptions\WitnessScriptException
     */
    public function convertKey(KeyInterface ...$keys): ScriptAndSignData {
        $witnessScript = new WitnessScript($this->scriptDataFactory->convertKey(...$keys)->getScriptPubKey());
        $redeemScript = new P2shScript($witnessScript);
        return new ScriptAndSignData(
            $redeemScript->getOutputScript(),
            (new SignData())->p2sh($redeemScript)->p2wsh($witnessScript)
        );
    }
}
