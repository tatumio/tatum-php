<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Chain;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Serializable;
use Tatum\Cryptography\Serializer\Chain\BlockLocatorSerializer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class BlockLocator extends Serializable {
    /**
     * @var BufferInterface[]
     */
    private $hashes;

    /**
     * @var BufferInterface
     */
    private $hashStop;

    /**
     * @param BufferInterface[] $hashes
     * @param BufferInterface $hashStop
     */
    public function __construct(array $hashes, BufferInterface $hashStop) {
        foreach ($hashes as $hash) {
            $this->addHash($hash);
        }

        $this->hashStop = $hashStop;
    }

    /**
     * @param BufferInterface $hash
     */
    private function addHash(BufferInterface $hash) {
        $this->hashes[] = $hash;
    }

    /**
     * @return BufferInterface[]
     */
    public function getHashes(): array {
        return $this->hashes;
    }

    /**
     * @return BufferInterface
     */
    public function getHashStop(): BufferInterface {
        return $this->hashStop;
    }

    /**
     * @return BufferInterface
     */
    public function getBuffer(): BufferInterface {
        return (new BlockLocatorSerializer())->serialize($this);
    }
}
