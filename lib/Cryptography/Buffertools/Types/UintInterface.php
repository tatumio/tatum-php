<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Buffertools\Types;

interface UintInterface extends TypeInterface {
    /**
     * @return int
     */
    public function getBitSize(): int;
}
