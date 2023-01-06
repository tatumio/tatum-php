<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\Random;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Exceptions\RandomBytesFailure;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class Random implements RbgInterface {
    /**
     * Return $length bytes. Throws an exception if
     * @param int $length
     * @return BufferInterface
     * @throws RandomBytesFailure
     */
    public function bytes(int $length = 32): BufferInterface {
        return new Buffer(random_bytes($length), $length);
    }
}
