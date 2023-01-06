<?php
/*
 * This file is part of the PHPASN1 library.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tatum\Cryptography\FG\X509;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\FG\ASN1\OID;
use Tatum\Cryptography\FG\ASN1\Universal\NullObject;
use Tatum\Cryptography\FG\ASN1\Universal\Sequence;
use Tatum\Cryptography\FG\ASN1\Universal\BitString;
use Tatum\Cryptography\FG\ASN1\Universal\ObjectIdentifier;

class PublicKey extends Sequence {
    /**
     * @param string $hexKey
     * @param \Tatum\Cryptography\FG\ASN1\ASNObject|string $algorithmIdentifierString
     */
    public function __construct($hexKey, $algorithmIdentifierString = OID::RSA_ENCRYPTION) {
        parent::__construct(
            new Sequence(new ObjectIdentifier($algorithmIdentifierString), new NullObject()),
            new BitString($hexKey)
        );
    }
}
