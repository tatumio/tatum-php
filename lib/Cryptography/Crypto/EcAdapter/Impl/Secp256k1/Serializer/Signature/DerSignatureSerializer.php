<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\Serializer\Signature;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\Adapter\EcAdapter;
use Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\Signature\Signature;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Signature\DerSignatureSerializerInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Signature\SignatureInterface;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Parser;
use Tatum\Cryptography\Buffertools\Template;
use Tatum\Cryptography\Buffertools\TemplateFactory;

class DerSignatureSerializer implements DerSignatureSerializerInterface {
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
     * @return EcAdapterInterface
     */
    public function getEcAdapter() {
        return $this->ecAdapter;
    }

    /**
     * @param Signature $signature
     * @return BufferInterface
     */
    private function doSerialize(Signature $signature): BufferInterface {
        $signatureOut = "";
        if (
            !secp256k1_ecdsa_signature_serialize_der(
                $this->ecAdapter->getContext(),
                $signatureOut,
                $signature->getResource()
            )
        ) {
            throw new \RuntimeException("Secp256k1: serialize der failure");
        }

        return new Buffer($signatureOut);
    }

    /**
     * @param SignatureInterface $signature
     * @return BufferInterface
     */
    public function serialize(SignatureInterface $signature): BufferInterface {
        /** @var Signature $signature */
        return $this->doSerialize($signature);
    }

    /**
     * @return Template
     */
    private function getInnerTemplate() {
        return (new TemplateFactory())
            ->uint8()
            ->varstring()
            ->uint8()
            ->varstring()
            ->getTemplate();
    }

    /**
     * @return Template
     */
    private function getOuterTemplate() {
        return (new TemplateFactory())
            ->uint8()
            ->varstring()
            ->getTemplate();
    }

    /**
     * @param BufferInterface $derSignature
     * @return SignatureInterface
     */
    public function parse(BufferInterface $derSignature): SignatureInterface {
        $derSignature = (new Parser($derSignature))->getBuffer();
        $binary = $derSignature->getBinary();

        $sig_t = null;
        /** @var resource $sig_t */
        if (!ecdsa_signature_parse_der_lax($this->ecAdapter->getContext(), $sig_t, $binary)) {
            throw new \RuntimeException("Secp256k1: parse der failure");
        }

        // Unfortunately, we need to use the Parser here to get r and s :/
        [, $inner] = $this->getOuterTemplate()->parse(new Parser($derSignature));
        [, $r, , $s] = $this->getInnerTemplate()->parse(new Parser($inner));
        /** @var Buffer $r */
        /** @var Buffer $s */

        return new Signature($this->ecAdapter, $r->getGmp(), $s->getGmp(), $sig_t);
    }
}
