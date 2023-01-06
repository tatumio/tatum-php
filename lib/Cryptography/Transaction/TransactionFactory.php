<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Transaction;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Serializer\Transaction\TransactionSerializer;
use Tatum\Cryptography\Transaction\Factory\TxBuilder;
use Tatum\Cryptography\Transaction\Mutator\TxMutator;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class TransactionFactory {
    /**
     * @return TxBuilder
     */
    public static function build(): TxBuilder {
        return new TxBuilder();
    }

    /**
     * @param TransactionInterface $transaction
     * @return TxMutator
     */
    public static function mutate(TransactionInterface $transaction): TxMutator {
        return new TxMutator($transaction);
    }

    /**
     * @param string $hex
     * @return TransactionInterface
     * @throws \Exception
     */
    public static function fromHex(string $hex): TransactionInterface {
        return self::fromBuffer(Buffer::hex($hex));
    }

    /**
     * @param BufferInterface $buffer
     * @return TransactionInterface
     */
    public static function fromBuffer(BufferInterface $buffer): TransactionInterface {
        return (new TransactionSerializer())->parse($buffer);
    }
}
