<?php

declare(strict_types=1);

/**
 * Request exception
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */
namespace Tatum\Sdk\Psr7\Exception;

use RuntimeException;
use Tatum\Sdk\Psr7\Response;

/**
 * Exception thrown on CURL execution
 */
class RequestException extends RuntimeException {
    /**
     * Client response
     *
     * @var Response
     */
    protected Response $_response;

    /**
     * Request exception
     *
     * @param Response $response     Response
     * @param string   $errorMessage (optional) Error message
     */
    public function __construct(Response $response, $errorMessage = "") {
        parent::__construct(
            is_string($errorMessage) && strlen($errorMessage) ? $errorMessage : $response->getReasonPhrase(),
            $response->getStatusCode()
        );

        $this->_response = $response;
    }

    /**
     * Get method response
     *
     * @return Response
     */
    public function getResponse(): Response {
        return $this->_response;
    }
}
