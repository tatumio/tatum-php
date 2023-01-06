<?php

/**
 * This file is part of web3.php package
 *
 * @author Peter Lai
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 */

namespace Tatum\Cryptography\Web3\RequestManagers;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException;
use RuntimeException;
use Tatum\Cryptography\Web3\RequestManagers\RequestManager;
use Tatum\Cryptography\Web3\RequestManagers\IRequestManager;

class HttpRequestManager extends RequestManager implements IRequestManager {
    /**
     * Constructor
     *
     * @param string $host
     * @param int $timeout
     * @return void
     */
    public function __construct($host, $timeout = 1) {
        parent::__construct($host, $timeout);
    }

    /**
     * Send payload
     *
     * @param string   $body     Payload string
     * @param callable $callback Callback
     * @return void
     */
    public function sendPayload($body, $callback) {
        if (!is_string($body)) {
            throw new InvalidArgumentException("Payload must be string");
        }

        // Prepare the CURL request
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->host,
            CURLOPT_FAILONERROR => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "utf-8",
            CURLOPT_MAXREDIRS => 5,
            CURLOPT_TIMEOUT => $this->timeout,
            CURLOPT_CONNECTTIMEOUT => $this->timeout,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_HTTPHEADER => [
                "content-type" => "application/json"
            ]
        ]);

        // Get the result
        $stream = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        do {
            // Connection error
            if (strlen($err)) {
                call_user_func($callback, new RuntimeException("Request error: " . $err), null);
                break;
            }

            // Prepare the json response
            $json = json_decode($stream);
            if (JSON_ERROR_NONE !== json_last_error()) {
                call_user_func(
                    $callback,
                    new InvalidArgumentException("json_decode error: " . json_last_error_msg()),
                    null
                );
                break;
            }

            // batch results
            if (is_array($json)) {
                $results = [];
                $errors = [];

                foreach ($json as $result) {
                    if (property_exists($result, "result")) {
                        $results[] = $result->result;
                    } else {
                        if (property_exists($result, "error")) {
                            $error = $result->error;
                            $errors[] = new RuntimeException(
                                mb_ereg_replace("Error: ", "", $error->message),
                                $error->code
                            );
                        } else {
                            $results[] = null;
                        }
                    }
                }

                call_user_func($callback, count($errors) > 0 ? $errors : null, $results);
                break;
            }

            // Valid result
            if (property_exists($json, "result")) {
                call_user_func($callback, null, $json->result);
                break;
            }

            // Server error
            if (property_exists($json, "error")) {
                $error = $json->error;

                call_user_func(
                    $callback,
                    new RuntimeException(mb_ereg_replace("Error: ", "", $error->message), $error->code),
                    null
                );
                break;
            }

            // Unknown error
            call_user_func($callback, new RuntimeException("Something went wrong"), null);
        } while (false);
    }
}
