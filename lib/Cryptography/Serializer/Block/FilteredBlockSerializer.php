<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Serializer\Block;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Block\FilteredBlock;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Buffertools;
use Tatum\Cryptography\Buffertools\Parser;

class FilteredBlockSerializer {
    /**
     * @var BlockHeaderSerializer
     */
    private $headerSerializer;

    /**
     * @var PartialMerkleTreeSerializer
     */
    private $treeSerializer;

    /**
     * @param BlockHeaderSerializer $header
     * @param PartialMerkleTreeSerializer $tree
     */
    public function __construct(BlockHeaderSerializer $header, PartialMerkleTreeSerializer $tree) {
        $this->headerSerializer = $header;
        $this->treeSerializer = $tree;
    }

    /**
     * @param Parser $parser
     * @return FilteredBlock
     */
    public function fromParser(Parser $parser): FilteredBlock {
        return new FilteredBlock(
            $this->headerSerializer->fromParser($parser),
            $this->treeSerializer->fromParser($parser)
        );
    }

    /**
     * @param BufferInterface $data
     * @return FilteredBlock
     */
    public function parse(BufferInterface $data): FilteredBlock {
        return $this->fromParser(new Parser($data));
    }

    /**
     * @param FilteredBlock $merkleBlock
     * @return BufferInterface
     */
    public function serialize(FilteredBlock $merkleBlock): BufferInterface {
        return Buffertools::concat(
            $this->headerSerializer->serialize($merkleBlock->getHeader()),
            $this->treeSerializer->serialize($merkleBlock->getPartialTree())
        );
    }
}
