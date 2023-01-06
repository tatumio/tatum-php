<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Serializer\Transaction;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Script\Opcodes;
use Tatum\Cryptography\Script\Script;
use Tatum\Cryptography\Serializer\Types;
use Tatum\Cryptography\Transaction\TransactionInput;
use Tatum\Cryptography\Transaction\TransactionInputInterface;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Parser;

class TransactionInputSerializer {
    /**
     * @var OutPointSerializerInterface
     */
    private $outpointSerializer;

    /**
     * @var \Tatum\Cryptography\Buffertools\Types\VarString
     */
    private $varstring;

    /**
     * @var \Tatum\Cryptography\Buffertools\Types\Uint32
     */
    private $uint32le;

    /**
     * @var Opcodes
     */
    private $opcodes;

    /**
     * TransactionInputSerializer constructor.
     * @param OutPointSerializerInterface $outPointSerializer
     * @param Opcodes|null $opcodes
     */
    public function __construct(OutPointSerializerInterface $outPointSerializer, Opcodes $opcodes = null) {
        $this->outpointSerializer = $outPointSerializer;
        $this->varstring = Types::varstring();
        $this->uint32le = Types::uint32le();
        $this->opcodes = $opcodes ?: new Opcodes();
    }

    /**
     * @param TransactionInputInterface $input
     * @return BufferInterface
     */
    public function serialize(TransactionInputInterface $input): BufferInterface {
        return new Buffer(
            $this->outpointSerializer->serialize($input->getOutPoint())->getBinary() .
                $this->varstring->write($input->getScript()->getBuffer()) .
                $this->uint32le->write($input->getSequence())
        );
    }

    /**
     * @param Parser $parser
     * @return TransactionInputInterface
     * @throws \Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange
     * @throws \Exception
     */
    public function fromParser(Parser $parser): TransactionInputInterface {
        return new TransactionInput(
            $this->outpointSerializer->fromParser($parser),
            new Script($this->varstring->read($parser), $this->opcodes),
            (int) $this->uint32le->read($parser)
        );
    }

    /**
     * @param BufferInterface $string
     * @return TransactionInputInterface
     * @throws \Tatum\Cryptography\Buffertools\Exceptions\ParserOutOfRange
     * @throws \Exception
     */
    public function parse(BufferInterface $string): TransactionInputInterface {
        return $this->fromParser(new Parser($string));
    }
}
