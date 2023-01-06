<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Block;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Bloom\BloomFilter;
use Tatum\Cryptography\SerializableInterface;
use Tatum\Cryptography\Transaction\TransactionInterface;
use Tatum\Cryptography\Buffertools\BufferInterface;

interface BlockInterface extends SerializableInterface {
    const MAX_BLOCK_SIZE = 1000000;

    /**
     * Get the header of this block.
     *
     * @return BlockHeaderInterface
     */
    public function getHeader(): BlockHeaderInterface;

    /**
     * Calculate the merkle root of the transactions in the block.
     *
     * @return BufferInterface
     */
    public function getMerkleRoot(): BufferInterface;

    /**
     * Return the block's transactions.
     *
     * @return TransactionInterface[]
     */
    public function getTransactions(): array;

    /**
     * @param int $i
     * @return TransactionInterface
     */
    public function getTransaction(int $i): TransactionInterface;

    /**
     * @param BloomFilter $filter
     * @return FilteredBlock
     */
    public function filter(BloomFilter $filter): FilteredBlock;
}
