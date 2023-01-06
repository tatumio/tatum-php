<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Block;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Math\Math;
use Tatum\Cryptography\Script\Opcodes;
use Tatum\Cryptography\Serializer\Block\BlockHeaderSerializer;
use Tatum\Cryptography\Serializer\Block\BlockSerializer;
use Tatum\Cryptography\Serializer\Script\ScriptWitnessSerializer;
use Tatum\Cryptography\Serializer\Transaction\OutPointSerializer;
use Tatum\Cryptography\Serializer\Transaction\TransactionInputSerializer;
use Tatum\Cryptography\Serializer\Transaction\TransactionOutputSerializer;
use Tatum\Cryptography\Serializer\Transaction\TransactionSerializer;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class BlockFactory {
    /**
     * @param string $string
     * @param Math|null $math
     * @return BlockInterface
     * @throws \Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange
     * @throws \Exception
     */
    public static function fromHex(string $string, Math $math = null): BlockInterface {
        return self::fromBuffer(Buffer::hex($string), $math);
    }

    /**
     * @param BufferInterface $buffer
     * @param Math|null $math
     * @return BlockInterface
     * @throws \Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange
     */
    public static function fromBuffer(BufferInterface $buffer, Math $math = null): BlockInterface {
        $opcodes = new Opcodes();
        $serializer = new BlockSerializer(
            $math ?: Bitcoin::getMath(),
            new BlockHeaderSerializer(),
            new TransactionSerializer(
                new TransactionInputSerializer(new OutPointSerializer(), $opcodes),
                new TransactionOutputSerializer($opcodes),
                new ScriptWitnessSerializer()
            )
        );

        return $serializer->parse($buffer);
    }
}
