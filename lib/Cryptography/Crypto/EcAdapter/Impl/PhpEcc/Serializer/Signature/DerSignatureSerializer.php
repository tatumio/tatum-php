<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Impl\PhpEcc\Serializer\Signature;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Impl\PhpEcc\Adapter\EcAdapter;
use Tatum\Cryptography\Crypto\EcAdapter\Impl\PhpEcc\Signature\Signature;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Signature\DerSignatureSerializerInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Signature\SignatureInterface;
use Tatum\Cryptography\Serializer\Types;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Buffertools;
use Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange;
use Tatum\Cryptography\Buffertools\Parser;

class DerSignatureSerializer implements DerSignatureSerializerInterface {
    /**
     * @var EcAdapter
     */
    private $ecAdapter;

    /**
     * @var \Tatum\Cryptography\Buffertools\Types\VarString
     */
    private $varstring;

    /**
     * @param EcAdapter $adapter
     */
    public function __construct(EcAdapter $adapter) {
        $this->ecAdapter = $adapter;
        $this->varstring = Types::varstring();
    }

    /**
     * @return EcAdapterInterface
     */
    public function getEcAdapter(): EcAdapterInterface {
        return $this->ecAdapter;
    }

    /**
     * @param SignatureInterface $signature
     * @return BufferInterface
     * @throws \Exception
     */
    public function serialize(SignatureInterface $signature): BufferInterface {
        // Ensure that the R and S hex's are of even length
        $rBin = gmp_export($signature->getR(), 1, GMP_MSW_FIRST | GMP_BIG_ENDIAN);
        $sBin = gmp_export($signature->getS(), 1, GMP_MSW_FIRST | GMP_BIG_ENDIAN);

        // Pad R and S if their highest bit is flipped, ie,
        // they are negative.
        if ((ord($rBin[0]) & 0x80) === 0x80) {
            $rBin = "\x00$rBin";
        }

        if ((ord($sBin[0]) & 0x80) === 0x80) {
            $sBin = "\x00$sBin";
        }

        $inner = sprintf(
            "\x02%s%s\x02%s%s",
            Buffertools::numToVarIntBin(strlen($rBin)),
            $rBin,
            Buffertools::numToVarIntBin(strlen($sBin)),
            $sBin
        );

        return new Buffer(sprintf("\x30%s%s", Buffertools::numToVarIntBin(strlen($inner)), $inner));
    }

    /**
     * @param Parser $parser
     * @return SignatureInterface
     * @throws ParserOutOfRange
     */
    public function fromParser(Parser $parser): SignatureInterface {
        $prefix = $parser->readBytes(1);
        if ($prefix->getBinary() != "\x30") {
            throw new \RuntimeException("invalid signature");
        }
        $inner = $this->varstring->read($parser);

        try {
            $pinner = new Parser($inner);

            $rPref = $pinner->readBytes(1);
            if ($rPref->getBinary() != "\x02") {
                throw new \RuntimeException("invalid signature");
            }
            $r = $this->varstring->read($pinner);

            $sPref = $pinner->readBytes(1);
            if ($sPref->getBinary() != "\x02") {
                throw new \RuntimeException("invalid signature");
            }
            $s = $this->varstring->read($pinner);
        } catch (ParserOutOfRange $e) {
            throw new ParserOutOfRange("Failed to extract full signature from parser");
        }

        return new Signature($this->ecAdapter, $r->getGmp(), $s->getGmp());
    }

    /**
     * @param BufferInterface $derSignature
     * @return SignatureInterface
     * @throws ParserOutOfRange
     */
    public function parse(BufferInterface $derSignature): SignatureInterface {
        return $this->fromParser(new Parser($derSignature));
    }
}
