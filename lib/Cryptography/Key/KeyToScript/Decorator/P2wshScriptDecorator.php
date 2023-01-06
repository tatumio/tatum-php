<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Key\KeyToScript\Decorator;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Key\KeyInterface;
use Tatum\Cryptography\Key\KeyToScript\ScriptAndSignData;
use Tatum\Cryptography\Script\ScriptType;
use Tatum\Cryptography\Script\WitnessScript;
use Tatum\Cryptography\Transaction\Factory\SignData;

class P2wshScriptDecorator extends ScriptHashDecorator {
    /**
     * @var array
     */
    protected $allowedScriptTypes = [ScriptType::MULTISIG, ScriptType::P2PKH, ScriptType::P2PK];

    /**
     * @var string
     */
    protected $decorateType = ScriptType::P2WSH;

    /**
     * @param KeyInterface ...$keys
     * @return ScriptAndSignData
     * @throws \Tatum\Cryptography\Exceptions\WitnessScriptException
     */
    public function convertKey(KeyInterface ...$keys): ScriptAndSignData {
        $witnessScript = new WitnessScript($this->scriptDataFactory->convertKey(...$keys)->getScriptPubKey());
        return new ScriptAndSignData($witnessScript->getOutputScript(), (new SignData())->p2wsh($witnessScript));
    }
}
