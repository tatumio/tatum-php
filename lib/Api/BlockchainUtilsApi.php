<?php

/**
 * Implementation of BlockchainUtils API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;

use InvalidArgumentException;
use Tatum\Sdk\ApiException;
use Tatum\Sdk\ObjectSerializer;

/**
 * BlockchainUtils API
 */
class BlockchainUtilsApi extends AbstractApi {
    /**
     * Estimate the block height for a future point in time
     *
     * @param string $chain The blockchain to work with
     * @param string $date The date and time in the ISO 8601 standard format
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return float
     */
    public function getAuctionEstimatedTime(string $chain, string $date) { 
        // Resource path
        $resourcePath = "/v3/blockchain/auction/time/{chain}/{date}";
        $resourcePath = str_replace("{" . "chain" . "}", ObjectSerializer::toPathValue($chain), $resourcePath);
        $resourcePath = str_replace("{" . "date" . "}", ObjectSerializer::toPathValue($date), $resourcePath);

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var float $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "float"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "float",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Get the blockchain address of a smart contract by the deployment transaction ID
     *
     * @param string $chain The blockchain to work with
     * @param string $hash The ID (hash) of the deployment transaction
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\SCGetContractAddress200Response
     */
    public function sCGetContractAddress(string $chain, string $hash) { 
        // Resource path
        $resourcePath = "/v3/blockchain/sc/address/{chain}/{hash}";
        $resourcePath = str_replace("{" . "chain" . "}", ObjectSerializer::toPathValue($chain), $resourcePath);
        $resourcePath = str_replace("{" . "hash" . "}", ObjectSerializer::toPathValue($hash), $resourcePath);

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\SCGetContractAddress200Response $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\SCGetContractAddress200Response"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\SCGetContractAddress200Response",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
}