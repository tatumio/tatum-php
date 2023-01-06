<?php
/*
 * This file is part of the PHPASN1 library.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tatum\Cryptography\FG\ASN1\Composite;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\FG\ASN1\Exception\NotImplementedException;
use Tatum\Cryptography\FG\ASN1\ASNObject;
use Tatum\Cryptography\FG\ASN1\Universal\Set;

class RelativeDistinguishedName extends Set {
    /**
     * @param string|\Tatum\Cryptography\FG\ASN1\Universal\ObjectIdentifier $objIdentifierString
     * @param \Tatum\Cryptography\FG\ASN1\ASNObject $value
     */
    public function __construct($objIdentifierString, ASNObject $value) {
        // TODO: This does only support one element in the RelativeDistinguishedName Set but it it is defined as follows:
        // RelativeDistinguishedName ::= SET SIZE (1..MAX) OF AttributeTypeAndValue
        parent::__construct(new AttributeTypeAndValue($objIdentifierString, $value));
    }

    public function getContent() {
        /** @var \Tatum\Cryptography\FG\ASN1\ASNObject $firstObject */
        $firstObject = $this->children[0];
        return $firstObject->__toString();
    }

    /**
     * At the current version this code can not work since the implementation of Construct requires
     * the class to support a constructor without arguments.
     *
     * @deprecated this function is not yet implemented! Feel free to submit a pull request on github
     * @param string $binaryData
     * @param int $offsetIndex
     * @throws NotImplementedException
     */
    public static function fromBinary(&$binaryData, &$offsetIndex = 0) {
        throw new NotImplementedException();
    }
}
