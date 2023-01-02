<?php

/**
 * Tatum SDK Debugger
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */
namespace Tatum\Sdk;

use Tatum\Sdk\Config;
use Tatum\Sdk\Psr7\Request;

class Debugger {
    /**
     * Configuration object
     *
     * @var \Tatum\Sdk\Config
     */
    protected $_config;

    /**
     * File handler
     *
     * @var resource|bool|null
     */
    protected $_fileHandler = null;

    /**
     * Debugger
     *
     * @param \Tatum\Sdk\Config $config
     */
    public function __construct(Config $config) {
        $this->_config = $config;
    }

    /**
     * Initialize the file handler once if the debugger is active
     *
     * @return bool|resource
     */
    protected function _init() {
        if ($this->_config->getDebug() && null === $this->_fileHandler) {
            $this->_fileHandler = @fopen($this->_config->getDebugFile(), "w");
        }

        return $this->_fileHandler;
    }

    /**
     * Print debug info
     *
     * @param mixed $data
     * @return void
     */
    public function print($data) {
        if ($this->_init()) {
            fwrite($this->_fileHandler, (is_string($data) ? $data : var_export($data, true)) . PHP_EOL);
        }
    }

    /**
     * Save a log delimiter tag
     *
     * @param string $tag
     * @param bool $endTag
     * @return void
     */
    public function logTag(string $tag, bool $endTag = false) {
        $this->print(
            str_pad(" <" . ($endTag ? "/" : "") . "$tag> ", 80, "#", STR_PAD_BOTH) . ($endTag ? PHP_EOL . PHP_EOL : "")
        );
    }

    /**
     * Log a cURL request
     *
     * @param \Tatum\Sdk\Psr7\Request $request
     * @return void
     */
    public function logRequest(Request $request) {
        $curl = "REQUEST:\n";
        $curl .= "curl --location --request {$request->getMethod()} '{$request->getUri()}'\n";
        foreach ($request->getHeaders() as $headerName => $headerValue) {
            // Hide the API key
            if ("x-api-key" === $headerName) {
                $headerValue = [str_repeat("*", 8)];
            }

            $curl .= "--header '{$headerName}: " . implode("; ", $headerValue) . "'\n";
        }

        $this->print($curl);
    }

    /**
     * Log a cURL response
     *
     * @param int    $statusCode
     * @param array  $headers
     * @param string $body
     * @param string $error
     * @return void
     */
    public function logResponse(int $statusCode, $headers, $body, $error) {
        // Status code
        $response = "RESPONSE:\n";
        $response .= "Status code: $statusCode\n";

        // Response headers
        $response .= "Headers:\n";
        foreach ($headers as $headerName => $headerValue) {
            if (0 !== strpos($headerName, "Content")) {
                continue;
            }
            $response .= " * {$headerName}: {$headerValue}\n";
        }

        // Error
        if ($error) {
            $response .= "Error: {$error}\n";
        }

        // Response body
        $response .= "Body:\n";

        // Attempt pretty print
        $bodyJson = @json_decode($body, true);
        if (null !== $bodyJson) {
            $response .= json_encode($bodyJson, JSON_PRETTY_PRINT);
        } else {
            $response .= $body;
        }

        $this->print($response);
    }
}
