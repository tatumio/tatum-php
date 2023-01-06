<?php

declare(strict_types=1);

namespace Tatum\Sdk\Psr7;
!defined("TATUM-SDK") && exit();

use Tatum\Sdk\Psr7\Http\StreamInterface;

/**
 * Lazily reads or writes to a file that is opened only after an IO operation
 * take place on the stream.
 */
final class LazyOpenStream implements StreamInterface {
    use StreamDecoratorTrait;

    /** @var string */
    private $filename;

    /** @var string */
    private $mode;

    /**
     * @param string $filename File to lazily open
     * @param string $mode     fopen mode to use when opening the stream
     */
    public function __construct(string $filename, string $mode) {
        $this->filename = $filename;
        $this->mode = $mode;
    }

    /**
     * Creates the underlying stream lazily when required.
     */
    protected function createStream(): StreamInterface {
        return Utils::streamFor(Utils::tryFopen($this->filename, $this->mode));
    }
}
