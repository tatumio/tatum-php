<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Serializer\Block;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Block\Block;
use Tatum\Cryptography\Block\BlockInterface;
use Tatum\Cryptography\Math\Math;
use Tatum\Cryptography\Serializer\Transaction\TransactionSerializerInterface;
use Tatum\Cryptography\Serializer\Types;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange;
use Tatum\Cryptography\Buffertools\Parser;

class BlockSerializer implements BlockSerializerInterface {
    /**
     * @var Math
     */
    private $math;

    /**
     * @var BlockHeaderSerializer
     */
    private $headerSerializer;

    /**
     * @var \Tatum\Cryptography\Buffertools\Types\VarInt
     */
    private $varint;

    /**
     * @var TransactionSerializerInterface
     */
    private $txSerializer;

    /**
     * @param Math $math
     * @param BlockHeaderSerializer $headerSerializer
     * @param TransactionSerializerInterface $txSerializer
     */
    public function __construct(
        Math $math,
        BlockHeaderSerializer $headerSerializer,
        TransactionSerializerInterface $txSerializer
    ) {
        $this->math = $math;
        $this->headerSerializer = $headerSerializer;
        $this->varint = Types::varint();
        $this->txSerializer = $txSerializer;
    }

    /**
     * @param Parser $parser
     * @return BlockInterface
     * @throws ParserOutOfRange
     */
    public function fromParser(Parser $parser): BlockInterface {
        try {
            $header = $this->headerSerializer->fromParser($parser);
            $nTx = $this->varint->read($parser);
            $vTx = [];
            for ($i = 0; $i < $nTx; $i++) {
                $vTx[] = $this->txSerializer->fromParser($parser);
            }
            return new Block($this->math, $header, ...$vTx);
        } catch (ParserOutOfRange $e) {
            throw new ParserOutOfRange("Failed to extract full block header from parser");
        }
    }

    /**
     * @param BufferInterface $buffer
     * @return BlockInterface
     * @throws ParserOutOfRange
     */
    public function parse(BufferInterface $buffer): BlockInterface {
        return $this->fromParser(new Parser($buffer));
    }

    /**
     * @param BlockInterface $block
     * @return BufferInterface
     */
    public function serialize(BlockInterface $block): BufferInterface {
        $parser = new Parser($this->headerSerializer->serialize($block->getHeader()));
        $parser->appendBinary($this->varint->write(count($block->getTransactions())));
        foreach ($block->getTransactions() as $tx) {
            $parser->appendBuffer($this->txSerializer->serialize($tx));
        }

        return $parser->getBuffer();
    }
}
