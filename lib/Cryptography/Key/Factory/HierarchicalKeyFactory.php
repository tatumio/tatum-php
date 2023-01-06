<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Key\Factory;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Crypto\EcAdapter\EcSerializer;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PublicKeySerializerInterface;
use Tatum\Cryptography\Crypto\Hash;
use Tatum\Cryptography\Crypto\Random\Random;
use Tatum\Cryptography\Key\Deterministic\HierarchicalKey;
use Tatum\Cryptography\Key\Deterministic\MultisigHD;
use Tatum\Cryptography\Key\KeyToScript\Factory\P2pkhScriptDataFactory;
use Tatum\Cryptography\Key\KeyToScript\ScriptDataFactory;
use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Serializer\Key\HierarchicalKey\Base58ExtendedKeySerializer;
use Tatum\Cryptography\Serializer\Key\HierarchicalKey\ExtendedKeySerializer;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class HierarchicalKeyFactory {
    /**
     * @var EcAdapterInterface
     */
    private $adapter;

    /**
     * @var Base58ExtendedKeySerializer
     */
    private $serializer;

    /**
     * @var PrivateKeyFactory
     */
    private $privFactory;

    /**
     * HierarchicalKeyFactory constructor.
     * @param EcAdapterInterface|null $ecAdapter
     * @param Base58ExtendedKeySerializer|null $serializer
     * @throws \Exception
     */
    public function __construct(EcAdapterInterface $ecAdapter = null, Base58ExtendedKeySerializer $serializer = null) {
        $this->adapter = $ecAdapter ?: Bitcoin::getEcAdapter();
        $this->privFactory = new PrivateKeyFactory($this->adapter);
        $this->serializer = $serializer ?: new Base58ExtendedKeySerializer(new ExtendedKeySerializer($this->adapter));
    }

    /**
     * @param Random $random
     * @param ScriptDataFactory|null $scriptDataFactory
     * @return HierarchicalKey
     * @throws \Tatum\Cryptography\Exceptions\RandomBytesFailure
     * @throws \Exception
     */
    public function generateMasterKey(Random $random, ScriptDataFactory $scriptDataFactory = null): HierarchicalKey {
        return $this->fromEntropy($random->bytes(64), $scriptDataFactory);
    }

    /**
     * @param BufferInterface $entropy
     * @param ScriptDataFactory|null $scriptFactory
     * @return HierarchicalKey
     * @throws \Exception
     */
    public function fromEntropy(BufferInterface $entropy, ScriptDataFactory $scriptFactory = null): HierarchicalKey {
        $seed = Hash::hmac("sha512", $entropy, new Buffer("Bitcoin seed"));
        $privSecret = $seed->slice(0, 32);
        $chainCode = $seed->slice(32, 32);

        $scriptFactory =
            $scriptFactory ?:
            new P2pkhScriptDataFactory(
                EcSerializer::getSerializer(PublicKeySerializerInterface::class, true, $this->adapter)
            );
        return new HierarchicalKey(
            $this->adapter,
            $scriptFactory,
            0,
            0,
            0,
            $chainCode,
            $this->privFactory->fromBufferCompressed($privSecret)
        );
    }

    /**
     * @param string $extendedKey
     * @param NetworkInterface|null $network
     * @return HierarchicalKey
     * @throws \Tatum\Cryptography\Exceptions\Base58ChecksumFailure
     * @throws \Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange
     */
    public function fromExtended(string $extendedKey, NetworkInterface $network = null): HierarchicalKey {
        return $this->serializer->parse($network ?: Bitcoin::getNetwork(), $extendedKey);
    }

    /**
     * @param ScriptDataFactory $scriptFactory
     * @param HierarchicalKey ...$keys
     * @return MultisigHD
     */
    public function multisig(ScriptDataFactory $scriptFactory, HierarchicalKey ...$keys): MultisigHD {
        return new MultisigHD($scriptFactory, ...$keys);
    }
}
