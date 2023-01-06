<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Providers;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Web3\RequestManagers\RequestManager;

class Provider {
    /**
     * requestManager
     *
     * @var \Tatum\Cryptography\Web3\RequestManagers\RequestManager
     */
    protected $requestManager;

    /**
     * isBatch
     *
     * @var bool
     */
    protected $isBatch = false;

    /**
     * batch
     *
     * @var array
     */
    protected $batch = [];

    /**
     * rpcVersion
     *
     * @var string
     */
    protected $rpcVersion = "2.0";

    /**
     * id
     *
     * @var int
     */
    protected $id = 0;

    /**
     * construct
     *
     * @param \Tatum\Cryptography\Web3\RequestManagers\RequestManager $requestManager
     * @return void
     */
    public function __construct(RequestManager $requestManager) {
        $this->requestManager = $requestManager;
    }

    /**
     * get
     *
     * @param string $name
     * @return mixed
     */
    public function __get($name) {
        $method = "get" . ucfirst($name);

        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], []);
        }
        return false;
    }

    /**
     * set
     *
     * @param string $name
     * @param mixed $value
     * @return bool
     */
    public function __set($name, $value) {
        $method = "set" . ucfirst($name);

        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], [$value]);
        }
        return false;
    }

    /**
     * getRequestManager
     *
     * @return \Tatum\Cryptography\Web3\RequestManagers\RequestManager
     */
    public function getRequestManager() {
        return $this->requestManager;
    }

    /**
     * getIsBatch
     *
     * @return bool
     */
    public function getIsBatch() {
        return $this->isBatch;
    }
}
