<?php

declare(strict_types=1);

namespace Tatum\Cryptography\MessageSigner;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\EcSerializer;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Signature\CompactSignatureSerializerInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Signature\CompactSignatureInterface;
use Tatum\Cryptography\Serializer\MessageSigner\SignedMessageSerializer;

class SignedMessage {
    /**
     * @var string
     */
    private $message;

    /**
     * @var CompactSignatureInterface
     */
    private $compactSignature;

    /**
     * @param string $message
     * @param CompactSignatureInterface $signature
     */
    public function __construct(string $message, CompactSignatureInterface $signature) {
        $this->message = $message;
        $this->compactSignature = $signature;
    }

    /**
     * @return string
     */
    public function getMessage(): string {
        return $this->message;
    }

    /**
     * @return CompactSignatureInterface
     */
    public function getCompactSignature(): CompactSignatureInterface {
        return $this->compactSignature;
    }

    /**
     * @return \Tatum\Cryptography\Buffertools\BufferInterface
     */
    public function getBuffer() {
        $serializer = new SignedMessageSerializer(
            EcSerializer::getSerializer(CompactSignatureSerializerInterface::class)
        );
        return $serializer->serialize($this);
    }
}
