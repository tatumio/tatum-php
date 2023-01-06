<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Transaction;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\SerializableInterface;
use Tatum\Cryptography\Buffertools\BufferInterface;

interface OutPointInterface extends SerializableInterface {
    /**
     * @return BufferInterface
     */
    public function getTxId(): BufferInterface;

    /**
     * @return int
     */
    public function getVout(): int;

    /**
     * @param OutPointInterface $outPoint
     * @return bool
     */
    public function equals(OutPointInterface $outPoint): bool;
}
