<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Serializer\Key\HierarchicalKey;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Key\Deterministic\HdPrefix\GlobalPrefixConfig;
use Tatum\Cryptography\Key\Deterministic\HierarchicalKey;
use Tatum\Cryptography\Key\KeyToScript\Factory\P2pkhScriptDataFactory;
use Tatum\Cryptography\Crypto\EcAdapter\EcSerializer;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PrivateKeySerializerInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PublicKeySerializerInterface;
use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange;
use Tatum\Cryptography\Buffertools\Parser;

class ExtendedKeySerializer {
    /**
     * @var EcAdapterInterface
     */
    private $ecAdapter;

    /**
     * @var RawExtendedKeySerializer
     */
    private $rawSerializer;

    /**
     * @var P2pkhScriptDataFactory
     */
    private $defaultScriptFactory;

    /**
     * @var GlobalPrefixConfig
     */
    private $prefixConfig;

    /**
     * @var PrivateKeySerializerInterface
     */
    private $privateKeySerializer;

    /**
     * @var PublicKeySerializerInterface
     */
    private $publicKeySerializer;

    /**
     * @param EcAdapterInterface $ecAdapter
     * @param GlobalPrefixConfig|null $config
     */
    public function __construct(EcAdapterInterface $ecAdapter, GlobalPrefixConfig $config = null) {
        $this->privateKeySerializer = EcSerializer::getSerializer(
            PrivateKeySerializerInterface::class,
            true,
            $ecAdapter
        );
        $this->publicKeySerializer = EcSerializer::getSerializer(PublicKeySerializerInterface::class, true, $ecAdapter);

        $this->ecAdapter = $ecAdapter;
        $this->rawSerializer = new RawExtendedKeySerializer($ecAdapter);
        $this->defaultScriptFactory = new P2pkhScriptDataFactory();
        $this->prefixConfig = $config;
    }

    /**
     * @param NetworkInterface $network
     * @param HierarchicalKey $key
     * @return BufferInterface
     */
    public function serialize(NetworkInterface $network, HierarchicalKey $key): BufferInterface {
        if (null === $this->prefixConfig) {
            if ($key->getScriptDataFactory()->getScriptType() !== $this->defaultScriptFactory->getScriptType()) {
                throw new \InvalidArgumentException(
                    "Cannot serialize non-P2PKH HierarchicalKeys without a GlobalPrefixConfig"
                );
            }
            $privatePrefix = $network->getHDPrivByte();
            $publicPrefix = $network->getHDPubByte();
        } else {
            $scriptConfig = $this->prefixConfig
                ->getNetworkConfig($network)
                ->getConfigForScriptType($key->getScriptDataFactory()->getScriptType());
            $privatePrefix = $scriptConfig->getPrivatePrefix();
            $publicPrefix = $scriptConfig->getPublicPrefix();
        }

        if ($key->isPrivate()) {
            $prefix = $privatePrefix;
            $keyData = new Buffer("\x00{$key->getPrivateKey()->getBinary()}");
        } else {
            $prefix = $publicPrefix;
            $keyData = $key->getPublicKey()->getBuffer();
        }

        return $this->rawSerializer->serialize(
            new RawKeyParams(
                $prefix,
                $key->getDepth(),
                $key->getFingerprint(),
                $key->getSequence(),
                $key->getChainCode(),
                $keyData
            )
        );
    }

    /**
     * @param NetworkInterface $network
     * @param Parser $parser
     * @return HierarchicalKey
     * @throws ParserOutOfRange
     */
    public function fromParser(NetworkInterface $network, Parser $parser): HierarchicalKey {
        $params = $this->rawSerializer->fromParser($parser);

        if (null === $this->prefixConfig) {
            if (
                !(
                    $params->getPrefix() === $network->getHDPubByte() ||
                    $params->getPrefix() === $network->getHDPrivByte()
                )
            ) {
                throw new \InvalidArgumentException("HD key magic bytes do not match network magic bytes");
            }
            $privatePrefix = $network->getHDPrivByte();
            $scriptFactory = $this->defaultScriptFactory;
        } else {
            $scriptConfig = $this->prefixConfig->getNetworkConfig($network)->getConfigForPrefix($params->getPrefix());
            $privatePrefix = $scriptConfig->getPrivatePrefix();
            $scriptFactory = $scriptConfig->getScriptDataFactory();
        }

        if ($params->getPrefix() === $privatePrefix) {
            $key = $this->privateKeySerializer->parse($params->getKeyData()->slice(1), true);
        } else {
            $key = $this->publicKeySerializer->parse($params->getKeyData());
        }

        return new HierarchicalKey(
            $this->ecAdapter,
            $scriptFactory,
            $params->getDepth(),
            $params->getParentFingerprint(),
            $params->getSequence(),
            $params->getChainCode(),
            $key
        );
    }

    /**
     * @param NetworkInterface $network
     * @param BufferInterface $buffer
     * @return HierarchicalKey
     * @throws ParserOutOfRange
     */
    public function parse(NetworkInterface $network, BufferInterface $buffer): HierarchicalKey {
        return $this->fromParser($network, new Parser($buffer));
    }
}
