<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Serializer\PrivateKey;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\FG\ASN1\ASNObject;
use Tatum\Cryptography\FG\ASN1\Universal\Sequence;
use Tatum\Cryptography\FG\ASN1\Universal\Integer;
use Tatum\Cryptography\FG\ASN1\Universal\BitString;
use Tatum\Cryptography\FG\ASN1\Universal\OctetString;
use Tatum\Cryptography\FG\ASN1\ExplicitlyTaggedObject;
use Tatum\Cryptography\Ecc\Crypto\Key\PrivateKeyInterface;
use Tatum\Cryptography\Ecc\Math\GmpMathInterface;
use Tatum\Cryptography\Ecc\Math\MathAdapterFactory;
use Tatum\Cryptography\Ecc\Serializer\Util\CurveOidMapper;
use Tatum\Cryptography\Ecc\Serializer\PublicKey\DerPublicKeySerializer;

/**
 * PEM Private key formatter
 *
 * @link https://tools.ietf.org/html/rfc5915
 */
class DerPrivateKeySerializer implements PrivateKeySerializerInterface {
    const VERSION = 1;

    /**
     * @var GmpMathInterface|null
     */
    private $adapter;

    /**
     * @var DerPublicKeySerializer
     */
    private $pubKeySerializer;

    /**
     * @param GmpMathInterface       $adapter
     * @param DerPublicKeySerializer $pubKeySerializer
     */
    public function __construct(GmpMathInterface $adapter = null, DerPublicKeySerializer $pubKeySerializer = null) {
        $this->adapter = $adapter ?: MathAdapterFactory::getAdapter();
        $this->pubKeySerializer = $pubKeySerializer ?: new DerPublicKeySerializer($this->adapter);
    }

    /**
     * {@inheritDoc}
     * @see \Tatum\Cryptography\Ecc\Serializer\PrivateKey\PrivateKeySerializerInterface::serialize()
     */
    public function serialize(PrivateKeyInterface $key): string {
        $privateKeyInfo = new Sequence(
            new Integer(self::VERSION),
            new OctetString($this->formatKey($key)),
            new ExplicitlyTaggedObject(0, CurveOidMapper::getCurveOid($key->getPoint()->getCurve())),
            new ExplicitlyTaggedObject(1, $this->encodePubKey($key))
        );

        return $privateKeyInfo->getBinary();
    }

    /**
     * @param PrivateKeyInterface $key
     * @return BitString
     */
    private function encodePubKey(PrivateKeyInterface $key): BitString {
        return new BitString($this->pubKeySerializer->getUncompressedKey($key->getPublicKey()));
    }

    /**
     * @param PrivateKeyInterface $key
     * @return string
     */
    private function formatKey(PrivateKeyInterface $key): string {
        return gmp_strval($key->getSecret(), 16);
    }

    /**
     * {@inheritDoc}
     * @see \Tatum\Cryptography\Ecc\Serializer\PrivateKey\PrivateKeySerializerInterface::parse()
     * @throws \Tatum\Cryptography\FG\ASN1\Exception\ParserException
     */
    public function parse(string $data): PrivateKeyInterface {
        $asnObject = ASNObject::fromBinary($data);

        if (!($asnObject instanceof Sequence) || $asnObject->getNumberofChildren() !== 4) {
            throw new \RuntimeException("Invalid data.");
        }

        $children = $asnObject->getChildren();

        $version = $children[0];

        if ($version->getContent() != 1) {
            throw new \RuntimeException("Invalid data: only version 1 (RFC5915) keys are supported.");
        }

        $key = gmp_init($children[1]->getContent(), 16);
        $oid = $children[2]->getContent()[0];
        $generator = CurveOidMapper::getGeneratorFromOid($oid);

        return $generator->getPrivateKeyFrom($key);
    }
}
