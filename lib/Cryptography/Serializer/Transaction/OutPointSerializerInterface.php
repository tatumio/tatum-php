<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Serializer\Transaction;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Transaction\OutPointInterface;
use Tatum\Cryptography\Buffertools\BufferInterface;
use Tatum\Cryptography\Buffertools\Parser;

interface OutPointSerializerInterface {
    /**
     * @param OutPointInterface $outpoint
     * @return BufferInterface
     */
    public function serialize(OutPointInterface $outpoint): BufferInterface;

    /**
     * @param Parser $parser
     * @return OutPointInterface
     */
    public function fromParser(Parser $parser): OutPointInterface;

    /**
     * @param BufferInterface $data
     * @return OutPointInterface
     */
    public function parse(BufferInterface $data): OutPointInterface;
}
