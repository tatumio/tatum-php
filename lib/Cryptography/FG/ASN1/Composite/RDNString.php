<?php
/*
 * This file is part of the PHPASN1 library.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tatum\Cryptography\FG\ASN1\Composite;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\FG\ASN1\Universal\PrintableString;
use Tatum\Cryptography\FG\ASN1\Universal\IA5String;
use Tatum\Cryptography\FG\ASN1\Universal\UTF8String;

class RDNString extends RelativeDistinguishedName {
    /**
     * @param string|\Tatum\Cryptography\FG\ASN1\Universal\ObjectIdentifier $objectIdentifierString
     * @param string|\Tatum\Cryptography\FG\ASN1\ASNObject $value
     */
    public function __construct($objectIdentifierString, $value) {
        if (PrintableString::isValid($value)) {
            $value = new PrintableString($value);
        } else {
            if (IA5String::isValid($value)) {
                $value = new IA5String($value);
            } else {
                $value = new UTF8String($value);
            }
        }

        parent::__construct($objectIdentifierString, $value);
    }
}
