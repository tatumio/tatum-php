<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Key;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Signature\SignatureInterface;
use Tatum\Cryptography\Buffertools\BufferInterface;

interface PublicKeyInterface extends KeyInterface {
    /**
     * Length of an uncompressed key
     */
    const LENGTH_UNCOMPRESSED = 65;

    /**
     * Length of a compressed key
     */
    const LENGTH_COMPRESSED = 33;

    /**
     * When key is uncompressed, this is the prefix.
     */
    const KEY_UNCOMPRESSED = "\x04";

    /**
     * When y coordinate is even, prepend x coordinate with this byte
     */
    const KEY_COMPRESSED_EVEN = "\x02";

    /**
     * When y coordinate is odd, prepend x coordinate with this byte
     */
    const KEY_COMPRESSED_ODD = "\x03";

    /**
     * @param PublicKeyInterface $other
     * @return bool
     */
    public function equals(PublicKeyInterface $other): bool;

    /**
     * @param BufferInterface $msg32
     * @param SignatureInterface $signature
     * @return bool
     */
    public function verify(BufferInterface $msg32, SignatureInterface $signature): bool;
}
