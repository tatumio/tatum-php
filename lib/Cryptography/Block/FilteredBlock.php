<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Block;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Serializable;
use Tatum\Cryptography\Serializer\Block\BlockHeaderSerializer;
use Tatum\Cryptography\Serializer\Block\FilteredBlockSerializer;
use Tatum\Cryptography\Serializer\Block\PartialMerkleTreeSerializer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class FilteredBlock extends Serializable {
    /**
     * @var BlockHeaderInterface
     */
    private $header;

    /**
     * @var PartialMerkleTree
     */
    private $partialTree;

    /**
     * @param BlockHeaderInterface $header
     * @param PartialMerkleTree $merkleTree
     */
    public function __construct(BlockHeaderInterface $header, PartialMerkleTree $merkleTree) {
        $this->header = $header;
        $this->partialTree = $merkleTree;
    }

    /**
     * @return BlockHeaderInterface
     */
    public function getHeader(): BlockHeaderInterface {
        return $this->header;
    }

    /**
     * @return PartialMerkleTree
     */
    public function getPartialTree(): PartialMerkleTree {
        return $this->partialTree;
    }

    /**
     * @return BufferInterface
     */
    public function getBuffer(): BufferInterface {
        return (new FilteredBlockSerializer(new BlockHeaderSerializer(), new PartialMerkleTreeSerializer()))->serialize(
            $this
        );
    }
}
