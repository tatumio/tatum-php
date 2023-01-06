<?php

namespace Tatum\Cryptography\Address;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Network\BitcoinCashNetworkInterface;
use Tatum\Cryptography\Exceptions\BitcoinCashNetworkRequiredException;
use Tatum\Cryptography\Exceptions\BitcoinCashAddressUnsupportedException;
use Tatum\Cryptography\Address\Address;
use Tatum\Cryptography\Address\PayToPubKeyHashAddress;
use Tatum\Cryptography\Address\ScriptHashAddress;
use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Script\ScriptFactory;
use Tatum\Cryptography\Script\ScriptType;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Address\BitcoinCash\CashAddress;

class BitcoinCashAddress extends Address implements BitcoinCashAddressInterface {
    /**
     * @var string
     */
    protected $type;

    /**
     * @var BufferInterface
     */
    protected $hash;

    /**
     * BitcoinCashAddress constructor.
     * @param string $type
     * @param BufferInterface $hash
     * @throws BitcoinCashAddressUnsupportedException
     */
    public function __construct($type, BufferInterface $hash) {
        if ($type !== ScriptType::P2PKH && $type !== ScriptType::P2SH) {
            throw new BitcoinCashAddressUnsupportedException("Invalid type for bitcoin cash address");
        }

        $this->type = $type;

        parent::__construct($hash);
    }

    /**
     * @param BitcoinCashNetworkInterface $network
     * @return string
     */
    public function getPrefix(BitcoinCashNetworkInterface $network) {
        return $network->getCashAddressPrefix();
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param NetworkInterface|null $network
     * @return string
     * @throws \Tatum\Cryptography\Exceptions\Base32Exception
     * @throws \Tatum\Cryptography\Exceptions\BitcoinCashAddressException
     * @throws BitcoinCashNetworkRequiredException
     */
    public function getAddress(NetworkInterface $network = null): string {
        if (null === $network) {
            $network = Bitcoin::getNetwork();
        }

        if (!($network instanceof BitcoinCashNetworkInterface)) {
            throw new BitcoinCashNetworkRequiredException(
                "Invalid network - must implement BitcoinCashNetworkInterface"
            );
        }

        return CashAddress::encode($network->getCashAddressPrefix(), $this->type, $this->hash->getBinary());
    }

    /**
     * @return PayToPubKeyHashAddress|ScriptHashAddress
     */
    public function getLegacyAddress() {
        if ($this->type === ScriptType::P2PKH) {
            return new PayToPubKeyHashAddress($this->hash);
        } else {
            return new ScriptHashAddress($this->hash);
        }
    }

    /**
     * @return \Tatum\Cryptography\Script\ScriptInterface
     */
    public function getScriptPubKey(): \Tatum\Cryptography\Script\ScriptInterface {
        if ($this->type === ScriptType::P2PKH) {
            return ScriptFactory::scriptPubKey()->p2pkh($this->hash);
        } else {
            return ScriptFactory::scriptPubKey()->p2sh($this->hash);
        }
    }
}
