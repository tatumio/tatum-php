<?php

namespace Tatum\Cryptography\Address\BitcoinCash;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Address\Base58Address;
use Tatum\Cryptography\Address\Base58AddressInterface;
use Tatum\Cryptography\Address\BaseAddressCreator;
use Tatum\Cryptography\Address\PayToPubKeyHashAddress;
use Tatum\Cryptography\Address\ScriptHashAddress;
use Tatum\Cryptography\Base58;
use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Exceptions\UnrecognizedAddressException;
use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Script\Classifier\OutputClassifier;
use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\Script\ScriptType;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Network\BitcoinCashNetworkInterface;
use Tatum\Cryptography\Address\BitcoinCashAddress;

class AddressCreator extends BaseAddressCreator {
    /**
     * @var bool
     */
    private $useNewCashAddress;

    /**
     * BitcoinCashAddressReader constructor.
     * @param bool $useNewCashAddress
     */
    public function __construct($useNewCashAddress = true) {
        $this->useNewCashAddress = $useNewCashAddress;
    }

    /**
     * @param string $strAddress
     * @param NetworkInterface $network
     * @return Base58Address|null
     */
    private function readBase58Address($strAddress, NetworkInterface $network) {
        try {
            $data = Base58::decodeCheck($strAddress);
            $prefixByte = $data->slice(0, 1)->getHex();

            if ($prefixByte === $network->getP2shByte()) {
                return new ScriptHashAddress($data->slice(1));
            } elseif ($prefixByte === $network->getAddressByte()) {
                return new PayToPubKeyHashAddress($data->slice(1));
            }
        } catch (\Exception $e) {
            // Just return null
        }

        return null;
    }

    /**
     * @param string $strAddress
     * @param BitcoinCashNetworkInterface $network
     * @return BitcoinCashAddress|null
     */
    private function readCashAddress($strAddress, BitcoinCashNetworkInterface $network) {
        try {
            [$prefix, $scriptType, $hash] = CashAddress::decode($strAddress);
            if ($prefix !== $network->getCashAddressPrefix()) {
                return null;
            }

            return new BitcoinCashAddress($scriptType, new Buffer($hash, 20));
        } catch (\Exception $e) {
            // continue on
        }

        return null;
    }

    /**
     * @param string $strAddress
     * @param NetworkInterface|null $network
     * @return Base58AddressInterface|BitcoinCashAddress
     * @throws UnrecognizedAddressException
     */
    public function fromString(
        string $strAddress,
        NetworkInterface $network = null
    ): \Tatum\Cryptography\Address\Address {
        $network = $network ?: Bitcoin::getNetwork();

        if ($base58Address = $this->readBase58Address($strAddress, $network)) {
            return $base58Address;
        }

        if ($this->useNewCashAddress && $network instanceof BitcoinCashNetworkInterface) {
            if ($base32Address = $this->readCashAddress(strtolower($strAddress), $network)) {
                return $base32Address;
            }

            if (
                $base32Address = $this->readCashAddress(
                    sprintf("%s:%s", $network->getCashAddressPrefix(), strtolower($strAddress)),
                    $network
                )
            ) {
                return $base32Address;
            }
        }

        throw new UnrecognizedAddressException("Address not recognized");
    }

    /**
     * @param ScriptInterface $script
     * @return Base58AddressInterface|BitcoinCashAddress
     * @throws UnrecognizedAddressException
     */
    public function fromOutputScript(ScriptInterface $script): \Tatum\Cryptography\Address\Address {
        $decode = (new OutputClassifier())->decode($script);

        switch ($decode->getType()) {
            case ScriptType::P2PKH:
                /** @var BufferInterface $solution */
                if ($this->useNewCashAddress) {
                    return new BitcoinCashAddress(ScriptType::P2PKH, $decode->getSolution());
                } else {
                    return new PayToPubKeyHashAddress($decode->getSolution());
                }
                break;

            case ScriptType::P2SH:
                /** @var BufferInterface $solution */
                if ($this->useNewCashAddress) {
                    return new BitcoinCashAddress(ScriptType::P2SH, $decode->getSolution());
                } else {
                    return new ScriptHashAddress($decode->getSolution());
                }
                break;

            default:
                throw new UnrecognizedAddressException("Script type is not associated with an address");
        }
    }
}
