<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Transaction;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Exceptions\InvalidHashLengthException;
use Tatum\Cryptography\Serializable;
use Tatum\Cryptography\Serializer\Transaction\OutPointSerializer;
use Tatum\Cryptography\Util\IntRange;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class OutPoint extends Serializable implements OutPointInterface {
    /**
     * @var BufferInterface
     */
    private $hashPrevOutput;

    /**
     * @var int
     */
    private $nPrevOutput;

    /**
     * OutPoint constructor.
     * @param BufferInterface $hashPrevOutput
     * @param int $nPrevOutput
     * @throws InvalidHashLengthException
     */
    public function __construct(BufferInterface $hashPrevOutput, int $nPrevOutput) {
        if ($hashPrevOutput->getSize() !== 32) {
            throw new InvalidHashLengthException("OutPoint: hashPrevOut must be a 32-byte Buffer");
        }

        if ($nPrevOutput < 0 || $nPrevOutput > IntRange::U32_MAX) {
            throw new \InvalidArgumentException("nPrevOut must be between 0 and 0xffffffff");
        }

        $this->hashPrevOutput = $hashPrevOutput;
        $this->nPrevOutput = $nPrevOutput;
    }

    /**
     * @return OutPointInterface
     */
    public static function makeCoinbase(): OutPointInterface {
        return new OutPoint(new Buffer("", 32), 0xffffffff);
    }

    /**
     * @return BufferInterface
     */
    public function getTxId(): BufferInterface {
        return $this->hashPrevOutput;
    }

    /**
     * @return int
     */
    public function getVout(): int {
        return $this->nPrevOutput;
    }

    /**
     * @param OutPointInterface $outPoint
     * @return bool
     */
    public function equals(OutPointInterface $outPoint): bool {
        $txid = strcmp($this->getTxId()->getBinary(), $outPoint->getTxId()->getBinary());
        if ($txid !== 0) {
            return false;
        }

        return gmp_cmp($this->getVout(), $outPoint->getVout()) === 0;
    }

    /**
     * @return BufferInterface
     */
    public function getBuffer(): BufferInterface {
        return (new OutPointSerializer())->serialize($this);
    }
}
