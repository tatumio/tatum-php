<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Script\Interpreter;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\Transaction\SignatureHash\Hasher;
use Tatum\Cryptography\Transaction\SignatureHash\SigHash;
use Tatum\Cryptography\Transaction\SignatureHash\V1Hasher;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class Checker extends CheckerBase {
    /**
     * @var array
     */
    protected $sigHashCache = [];

    /**
     * @param ScriptInterface $script
     * @param int $sigHashType
     * @param int $sigVersion
     * @return BufferInterface
     */
    public function getSigHash(ScriptInterface $script, int $sigHashType, int $sigVersion): BufferInterface {
        $cacheCheck = $sigVersion . $sigHashType . $script->getBuffer()->getBinary();
        if (!isset($this->sigHashCache[$cacheCheck])) {
            if (SigHash::V1 === $sigVersion) {
                $hasher = new V1Hasher($this->transaction, $this->amount);
            } else {
                $hasher = new Hasher($this->transaction);
            }

            $hash = $hasher->calculate($script, $this->nInput, $sigHashType);
            $this->sigHashCache[$cacheCheck] = $hash->getBinary();
        } else {
            $hash = new Buffer($this->sigHashCache[$cacheCheck], 32);
        }

        return $hash;
    }
}
