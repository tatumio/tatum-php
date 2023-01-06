<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Serializer\PublicKey;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Ecc\Crypto\Key\PublicKeyInterface;
use Tatum\Cryptography\Ecc\Math\GmpMathInterface;
use Tatum\Cryptography\Ecc\Math\MathAdapterFactory;
use Tatum\Cryptography\Ecc\Serializer\Point\PointSerializerInterface;
use Tatum\Cryptography\Ecc\Serializer\Point\UncompressedPointSerializer;
use Tatum\Cryptography\Ecc\Serializer\PublicKey\Der\Formatter;
use Tatum\Cryptography\Ecc\Serializer\PublicKey\Der\Parser;

/**
 *
 * @link https://tools.ietf.org/html/rfc5480#page-3
 */
class DerPublicKeySerializer implements PublicKeySerializerInterface {
    const X509_ECDSA_OID = "1.2.840.10045.2.1";

    /**
     *
     * @var GmpMathInterface
     */
    private $adapter;

    /**
     *
     * @var Formatter
     */
    private $formatter;

    /**
     *
     * @var Parser
     */
    private $parser;

    /**
     * @param GmpMathInterface|null $adapter
     * @param PointSerializerInterface|null $pointSerializer
     */
    public function __construct(GmpMathInterface $adapter = null, PointSerializerInterface $pointSerializer = null) {
        $this->adapter = $adapter ?: MathAdapterFactory::getAdapter();

        $this->formatter = new Formatter();
        $this->parser = new Parser($this->adapter, $pointSerializer ?: new UncompressedPointSerializer());
    }

    /**
     *
     * @param  PublicKeyInterface $key
     * @return string
     */
    public function serialize(PublicKeyInterface $key): string {
        return $this->formatter->format($key);
    }

    /**
     * @param PublicKeyInterface $key
     * @return string
     */
    public function getUncompressedKey(PublicKeyInterface $key): string {
        return $this->formatter->encodePoint($key->getPoint());
    }

    /**
     * {@inheritDoc}
     * @see \Tatum\Cryptography\Ecc\Serializer\PublicKey\PublicKeySerializerInterface::parse()
     */
    public function parse(string $string): PublicKeyInterface {
        return $this->parser->parse($string);
    }
}
