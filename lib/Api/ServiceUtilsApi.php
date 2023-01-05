<?php

/**
 * Implementation of ServiceUtils API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * ServiceUtils API
 */
class ServiceUtilsApi extends AbstractApi {
    /**
     * Freeze API Key
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function freezeApiKey() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", "/v3/tatum/freeze", [], $rHeaders, []
            )
        );
    }
    
    /**
     * Get information about your credit consumption for the last month
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Consumption[]
     */
    public function getCredits() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Consumption[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/tatum/usage", [], $rHeaders, []
            ), 
            "\Tatum\Model\Consumption[]"
        );
            
        return $result;
    }
    
    /**
     * Get API version
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GetVersion200Response
     */
    public function getVersion() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\GetVersion200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/tatum/version", [], $rHeaders, []
            ), 
            "\Tatum\Model\GetVersion200Response"
        );
            
        return $result;
    }
    
    /**
     * Unfreeze API Key
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function unfreezeApiKey() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "DELETE", "/v3/tatum/freeze", [], $rHeaders, []
            )
        );
    }
    
}
