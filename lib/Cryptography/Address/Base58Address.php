<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Address;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Base58;
use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Buffertools\Buffer;

abstract class Base58Address extends Address implements Base58AddressInterface {
    /**
     * @param NetworkInterface|null $network
     * @return string
     */
    public function getAddress(NetworkInterface $network = null): string {
        $network = $network ?: Bitcoin::getNetwork();
        $payload = new Buffer($this->getPrefixByte($network) . $this->getHash()->getBinary());
        return Base58::encodeCheck($payload);
    }
}
