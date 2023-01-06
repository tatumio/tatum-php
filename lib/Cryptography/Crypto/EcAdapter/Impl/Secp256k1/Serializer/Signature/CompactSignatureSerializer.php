<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\Serializer\Signature;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\Adapter\EcAdapter;
use Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\Signature\CompactSignature;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Signature\CompactSignatureSerializerInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Signature\CompactSignatureInterface;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class CompactSignatureSerializer implements CompactSignatureSerializerInterface {
    /**
     * @var EcAdapter
     */
    private $ecAdapter;

    /**
     * @param EcAdapter $ecAdapter
     */
    public function __construct(EcAdapter $ecAdapter) {
        $this->ecAdapter = $ecAdapter;
    }

    /**
     * @param CompactSignature $signature
     * @return BufferInterface
     */
    private function doSerialize(CompactSignature $signature) {
        $sig_t = "";
        $recid = 0;
        if (
            !secp256k1_ecdsa_recoverable_signature_serialize_compact(
                $this->ecAdapter->getContext(),
                $sig_t,
                $recid,
                $signature->getResource()
            )
        ) {
            throw new \RuntimeException("Secp256k1 serialize compact failure");
        }

        return new Buffer(chr($signature->getFlags()) . $sig_t, 65);
    }

    /**
     * @param CompactSignatureInterface $signature
     * @return BufferInterface
     */
    public function serialize(CompactSignatureInterface $signature): BufferInterface {
        /** @var CompactSignature $signature */
        return $this->doSerialize($signature);
    }

    /**
     * @param BufferInterface $buffer
     * @return CompactSignatureInterface
     * @throws \Exception
     */
    public function parse(BufferInterface $buffer): CompactSignatureInterface {
        if ($buffer->getSize() !== 65) {
            throw new \RuntimeException("Compact Sig must be 65 bytes");
        }

        $byte = (int) $buffer->slice(0, 1)->getInt();
        $sig = $buffer->slice(1, 64);

        $recoveryFlags = $byte - 27;
        if ($recoveryFlags > 7) {
            throw new \RuntimeException("Invalid signature type");
        }

        $isCompressed = ($recoveryFlags & 4) !== 0;
        $recoveryId = $recoveryFlags - ($isCompressed ? 4 : 0);

        $sig_t = null;
        if (
            !secp256k1_ecdsa_recoverable_signature_parse_compact(
                $this->ecAdapter->getContext(),
                $sig_t,
                $sig->getBinary(),
                $recoveryId
            )
        ) {
            throw new \RuntimeException("Unable to parse compact signature");
        }
        /** @var resource $sig_t */
        return new CompactSignature($this->ecAdapter, $sig_t, $recoveryId, $isCompressed);
    }
}
