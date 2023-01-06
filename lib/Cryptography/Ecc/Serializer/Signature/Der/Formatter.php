<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Serializer\Signature\Der;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\FG\ASN1\Universal\Integer;
use Tatum\Cryptography\FG\ASN1\Universal\Sequence;
use Tatum\Cryptography\Ecc\Crypto\Signature\SignatureInterface;

class Formatter {
    /**
     * @param SignatureInterface $signature
     * @return Sequence
     */
    public function toAsn(SignatureInterface $signature): Sequence {
        return new Sequence(
            new Integer(gmp_strval($signature->getR(), 10)),
            new Integer(gmp_strval($signature->getS(), 10))
        );
    }

    /**
     * @param SignatureInterface $signature
     * @return string
     */
    public function serialize(SignatureInterface $signature): string {
        return $this->toAsn($signature)->getBinary();
    }
}
