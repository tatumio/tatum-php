<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\Random;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PrivateKeyInterface;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Ecc\Crypto\Key\PrivateKey as MdPrivateKey;
use Tatum\Cryptography\Ecc\Random\RandomGeneratorFactory;
use Tatum\Cryptography\Ecc\Random\RandomNumberGeneratorInterface;

class Rfc6979 implements RbgInterface {
    /**
     * @var EcAdapterInterface
     */
    private $ecAdapter;

    /**
     * @var RandomNumberGeneratorInterface
     */
    private $hmac;

    /**
     * @param EcAdapterInterface $ecAdapter
     * @param PrivateKeyInterface $privateKey
     * @param BufferInterface $messageHash
     * @param string $algo
     */
    public function __construct(
        EcAdapterInterface $ecAdapter,
        PrivateKeyInterface $privateKey,
        BufferInterface $messageHash,
        string $algo = "sha256"
    ) {
        $mdPk = new MdPrivateKey(
            $ecAdapter->getMath(),
            $ecAdapter->getGenerator(),
            gmp_init($privateKey->getInt(), 10)
        );
        $this->ecAdapter = $ecAdapter;
        $this->hmac = RandomGeneratorFactory::getHmacRandomGenerator(
            $mdPk,
            gmp_init($messageHash->getInt(), 10),
            $algo
        );
    }

    /**
     * @param int $bytes
     * @return BufferInterface
     */
    public function bytes(int $bytes): BufferInterface {
        $integer = $this->hmac->generate($this->ecAdapter->getOrder());
        return Buffer::int(gmp_strval($integer, 10), $bytes);
    }
}
