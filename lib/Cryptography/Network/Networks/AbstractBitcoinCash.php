<?php

namespace Tatum\Cryptography\Network\Networks;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Exceptions\MissingCashAddressPrefix;
use Tatum\Cryptography\Network\BitcoinCashNetworkInterface;
use Tatum\Cryptography\Network\Network;

abstract class AbstractBitcoinCash extends Network implements BitcoinCashNetworkInterface {
    /**
     * @var string[]
     */
    protected $bech32PrefixMap = [];

    /**
     * @var string
     */
    protected $cashAddressPrefix;

    /**
     * @return string
     * @throws MissingCashAddressPrefix
     */
    public function getCashAddressPrefix() {
        return $this->loadCashAddressPrefix();
    }

    /**
     * @return string
     */
    public function getSegwitBech32Prefix(): string {
        throw new \LogicException("Cannot use bech32 addresses with bitcoin cash");
    }

    /**
     * @return bool
     */
    protected function hasCashAddressPrefix() {
        return null !== $this->cashAddressPrefix;
    }

    /**
     * @param $prefixType
     * @return string
     * @throws MissingCashAddressPrefix
     */
    protected function loadCashAddressPrefix() {
        if (!$this->hasCashAddressPrefix()) {
            throw new MissingCashAddressPrefix();
        }
        return $this->cashAddressPrefix;
    }
}
