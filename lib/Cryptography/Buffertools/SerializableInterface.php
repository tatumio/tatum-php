<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Buffertools;

interface SerializableInterface {
    /**
     * @return Buffer
     */
    public function getBuffer();
}
