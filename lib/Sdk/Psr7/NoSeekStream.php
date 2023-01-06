<?php

declare(strict_types=1);

namespace Tatum\Sdk\Psr7;
!defined("TATUM-SDK") && exit();

use Tatum\Sdk\Psr7\Http\StreamInterface;

/**
 * Stream decorator that prevents a stream from being seeked.
 */
final class NoSeekStream implements StreamInterface {
    use StreamDecoratorTrait;

    /** @var StreamInterface */
    private $stream;

    public function seek($offset, $whence = SEEK_SET): void {
        throw new \RuntimeException("Cannot seek a NoSeekStream");
    }

    public function isSeekable(): bool {
        return false;
    }
}
