<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Buffertools;
!defined("TATUM-SDK") && exit();

interface SerializableInterface {
    /**
     * @return Buffer
     */
    public function getBuffer();
}
