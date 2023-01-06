<?php
/*
 * This file is part of the PHPASN1 library.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tatum\Cryptography\FG\ASN1\Universal;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\FG\ASN1\Construct;
use Tatum\Cryptography\FG\ASN1\Parsable;
use Tatum\Cryptography\FG\ASN1\Identifier;

class Sequence extends Construct implements Parsable {
    public function getType() {
        return Identifier::SEQUENCE;
    }
}
