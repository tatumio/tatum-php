<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Key\KeyToScript;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Key\KeyInterface;

abstract class ScriptDataFactory {
    /**
     * @param KeyInterface ...$keys
     * @return ScriptAndSignData
     */
    abstract public function convertKey(KeyInterface ...$keys): ScriptAndSignData;

    /**
     * @return string
     */
    abstract public function getScriptType(): string;
}
