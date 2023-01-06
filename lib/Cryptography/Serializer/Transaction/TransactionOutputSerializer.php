<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Serializer\Transaction;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Script\Opcodes;
use Tatum\Cryptography\Script\Script;
use Tatum\Cryptography\Serializer\Types;
use Tatum\Cryptography\Transaction\TransactionOutput;
use Tatum\Cryptography\Transaction\TransactionOutputInterface;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Parser;

class TransactionOutputSerializer {
    /**
     * @var \Tatum\Cryptography\Buffertools\Types\Uint64
     */
    private $uint64le;

    /**
     * @var \Tatum\Cryptography\Buffertools\Types\VarString
     */
    private $varstring;

    /**
     * @var Opcodes
     */
    private $opcodes;

    /**
     * TransactionOutputSerializer constructor.
     * @param Opcodes|null $opcodes
     */
    public function __construct(Opcodes $opcodes = null) {
        $this->uint64le = Types::uint64le();
        $this->varstring = Types::varstring();
        $this->opcodes = $opcodes ?: new Opcodes();
    }

    /**
     * @param TransactionOutputInterface $output
     * @return BufferInterface
     */
    public function serialize(TransactionOutputInterface $output): BufferInterface {
        return new Buffer(
            $this->uint64le->write($output->getValue()) . $this->varstring->write($output->getScript()->getBuffer())
        );
    }

    /**
     * @param Parser $parser
     * @return TransactionOutputInterface
     * @throws \Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange
     */
    public function fromParser(Parser $parser): TransactionOutputInterface {
        return new TransactionOutput(
            (int) $this->uint64le->read($parser),
            new Script($this->varstring->read($parser), $this->opcodes)
        );
    }

    /**
     * @param BufferInterface $string
     * @return TransactionOutputInterface
     * @throws \Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange
     */
    public function parse(BufferInterface $string): TransactionOutputInterface {
        return $this->fromParser(new Parser($string));
    }
}
