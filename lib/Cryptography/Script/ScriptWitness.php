<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Script;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Collection\StaticBufferCollection;
use Tatum\Cryptography\Serializer\Script\ScriptWitnessSerializer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class ScriptWitness extends StaticBufferCollection implements ScriptWitnessInterface {
    /**
     * @param ScriptWitnessInterface $witness
     * @return bool
     */
    public function equals(ScriptWitnessInterface $witness): bool {
        $nStack = count($this);
        if ($nStack !== count($witness)) {
            return false;
        }

        for ($i = 0; $i < $nStack; $i++) {
            if (false === $this->offsetGet($i)->equals($witness->offsetGet($i))) {
                return false;
            }
        }

        return true;
    }

    /**
     * @return \Tatum\Cryptography\Buffertools\BufferInterface
     */
    public function getBuffer(): BufferInterface {
        return (new ScriptWitnessSerializer())->serialize($this);
    }
}
