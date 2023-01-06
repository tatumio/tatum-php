<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Block;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Serializer\Block\BlockHeaderSerializer;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class BlockHeaderFactory {
    /**
     * @param string $string
     * @return BlockHeaderInterface
     * @throws \Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange
     * @throws \Exception
     */
    public static function fromHex(string $string): BlockHeaderInterface {
        return self::fromBuffer(Buffer::hex($string));
    }

    /**
     * @param BufferInterface $buffer
     * @return BlockHeaderInterface
     * @throws \Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange
     */
    public static function fromBuffer(BufferInterface $buffer): BlockHeaderInterface {
        return (new BlockHeaderSerializer())->parse($buffer);
    }
}
