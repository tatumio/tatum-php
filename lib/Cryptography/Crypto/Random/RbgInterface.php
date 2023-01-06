<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\Random;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Buffertools\BufferInterface;

interface RbgInterface {
    /**
     * Return $numBytes bytes deterministically derived from a seed
     *
     * @param int $numNumBytes
     * @return BufferInterface
     */
    public function bytes(int $numNumBytes): BufferInterface;
}
