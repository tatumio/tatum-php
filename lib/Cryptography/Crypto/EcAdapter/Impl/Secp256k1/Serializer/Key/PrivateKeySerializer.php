<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\Serializer\Key;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\Adapter\EcAdapter;
use Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\Key\PrivateKey;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PrivateKeyInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PrivateKeySerializerInterface;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Parser;

/**
 * Private Key Serializer - specific to secp256k1
 */
class PrivateKeySerializer implements PrivateKeySerializerInterface {
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
     * @param PrivateKey $privateKey
     * @return BufferInterface
     */
    private function doSerialize(PrivateKey $privateKey): BufferInterface {
        return new Buffer($privateKey->getSecretBinary(), 32);
    }

    /**
     * @param PrivateKeyInterface $privateKey
     * @return BufferInterface
     */
    public function serialize(PrivateKeyInterface $privateKey): BufferInterface {
        /** @var PrivateKey $privateKey */
        return $this->doSerialize($privateKey);
    }

    /**
     * @param Parser $parser
     * @param bool $compressed
     * @return PrivateKeyInterface
     * @throws \Exception
     */
    public function fromParser(Parser $parser, bool $compressed): PrivateKeyInterface {
        return $this->ecAdapter->getPrivateKey($parser->readBytes(32)->getGmp(), $compressed);
    }

    /**
     * @param BufferInterface $data
     * @param bool $compressed
     * @return PrivateKeyInterface
     * @throws \Exception
     */
    public function parse(BufferInterface $data, bool $compressed): PrivateKeyInterface {
        return $this->fromParser(new Parser($data), $compressed);
    }
}
