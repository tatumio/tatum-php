<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Buffertools\Types;

class Int32 extends AbstractSignedInt {
    /**
     * @return int
     */
    public function getBitSize(): int {
        return 32;
    }
}
