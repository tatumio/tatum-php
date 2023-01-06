<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Serializer\Bloom;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Bloom\BloomFilter;
use Tatum\Cryptography\Serializer\Types;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Parser;

class BloomFilterSerializer {
    /**
     * @var \Tatum\Cryptography\Buffertools\Types\Uint32
     */
    private $uint32le;

    /**
     * @var \Tatum\Cryptography\Buffertools\Types\Uint8
     */
    private $uint8le;

    /**
     * @var \Tatum\Cryptography\Buffertools\Types\VarInt
     */
    private $varint;

    public function __construct() {
        $this->uint32le = Types::uint32le();
        $this->uint8le = Types::uint8le();
        $this->varint = Types::varint();
    }

    /**
     * @param BloomFilter $filter
     * @return BufferInterface
     */
    public function serialize(BloomFilter $filter): BufferInterface {
        $parser = new Parser();
        $parser->appendBinary($this->varint->write(count($filter->getData())));
        foreach ($filter->getData() as $i) {
            $parser->appendBinary(pack("c", $i));
        }

        $parser->appendBinary($this->uint32le->write($filter->getNumHashFuncs()));
        $parser->appendBinary($this->uint32le->write($filter->getTweak()));
        $parser->appendBinary($this->uint8le->write($filter->getFlags()));

        return $parser->getBuffer();
    }

    /**
     * @param Parser $parser
     * @return BloomFilter
     */
    public function fromParser(Parser $parser): BloomFilter {
        $varint = (int) $this->varint->read($parser);
        $vData = [];
        for ($i = 0; $i < $varint; $i++) {
            $vData[] = (int) $this->uint8le->read($parser);
        }

        $nHashFuncs = (int) $this->uint32le->read($parser);
        $nTweak = (int) $this->uint32le->read($parser);
        $flags = (int) $this->uint8le->read($parser);

        return new BloomFilter(Bitcoin::getMath(), $vData, $nHashFuncs, $nTweak, $flags);
    }

    /**
     * @param BufferInterface $data
     * @return BloomFilter
     */
    public function parse(BufferInterface $data): BloomFilter {
        return $this->fromParser(new Parser($data));
    }
}
