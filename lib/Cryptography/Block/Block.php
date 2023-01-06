<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Block;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Bloom\BloomFilter;
use Tatum\Cryptography\Math\Math;
use Tatum\Cryptography\Serializable;
use Tatum\Cryptography\Serializer\Block\BlockHeaderSerializer;
use Tatum\Cryptography\Serializer\Block\BlockSerializer;
use Tatum\Cryptography\Serializer\Transaction\TransactionSerializer;
use Tatum\Cryptography\Transaction\TransactionInterface;
use Tatum\Cryptography\Buffertools\BufferInterface;

class Block extends Serializable implements BlockInterface {
    /**
     * @var Math
     */
    private $math;

    /**
     * @var BlockHeaderInterface
     */
    private $header;

    /**
     * @var TransactionInterface[]
     */
    private $transactions;

    /**
     * @var MerkleRoot
     */
    private $merkleRoot;

    /**
     * Block constructor.
     * @param Math $math
     * @param BlockHeaderInterface $header
     * @param TransactionInterface[] ...$transactions
     */
    public function __construct(Math $math, BlockHeaderInterface $header, TransactionInterface ...$transactions) {
        $this->math = $math;
        $this->header = $header;
        $this->transactions = $transactions;
    }

    /**
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Block\BlockInterface::getHeader()
     */
    public function getHeader(): BlockHeaderInterface {
        return $this->header;
    }

    /**
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Block\BlockInterface::getMerkleRoot()
     * @throws \Tatum\Cryptography\Exceptions\MerkleTreeEmpty
     */
    public function getMerkleRoot(): BufferInterface {
        if (null === $this->merkleRoot) {
            $this->merkleRoot = new MerkleRoot($this->math, $this->getTransactions());
        }

        return $this->merkleRoot->calculateHash();
    }

    /**
     * @see \Tatum\Cryptography\Block\BlockInterface::getTransactions()
     * @return TransactionInterface[]
     */
    public function getTransactions(): array {
        return $this->transactions;
    }

    /**
     * @see \Tatum\Cryptography\Block\BlockInterface::getTransaction()
     * @param int $i
     * @return TransactionInterface
     */
    public function getTransaction(int $i): TransactionInterface {
        if (!array_key_exists($i, $this->transactions)) {
            throw new \InvalidArgumentException("No transaction in the block with this index");
        }

        return $this->transactions[$i];
    }

    /**
     * @param BloomFilter $filter
     * @return FilteredBlock
     */
    public function filter(BloomFilter $filter): FilteredBlock {
        $vMatch = [];
        $vHashes = [];
        foreach ($this->getTransactions() as $tx) {
            $vMatch[] = $filter->isRelevantAndUpdate($tx);
            $vHashes[] = $tx->getTxHash();
        }

        return new FilteredBlock(
            $this->getHeader(),
            PartialMerkleTree::create(count($this->getTransactions()), $vHashes, $vMatch)
        );
    }

    /**
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Buffertools\SerializableInterface::getBuffer()
     */
    public function getBuffer(): BufferInterface {
        return (new BlockSerializer($this->math, new BlockHeaderSerializer(), new TransactionSerializer()))->serialize(
            $this
        );
    }
}
