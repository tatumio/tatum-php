<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Impl\PhpEcc\Serializer\Key;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Impl\PhpEcc\Adapter\EcAdapter;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PrivateKeyInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PrivateKeySerializerInterface;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Parser;

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
     * @param PrivateKeyInterface $privateKey
     * @return BufferInterface
     */
    public function serialize(PrivateKeyInterface $privateKey): BufferInterface {
        return Buffer::int(gmp_strval($privateKey->getSecret(), 10), 32);
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
     * @param BufferInterface $buffer
     * @param bool $compressed
     * @return PrivateKeyInterface
     * @throws \Exception
     */
    public function parse(BufferInterface $buffer, bool $compressed): PrivateKeyInterface {
        return $this->fromParser(new Parser($buffer), $compressed);
    }
}
