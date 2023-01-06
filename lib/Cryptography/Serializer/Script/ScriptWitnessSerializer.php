<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Serializer\Script;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Script\ScriptWitness;
use Tatum\Cryptography\Script\ScriptWitnessInterface;
use Tatum\Cryptography\Serializer\Types;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Parser;

class ScriptWitnessSerializer {
    /**
     * @var \Tatum\Cryptography\Buffertools\Types\VarString
     */
    private $varstring;

    /**
     * @var \Tatum\Cryptography\Buffertools\Types\VarInt
     */
    private $varint;

    public function __construct() {
        $this->varstring = Types::varstring();
        $this->varint = Types::varint();
    }

    /**
     * @param Parser $parser
     * @return ScriptWitnessInterface
     */
    public function fromParser(Parser $parser): ScriptWitnessInterface {
        $size = $this->varint->read($parser);
        $entries = [];
        for ($j = 0; $j < $size; $j++) {
            $entries[] = $this->varstring->read($parser);
        }

        return new ScriptWitness(...$entries);
    }

    /**
     * @param ScriptWitnessInterface $witness
     * @return BufferInterface
     */
    public function serialize(ScriptWitnessInterface $witness): BufferInterface {
        $binary = $this->varint->write($witness->count());
        foreach ($witness as $value) {
            $binary .= $this->varstring->write($value);
        }

        return new Buffer($binary);
    }
}
