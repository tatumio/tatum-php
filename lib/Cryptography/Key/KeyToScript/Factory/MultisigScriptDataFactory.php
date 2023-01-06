<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Key\KeyToScript\Factory;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PublicKeySerializerInterface;
use Tatum\Cryptography\Key\KeyToScript\ScriptAndSignData;
use Tatum\Cryptography\Script\ScriptFactory;
use Tatum\Cryptography\Script\ScriptType;
use Tatum\Cryptography\Transaction\Factory\SignData;

class MultisigScriptDataFactory extends KeyToScriptDataFactory {
    /**
     * @var int
     */
    private $numSigners;

    /**
     * @var int
     */
    private $numKeys;

    /**
     * @var bool
     */
    private $sortKeys;

    public function __construct(
        int $numSigners,
        int $numKeys,
        bool $sortKeys,
        PublicKeySerializerInterface $pubKeySerializer = null
    ) {
        $this->numSigners = $numSigners;
        $this->numKeys = $numKeys;
        $this->sortKeys = $sortKeys;
        parent::__construct($pubKeySerializer);
    }

    /**
     * @return string
     */
    public function getScriptType(): string {
        return ScriptType::MULTISIG;
    }

    /**
     * @param PublicKeyInterface ...$keys
     * @return ScriptAndSignData
     */
    protected function convertKeyToScriptData(PublicKeyInterface ...$keys): ScriptAndSignData {
        if (count($keys) !== $this->numKeys) {
            throw new \InvalidArgumentException("Incorrect number of keys");
        }

        $keyBuffers = [];
        for ($i = 0; $i < $this->numKeys; $i++) {
            $keyBuffers[] = $this->pubKeySerializer->serialize($keys[$i]);
        }

        return new ScriptAndSignData(
            ScriptFactory::scriptPubKey()->multisigKeyBuffers($this->numSigners, $keyBuffers, $this->sortKeys),
            new SignData()
        );
    }
}
