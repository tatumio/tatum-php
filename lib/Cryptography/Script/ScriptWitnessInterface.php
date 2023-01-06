<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Script;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Collection\CollectionInterface;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\SerializableInterface;

interface ScriptWitnessInterface extends CollectionInterface, SerializableInterface {
    /**
     * @return BufferInterface[]
     */
    public function all(): array;

    /**
     * @param ScriptWitnessInterface $witness
     * @return bool
     */
    public function equals(ScriptWitnessInterface $witness): bool;
}
