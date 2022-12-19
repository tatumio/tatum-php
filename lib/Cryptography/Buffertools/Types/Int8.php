<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Buffertools\Types;

class Int8 extends AbstractSignedInt {
    /**
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Buffertools\Types\TypeInterface::getBitSize()
     */
    public function getBitSize(): int {
        return 8;
    }
}
