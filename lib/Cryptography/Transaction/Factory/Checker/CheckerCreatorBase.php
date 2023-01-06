<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Transaction\Factory\Checker;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PublicKeySerializerInterface;
use Tatum\Cryptography\Script\Interpreter\CheckerBase;
use Tatum\Cryptography\Serializer\Signature\TransactionSignatureSerializer;
use Tatum\Cryptography\Transaction\TransactionInterface;
use Tatum\Cryptography\Transaction\TransactionOutputInterface;

abstract class CheckerCreatorBase {
    /**
     * @var EcAdapterInterface
     */
    protected $ecAdapter;

    /**
     * @var TransactionSignatureSerializer
     */
    protected $txSigSerializer;

    /**
     * @var PublicKeySerializerInterface
     */
    protected $pubKeySerializer;

    /**
     * CheckerCreator constructor.
     * @param EcAdapterInterface $ecAdapter
     * @param TransactionSignatureSerializer $txSigSerializer
     * @param PublicKeySerializerInterface $pubKeySerializer
     */
    public function __construct(
        EcAdapterInterface $ecAdapter,
        TransactionSignatureSerializer $txSigSerializer,
        PublicKeySerializerInterface $pubKeySerializer
    ) {
        $this->ecAdapter = $ecAdapter;
        $this->txSigSerializer = $txSigSerializer;
        $this->pubKeySerializer = $pubKeySerializer;
    }

    /**
     * @param TransactionInterface $tx
     * @param int $nInput
     * @param TransactionOutputInterface $txOut
     * @return CheckerBase
     */
    abstract public function create(
        TransactionInterface $tx,
        int $nInput,
        TransactionOutputInterface $txOut
    ): CheckerBase;
}
