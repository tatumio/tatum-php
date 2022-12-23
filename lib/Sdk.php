<?php

/**
 * Tatum SDK
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum;

use Tatum\Sdk\Caller;

class Sdk {
    /**
     * MainNet API Key
     *
     * @var string
     */
    protected $_apiKeyMainnet;

    /**
     * TestNet API Key
     *
     * @var string
     */
    protected $_apiKeyTestnet;

    /**
     * Mainnet API key
     *
     * @var \Tatum\Sdk\Caller
     */
    protected $_callerMainnet = null;

    /**
     * Testnet API key
     *
     * @var \Tatum\Sdk\Caller
     */
    protected $_callerTestnet = null;

    /**
     * Tatum SDK
     *
     * @see https://apidoc.tatum.io/#section/Authentication
     * @var string $apiKeyMainnet (optional) MainNet Tatum API Key; default <b>empty string</b>
     * @var string $apiKeyTestnet (optional) TestNet Tatum API Key; default <b>empty string</b>
     */
    public function __construct(string $apiKeyMainnet = "", string $apiKeyTestnet = "") {
        $this->_apiKeyMainnet = $apiKeyMainnet;
        $this->_apiKeyTestnet = $apiKeyTestnet;
    }

    /**
     * MainNet operations
     *
     * @return \Tatum\Sdk\Caller
     */
    public function mainnet(): Caller {
        if (null === $this->_callerMainnet) {
            $this->_callerMainnet = new Caller($this->_apiKeyMainnet, true);
        }

        return $this->_callerMainnet;
    }

    /**
     * TestNet operations
     *
     * @return \Tatum\Sdk\Caller
     */
    public function testnet(): Caller {
        if (null === $this->_callerTestnet) {
            $this->_callerTestnet = new Caller($this->_apiKeyTestnet, false);
        }

        return $this->_callerTestnet;
    }
}
