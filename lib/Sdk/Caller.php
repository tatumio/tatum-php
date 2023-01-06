<?php

/**
 * Tatum SDK Caller
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */
namespace Tatum\Sdk;
!defined("TATUM-SDK") && exit();

use Tatum\Sdk\Config;
use Tatum\Sdk\Caller as C;

class Caller {
    /**
     * Caller configuration object
     *
     * @var \Tatum\Sdk\Config
     */
    protected $_config;

    /**
     * API operations
     *
     * @var \Tatum\Sdk\Caller\Api
     */
    protected $_api = null;

    /**
     * Local operations
     *
     * @var \Tatum\Sdk\Caller\Local
     */
    protected $_local = null;

    /**
     * SDK caller
     *
     * @param string  $apiKey    Tatum API Key
     * @param boolean $isMainnet Is the API Key associated with the MainNet?
     */
    public function __construct(string $apiKey, bool $isMainnet = false) {
        $this->_config = new Config($apiKey, !!$isMainnet);
    }

    /**
     * SDK Configuration
     *
     * @return \Tatum\Sdk\Config
     */
    public function config() {
        return $this->_config;
    }

    /**
     * API operations
     *
     * @return \Tatum\Sdk\Caller\Api
     */
    public function api(): C\Api {
        if (null === $this->_api) {
            $this->_api = new C\Api($this);
        }

        return $this->_api;
    }

    /**
     * Local operations
     *
     * @return \Tatum\Sdk\Caller\Local
     */
    public function local(): C\Local {
        if (null === $this->_local) {
            $this->_local = new C\Local($this);
        }

        return $this->_local;
    }
}
