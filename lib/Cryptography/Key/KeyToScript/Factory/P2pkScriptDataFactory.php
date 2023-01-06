<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Key\KeyToScript\Factory;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface;
use Tatum\Cryptography\Key\KeyToScript\ScriptAndSignData;
use Tatum\Cryptography\Script\ScriptFactory;
use Tatum\Cryptography\Script\ScriptType;
use Tatum\Cryptography\Transaction\Factory\SignData;

class P2pkScriptDataFactory extends KeyToScriptDataFactory {
    /**
     * @return string
     */
    public function getScriptType(): string {
        return ScriptType::P2PK;
    }

    /**
     * @param PublicKeyInterface ...$keys
     * @return ScriptAndSignData
     */
    protected function convertKeyToScriptData(PublicKeyInterface ...$keys): ScriptAndSignData {
        if (count($keys) !== 1) {
            throw new \InvalidArgumentException("Invalid number of keys");
        }
        return new ScriptAndSignData(ScriptFactory::scriptPubKey()->p2pk($keys[0]), new SignData());
    }
}
