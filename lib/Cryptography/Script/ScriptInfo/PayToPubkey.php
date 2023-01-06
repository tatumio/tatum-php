<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Script\ScriptInfo;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Crypto\EcAdapter\Key\PublicKeyInterface;
use Tatum\Cryptography\Script\Opcodes;
use Tatum\Cryptography\Script\Parser\Operation;
use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\Script\ScriptType;
use Tatum\Cryptography\Buffertools\BufferInterface;

class PayToPubkey {
    /**
     * @var BufferInterface
     */
    private $publicKey;

    /**
     * @var bool
     */
    private $verify;

    /**
     * @var int
     */
    private $opcode;

    /**
     * PayToPubkey constructor.
     * @param int $opcode
     * @param BufferInterface $publicKey
     * @param bool $allowVerify
     */
    public function __construct(int $opcode, BufferInterface $publicKey, bool $allowVerify = false) {
        if ($opcode === Opcodes::OP_CHECKSIG) {
            $verify = false;
        } elseif ($allowVerify && $opcode === Opcodes::OP_CHECKSIGVERIFY) {
            $verify = true;
        } else {
            throw new \InvalidArgumentException("Malformed pay-to-pubkey script - invalid opcode");
        }

        $this->verify = $verify;
        $this->opcode = $opcode;
        $this->publicKey = $publicKey;
    }

    /**
     * @param Operation[] $chunks
     * @param bool $allowVerify
     * @return static
     */
    public static function fromDecodedScript(array $chunks, bool $allowVerify = false): PayToPubkey {
        if (count($chunks) !== 2 || !$chunks[0]->isPush() || $chunks[1]->isPush()) {
            throw new \InvalidArgumentException("Malformed pay-to-pubkey script");
        }

        return new PayToPubkey($chunks[1]->getOp(), $chunks[0]->getData(), $allowVerify);
    }

    /**
     * @param ScriptInterface $script
     * @param bool $allowVerify
     * @return PayToPubkey
     */
    public static function fromScript(ScriptInterface $script, bool $allowVerify = false): PayToPubkey {
        return static::fromDecodedScript($script->getScriptParser()->decode(), $allowVerify);
    }

    /**
     * @return string
     */
    public function getType(): string {
        return ScriptType::P2PK;
    }

    /**
     * @return int
     */
    public function getRequiredSigCount(): int {
        return 1;
    }

    /**
     * @return int
     */
    public function getKeyCount(): int {
        return 1;
    }

    /**
     * @return bool
     */
    public function isChecksigVerify(): bool {
        return $this->verify;
    }

    /**
     * @param PublicKeyInterface $publicKey
     * @return bool
     */
    public function checkInvolvesKey(PublicKeyInterface $publicKey): bool {
        return $publicKey->getBuffer()->equals($this->publicKey);
    }

    /**
     * @return BufferInterface
     */
    public function getKeyBuffer(): BufferInterface {
        return $this->publicKey;
    }
}
