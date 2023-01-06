<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Address;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Bech32;
use Tatum\Cryptography\Base58;
use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Exceptions\UnrecognizedAddressException;
use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Script\Classifier\OutputClassifier;
use Tatum\Cryptography\Script\P2shScript;
use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\Script\ScriptType;
use Tatum\Cryptography\Script\WitnessProgram;
use Tatum\Cryptography\Script\WitnessScript;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class AddressCreator extends BaseAddressCreator {
    /**
     * @param string $strAddress
     * @param NetworkInterface $network
     * @return Base58Address|null
     */
    protected function readBase58Address(string $strAddress, NetworkInterface $network) {
        try {
            $data = Base58::decodeCheck($strAddress);
            $prefixByte = $data->slice(0, $network->getP2shPrefixLength())->getHex();

            if ($prefixByte === $network->getP2shByte()) {
                return new ScriptHashAddress($data->slice(1));
            } elseif ($prefixByte === $network->getAddressByte()) {
                return new PayToPubKeyHashAddress($data->slice($network->getAddressPrefixLength()));
            }
        } catch (\Exception $e) {
            // Just return null
        }

        return null;
    }

    /**
     * @param string $strAddress
     * @param NetworkInterface $network
     * @return SegwitAddress|null
     */
    protected function readSegwitAddress(string $strAddress, NetworkInterface $network) {
        try {
            [$version, $program] = Bech32::decodeSegwit($network->getSegwitBech32Prefix(), $strAddress);

            if (0 === $version) {
                $wp = WitnessProgram::v0(new Buffer($program));
            } else {
                $wp = new WitnessProgram($version, new Buffer($program));
            }

            return new SegwitAddress($wp);
        } catch (\Exception $e) {
            // Just return null
        }

        return null;
    }

    /**
     * @param ScriptInterface $outputScript
     * @return Address
     */
    public function fromOutputScript(ScriptInterface $outputScript): Address {
        if ($outputScript instanceof P2shScript || $outputScript instanceof WitnessScript) {
            throw new \RuntimeException("P2shScript & WitnessScript's are not accepted by fromOutputScript");
        }

        $wp = null;
        if ($outputScript->isWitness($wp)) {
            /** @var WitnessProgram $wp */
            return new SegwitAddress($wp);
        }

        $decode = (new OutputClassifier())->decode($outputScript);
        switch ($decode->getType()) {
            case ScriptType::P2PKH:
                /** @var BufferInterface $solution */
                return new PayToPubKeyHashAddress($decode->getSolution());
            case ScriptType::P2SH:
                /** @var BufferInterface $solution */
                return new ScriptHashAddress($decode->getSolution());
            default:
                throw new \RuntimeException("Script type is not associated with an address");
        }
    }

    /**
     * @param string $strAddress
     * @param NetworkInterface|null $network
     * @return Address
     * @throws UnrecognizedAddressException
     */
    public function fromString(string $strAddress, NetworkInterface $network = null): Address {
        $network = $network ?: Bitcoin::getNetwork();

        if ($base58Address = $this->readBase58Address($strAddress, $network)) {
            return $base58Address;
        }

        if ($bech32Address = $this->readSegwitAddress($strAddress, $network)) {
            return $bech32Address;
        }

        throw new UnrecognizedAddressException();
    }
}
