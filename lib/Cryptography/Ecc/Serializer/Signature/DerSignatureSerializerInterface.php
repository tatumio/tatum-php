<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Serializer\Signature;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Ecc\Crypto\Signature\SignatureInterface;

interface DerSignatureSerializerInterface {
    /**
     * @param SignatureInterface $signature
     * @return string
     */
    public function serialize(SignatureInterface $signature): string;

    /**
     * @param string $binary
     * @return SignatureInterface
     * @throws \Tatum\Cryptography\FG\ASN1\Exception\ParserException
     */
    public function parse(string $binary): SignatureInterface;
}
