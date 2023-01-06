<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Transaction\Factory\Checker;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Crypto\EcAdapter\EcSerializer;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PublicKeySerializerInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Signature\DerSignatureSerializerInterface;
use Tatum\Cryptography\Script\Interpreter\CheckerBase;
use Tatum\Cryptography\Script\Interpreter\Checker;
use Tatum\Cryptography\Serializer\Signature\TransactionSignatureSerializer;
use Tatum\Cryptography\Transaction\TransactionInterface;
use Tatum\Cryptography\Transaction\TransactionOutputInterface;

class CheckerCreator extends CheckerCreatorBase {
    public static function fromEcAdapter(EcAdapterInterface $ecAdapter) {
        $derSigSer = EcSerializer::getSerializer(DerSignatureSerializerInterface::class);
        $txSigSer = new TransactionSignatureSerializer($derSigSer);
        $pkSer = EcSerializer::getSerializer(PublicKeySerializerInterface::class);
        return new CheckerCreator($ecAdapter, $txSigSer, $pkSer);
    }
    /**
     * @param TransactionInterface $tx
     * @param int $nInput
     * @param TransactionOutputInterface $txOut
     * @return CheckerBase
     */
    public function create(TransactionInterface $tx, int $nInput, TransactionOutputInterface $txOut): CheckerBase {
        return new Checker(
            $this->ecAdapter,
            $tx,
            $nInput,
            $txOut->getValue(),
            $this->txSigSerializer,
            $this->pubKeySerializer
        );
    }
}
