<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Serializer\Signature;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Ecc\Crypto\Signature\SignatureInterface;

class DerSignatureSerializer implements DerSignatureSerializerInterface {
    /**
     * @var Der\Parser
     */
    private $parser;

    /**
     * @var Der\Formatter
     */
    private $formatter;

    public function __construct() {
        $this->parser = new Der\Parser();
        $this->formatter = new Der\Formatter();
    }

    /**
     * @param SignatureInterface $signature
     * @return string
     */
    public function serialize(SignatureInterface $signature): string {
        return $this->formatter->serialize($signature);
    }

    /**
     * @param string $binary
     * @return SignatureInterface
     * @throws \Tatum\Cryptography\FG\ASN1\Exception\ParserException
     */
    public function parse(string $binary): SignatureInterface {
        return $this->parser->parse($binary);
    }
}
