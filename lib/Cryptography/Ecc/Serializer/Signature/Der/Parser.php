<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Serializer\Signature\Der;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\FG\ASN1\ASNObject;
use Tatum\Cryptography\FG\ASN1\Identifier;
use Tatum\Cryptography\FG\ASN1\Universal\Integer;
use Tatum\Cryptography\Ecc\Crypto\Signature\Signature;
use Tatum\Cryptography\Ecc\Crypto\Signature\SignatureInterface;
use Tatum\Cryptography\Ecc\Exception\SignatureDecodeException;

class Parser {
    /**
     * @param string $binary
     * @return SignatureInterface
     * @throws \Tatum\Cryptography\FG\ASN1\Exception\ParserException
     */
    public function parse(string $binary): SignatureInterface {
        $offsetIndex = 0;
        $asnObject = ASNObject::fromBinary($binary, $offsetIndex);

        if ($offsetIndex != strlen($binary)) {
            throw new SignatureDecodeException("Invalid data.");
        }

        // Set inherits from Sequence, so use getType!
        if ($asnObject->getType() !== Identifier::SEQUENCE) {
            throw new SignatureDecodeException("Invalid tag for sequence.");
        }

        if ($asnObject->getNumberofChildren() !== 2) {
            throw new SignatureDecodeException("Invalid data.");
        }

        if (!($asnObject[0] instanceof Integer && $asnObject[1] instanceof Integer)) {
            throw new SignatureDecodeException("Invalid data.");
        }

        return new Signature(gmp_init($asnObject[0]->getContent(), 10), gmp_init($asnObject[1]->getContent(), 10));
    }
}
