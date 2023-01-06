<?php

declare(strict_types=1);

namespace Tatum\Cryptography\MessageSigner;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Address\PayToPubKeyHashAddress;
use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Key\PrivateKeyInterface;
use Tatum\Cryptography\Crypto\Hash;
use Tatum\Cryptography\Crypto\Random\Rfc6979;
use Tatum\Cryptography\Network\NetworkInterface;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Buffertools;

class MessageSigner {
    /**
     * @var EcAdapterInterface
     */
    private $ecAdapter;

    /**
     * @param EcAdapterInterface $ecAdapter
     */
    public function __construct(EcAdapterInterface $ecAdapter = null) {
        $this->ecAdapter = $ecAdapter ?: Bitcoin::getEcAdapter();
    }

    /**
     * @param NetworkInterface $network
     * @param string $message
     * @return BufferInterface
     * @throws \Exception
     */
    private function calculateBody(NetworkInterface $network, string $message): BufferInterface {
        $prefix = sprintf("%s:\n", $network->getSignedMessageMagic());
        return new Buffer(
            sprintf(
                "%s%s%s%s",
                Buffertools::numToVarInt(strlen($prefix))->getBinary(),
                $prefix,
                Buffertools::numToVarInt(strlen($message))->getBinary(),
                $message
            )
        );
    }

    /**
     * @param NetworkInterface $network
     * @param string $message
     * @return BufferInterface
     */
    public function calculateMessageHash(NetworkInterface $network, string $message): BufferInterface {
        return Hash::sha256d($this->calculateBody($network, $message));
    }

    /**
     * @param SignedMessage $signedMessage
     * @param PayToPubKeyHashAddress $address
     * @param NetworkInterface|null $network
     * @return bool
     */
    public function verify(
        SignedMessage $signedMessage,
        PayToPubKeyHashAddress $address,
        NetworkInterface $network = null
    ): bool {
        $network = $network ?: Bitcoin::getNetwork();
        $hash = $this->calculateMessageHash($network, $signedMessage->getMessage());

        $publicKey = $this->ecAdapter->recover($hash, $signedMessage->getCompactSignature());

        return $publicKey->getPubKeyHash()->equals($address->getHash());
    }

    /**
     * @param string $message
     * @param PrivateKeyInterface $privateKey
     * @param NetworkInterface|null $network
     * @return SignedMessage
     */
    public function sign(
        string $message,
        PrivateKeyInterface $privateKey,
        NetworkInterface $network = null
    ): SignedMessage {
        $network = $network ?: Bitcoin::getNetwork();
        $hash = $this->calculateMessageHash($network, $message);

        return new SignedMessage(
            $message,
            $privateKey->signCompact($hash, new Rfc6979($this->ecAdapter, $privateKey, $hash, "sha256"))
        );
    }
}
