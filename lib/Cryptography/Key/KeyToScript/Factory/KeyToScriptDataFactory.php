<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Key\KeyToScript\Factory;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\EcSerializer;
use Tatum\Cryptography\Crypto\EcAdapter\Key\KeyInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PrivateKeyInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PublicKeySerializerInterface;
use Tatum\Cryptography\Key\KeyToScript\ScriptAndSignData;
use Tatum\Cryptography\Key\KeyToScript\ScriptDataFactory;

abstract class KeyToScriptDataFactory extends ScriptDataFactory {
    /**
     * @var PublicKeySerializerInterface
     */
    protected $pubKeySerializer;

    /**
     * KeyToP2PKScriptFactory constructor.
     * @param PublicKeySerializerInterface|null $pubKeySerializer
     */
    public function __construct(PublicKeySerializerInterface $pubKeySerializer = null) {
        if (null === $pubKeySerializer) {
            $pubKeySerializer = EcSerializer::getSerializer(PublicKeySerializerInterface::class, true);
        }

        $this->pubKeySerializer = $pubKeySerializer;
    }

    /**
     * @param PublicKeyInterface ...$keys
     * @return ScriptAndSignData
     */
    abstract protected function convertKeyToScriptData(PublicKeyInterface ...$keys): ScriptAndSignData;

    /**
     * @param KeyInterface ...$keys
     * @return ScriptAndSignData
     */
    public function convertKey(KeyInterface ...$keys): ScriptAndSignData {
        $pubs = [];
        foreach ($keys as $key) {
            if ($key instanceof PrivateKeyInterface) {
                $key = $key->getPublicKey();
            }
            $pubs[] = $key;
        }

        return $this->convertKeyToScriptData(...$pubs);
    }
}
