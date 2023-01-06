<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Buffertools\Types;
!defined("TATUM-SDK") && exit();

interface UintInterface extends TypeInterface {
    /**
     * @return int
     */
    public function getBitSize(): int;
}
