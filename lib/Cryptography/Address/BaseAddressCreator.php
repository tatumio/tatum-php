<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Address;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Script\ScriptInterface;

abstract class BaseAddressCreator {
    /**
     * @param string $strAddress
     * @param NetworkInterface|null $network
     * @return Address
     */
    abstract public function fromString(string $strAddress, NetworkInterface $network = null): Address;

    /**
     * @param ScriptInterface $script
     * @return Address
     */
    abstract public function fromOutputScript(ScriptInterface $script): Address;
}
