<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Serializer\Block;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Block\BlockInterface;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange;
use Tatum\Cryptography\Buffertools\Parser;

interface BlockSerializerInterface {
    /**
     * @param Parser $parser
     * @return BlockInterface
     * @throws ParserOutOfRange
     */
    public function fromParser(Parser $parser): BlockInterface;

    /**
     * @param BufferInterface $buffer
     * @return BlockInterface
     * @throws ParserOutOfRange
     */
    public function parse(BufferInterface $buffer): BlockInterface;

    /**
     * @param BlockInterface $block
     * @return BufferInterface
     */
    public function serialize(BlockInterface $block): BufferInterface;
}
