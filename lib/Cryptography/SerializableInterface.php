<?php

declare(strict_types=1);

namespace Tatum\Cryptography;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Buffertools\BufferInterface;

interface SerializableInterface extends \Tatum\Cryptography\Buffertools\SerializableInterface {
    /**
     * @return BufferInterface
     */
    public function getBuffer(): BufferInterface;

    /**
     * @return string
     */
    public function getHex(): string;

    /**
     * @return string
     */
    public function getBinary(): string;

    /**
     * @return string
     */
    public function getInt();
}
