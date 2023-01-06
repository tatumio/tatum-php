<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Serializer\PublicKey\Der;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\FG\ASN1\Universal\Sequence;
use Tatum\Cryptography\FG\ASN1\Universal\ObjectIdentifier;
use Tatum\Cryptography\FG\ASN1\Universal\BitString;
use Tatum\Cryptography\Ecc\Primitives\PointInterface;
use Tatum\Cryptography\Ecc\Crypto\Key\PublicKeyInterface;
use Tatum\Cryptography\Ecc\Curves\NamedCurveFp;
use Tatum\Cryptography\Ecc\Serializer\Util\CurveOidMapper;
use Tatum\Cryptography\Ecc\Serializer\PublicKey\DerPublicKeySerializer;
use Tatum\Cryptography\Ecc\Serializer\Point\PointSerializerInterface;
use Tatum\Cryptography\Ecc\Serializer\Point\UncompressedPointSerializer;

class Formatter {
    /**
     * @var UncompressedPointSerializer
     */
    private $pointSerializer;

    /**
     * Formatter constructor.
     * @param PointSerializerInterface|null $pointSerializer
     */
    public function __construct(PointSerializerInterface $pointSerializer = null) {
        $this->pointSerializer = $pointSerializer ?: new UncompressedPointSerializer();
    }

    /**
     * @param PublicKeyInterface $key
     * @return string
     */
    public function format(PublicKeyInterface $key): string {
        if (!($key->getCurve() instanceof NamedCurveFp)) {
            throw new \RuntimeException("Not implemented for unnamed curves");
        }

        $sequence = new Sequence(
            new Sequence(
                new ObjectIdentifier(DerPublicKeySerializer::X509_ECDSA_OID),
                CurveOidMapper::getCurveOid($key->getCurve())
            ),
            new BitString($this->encodePoint($key->getPoint()))
        );

        return $sequence->getBinary();
    }

    /**
     * @param PointInterface $point
     * @return string
     */
    public function encodePoint(PointInterface $point): string {
        return $this->pointSerializer->serialize($point);
    }
}
