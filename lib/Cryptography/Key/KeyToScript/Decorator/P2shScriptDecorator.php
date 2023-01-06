<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Key\KeyToScript\Decorator;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Key\KeyInterface;
use Tatum\Cryptography\Key\KeyToScript\ScriptAndSignData;
use Tatum\Cryptography\Script\P2shScript;
use Tatum\Cryptography\Script\ScriptType;
use Tatum\Cryptography\Transaction\Factory\SignData;

class P2shScriptDecorator extends ScriptHashDecorator {
    /**
     * @var array
     */
    protected $allowedScriptTypes = [ScriptType::MULTISIG, ScriptType::P2PKH, ScriptType::P2PK, ScriptType::P2WKH];

    /**
     * @var string
     */
    protected $decorateType = ScriptType::P2SH;

    /**
     * @param KeyInterface ...$keys
     * @return ScriptAndSignData
     * @throws \Tatum\Cryptography\Exceptions\P2shScriptException
     */
    public function convertKey(KeyInterface ...$keys): ScriptAndSignData {
        $redeemScript = new P2shScript($this->scriptDataFactory->convertKey(...$keys)->getScriptPubKey());
        return new ScriptAndSignData($redeemScript->getOutputScript(), (new SignData())->p2sh($redeemScript));
    }
}
