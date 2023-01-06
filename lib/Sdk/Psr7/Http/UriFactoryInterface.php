<?php

namespace Tatum\Sdk\Psr7\Http;
!defined("TATUM-SDK") && exit();

interface UriFactoryInterface {
    /**
     * Create a new URI.
     *
     * @param string $uri
     *
     * @return UriInterface
     *
     * @throws \InvalidArgumentException If the given URI cannot be parsed.
     */
    public function createUri(string $uri = ""): UriInterface;
}
