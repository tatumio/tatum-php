<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Address;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\Buffertools\BufferInterface;

interface AddressInterface {
    /**
     * @param NetworkInterface $network
     * @return string
     */
    public function getAddress(NetworkInterface $network = null): string;

    /**
     * @return BufferInterface
     */
    public function getHash(): BufferInterface;

    /**
     * @return ScriptInterface
     */
    public function getScriptPubKey(): ScriptInterface;
}
