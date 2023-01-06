<?php
/*
 * This file is part of the PHPASN1 library.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tatum\Cryptography\FG\X509;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\FG\ASN1\Universal\NullObject;
use Tatum\Cryptography\FG\ASN1\Composite\AttributeTypeAndValue;

class AlgorithmIdentifier extends AttributeTypeAndValue {
    public function __construct($objectIdentifierString) {
        parent::__construct($objectIdentifierString, new NullObject());
    }
}
