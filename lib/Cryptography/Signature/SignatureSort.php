<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Signature;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Buffertools\BufferInterface;

class SignatureSort implements SignatureSortInterface {
    /**
     * @var EcAdapterInterface
     */
    private $ecAdapter;

    /**
     * SignatureSort constructor.
     * @param EcAdapterInterface $ecAdapter
     */
    public function __construct(EcAdapterInterface $ecAdapter = null) {
        $this->ecAdapter = $ecAdapter ?: Bitcoin::getEcAdapter();
    }

    /**
     * @param \Tatum\Cryptography\Crypto\EcAdapter\Signature\SignatureInterface[] $signatures
     * @param \Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface[] $publicKeys
     * @param BufferInterface $messageHash
     * @return \SplObjectStorage
     */
    public function link(array $signatures, array $publicKeys, BufferInterface $messageHash): \SplObjectStorage {
        $sigCount = count($signatures);
        $storage = new \SplObjectStorage();
        foreach ($signatures as $signature) {
            foreach ($publicKeys as $key) {
                if ($key->verify($messageHash, $signature)) {
                    $storage->attach($key, $signature);
                    if (count($storage) === $sigCount) {
                        break 2;
                    }

                    break;
                }
            }
        }

        return $storage;
    }
}
