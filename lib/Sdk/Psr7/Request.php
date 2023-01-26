<?php

declare(strict_types=1);

namespace Tatum\Sdk\Psr7;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException;
use Tatum\Sdk\Psr7\Http\RequestInterface;
use Tatum\Sdk\Psr7\Http\StreamInterface;
use Tatum\Sdk\Psr7\Http\UriInterface;

/**
 * PSR-7 request implementation
 */
class Request implements RequestInterface {
    use MessageTrait;

    /**
     * URL template
     *
     * @var string|null
     */
    protected $_template = null;

    /**
     * API package
     *
     * @var string
     */
    protected $_package = "Core";

    /** @var string */
    private $_method;

    /** @var string|null */
    private $_requestTarget;

    /** @var UriInterface */
    private $uri;

    /** @var StreamInterface|null */
    private $_stream = null;

    private $_files = [];

    /**
     * @param string                               $method  HTTP method
     * @param string|UriInterface                  $uri     URI
     * @param array<string, string|string[]>       $headers Request headers
     * @param string|resource|StreamInterface|null $body    Request body
     * @param string                               $version Protocol version
     */
    public function __construct(string $method, $uri, array $headers = [], $body = null, string $version = "1.1") {
        $this->assertMethod($method);

        $this->_method = strtoupper($method);
        $this->uri = $uri instanceof UriInterface ? $uri : new Uri($uri);
        $this->setHeaders($headers);

        if (!isset($this->headerNames["host"])) {
            $this->updateHostFromUri();
        }

        do {
            // File upload
            if (is_array($body) && current($body) instanceof \CURLFile) {
                $this->_files = $body;
                break;
            }

            // Regular stream
            $this->_stream = Utils::streamFor($body);
        } while (false);

        $this->protocol = $version;
    }

    /**
     * Set a header
     *
     * @param string $headerName  Header name
     * @param string $headerValue Header value
     */
    public function setHeader($headerName, $headerValue = null) {
        $headers = $this->getHeaders();

        // Remove the header
        if (null === $headerValue) {
            unset($headers[$headerName]);
        } else {
            $headers[$headerName] = $headerValue;
        }

        $this->setHeaders($headers);
    }

    /**
     * Set the URL template
     *
     * @param string|null $template URL Template
     * @return $this
     */
    public function setTemplate(?string $template) {
        $this->_template = null !== $template ? trim($template) : $template;

        return $this;
    }

    /**
     * Get the URL template
     *
     * @return string|null
     */
    public function getTemplate() {
        return $this->_template;
    }

    /**
     * Set the API package
     *
     * @param string $package Package
     * @return $this
     */
    public function setPackage(string $package) {
        // Remove paranthesis contents and the @ character
        $this->_package = trim(preg_replace("%\s*\([^\)]*\)|[@]+%", "", $package));

        return $this;
    }

    /**
     * Get the API package
     *
     * @return string
     */
    public function getPackage() {
        return $this->_package;
    }

    /**
     * Associative array of ["file name" => {CURLFile object}]
     *
     * @return \CURLFile[]
     */
    public function getFiles() {
        return $this->_files;
    }

    /**
     * Get the stream
     *
     * @return StreamInterface|null
     */
    public function getStream() {
        return $this->_stream;
    }

    public function getRequestTarget(): string {
        if ($this->_requestTarget !== null) {
            return $this->_requestTarget;
        }

        $target = $this->uri->getPath();
        if ($target === "") {
            $target = "/";
        }
        if ($this->uri->getQuery() != "") {
            $target .= "?" . $this->uri->getQuery();
        }

        return $target;
    }

    public function withRequestTarget($requestTarget): RequestInterface {
        if (preg_match("#\s#", $requestTarget)) {
            throw new InvalidArgumentException("Invalid request target provided; cannot contain whitespace");
        }

        $new = clone $this;
        $new->_requestTarget = $requestTarget;
        return $new;
    }

    public function getMethod(): string {
        return $this->_method;
    }

    public function withMethod($method): RequestInterface {
        $this->assertMethod($method);
        $new = clone $this;
        $new->_method = strtoupper($method);
        return $new;
    }

    public function getUri(): UriInterface {
        return $this->uri;
    }

    public function withUri(UriInterface $uri, $preserveHost = false): RequestInterface {
        if ($uri === $this->uri) {
            return $this;
        }

        $new = clone $this;
        $new->uri = $uri;

        if (!$preserveHost || !isset($this->headerNames["host"])) {
            $new->updateHostFromUri();
        }

        return $new;
    }

    private function updateHostFromUri(): void {
        $host = $this->uri->getHost();

        if ($host == "") {
            return;
        }

        if (($port = $this->uri->getPort()) !== null) {
            $host .= ":" . $port;
        }

        if (isset($this->headerNames["host"])) {
            $header = $this->headerNames["host"];
        } else {
            $header = "Host";
            $this->headerNames["host"] = "Host";
        }

        // Ensure Host is the first header.
        // See: http://tools.ietf.org/html/rfc7230#section-5.4
        $this->headers = [$header => [$host]] + $this->headers;
    }

    /**
     * @param mixed $method
     */
    private function assertMethod($method): void {
        if (!is_string($method) || $method === "") {
            throw new InvalidArgumentException("Method must be a non-empty string.");
        }
    }
}
