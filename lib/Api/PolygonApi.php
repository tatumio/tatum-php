<?php

/**
 * Implementation of Polygon API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @see       https://apidoc.tatum.io
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * Polygon API
 */
class PolygonApi extends AbstractApi {
    /**
     * Broadcast signed Polygon transaction
     *
     * @param \Tatum\Model\BroadcastKMS $broadcast_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function polygonBroadcast(\Tatum\Model\BroadcastKMS $broadcast_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/polygon/broadcast", [], $rHeaders, [], $broadcast_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Generate Polygon account address from Extended public key
     *
     * @param string $xpub Extended public key of wallet.
     * @param float $index Derivation index of desired address to be generated.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GeneratedAddressMatic
     */
    public function polygonGenerateAddress(string $xpub, float $index) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\GeneratedAddressMatic $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/polygon/address/{xpub}/{index}", ["xpub" => $xpub, "index" => $index]), [], $rHeaders, []
            ), 
            "\Tatum\Model\GeneratedAddressMatic"
        );
            
        return $result;
    }
    
    /**
     * Generate Polygon private key
     *
     * @param \Tatum\Model\PrivKeyRequest $priv_key_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PrivKey
     */
    public function polygonGenerateAddressPrivateKey(\Tatum\Model\PrivKeyRequest $priv_key_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\PrivKey $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/polygon/wallet/priv", [], $rHeaders, [], $priv_key_request
            ), 
            "\Tatum\Model\PrivKey"
        );
            
        return $result;
    }
    
    /**
     * Generate Polygon wallet
     *
     * @param string|null $mnemonic Mnemonic to use for generation of extended public and private keys.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Wallet
     */
    public function polygonGenerateWallet(string $mnemonic = null) {
        if (isset($mnemonic) && strlen($mnemonic) > 500) {
            throw new IAE('Invalid length for "$mnemonic" when calling PolygonApi.polygonGenerateWallet, must be smaller than or equal to 500');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Wallet $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/polygon/wallet", [
                    "mnemonic" => isset($mnemonic) ? S::toQueryValue($mnemonic) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Wallet"
        );
            
        return $result;
    }
    
    /**
     * Get Polygon Account balance
     *
     * @param string $address Account address you want to get balance of
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\MaticBalance
     */
    public function polygonGetBalance(string $address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\MaticBalance $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/polygon/account/balance/{address}", ["address" => $address]), [], $rHeaders, []
            ), 
            "\Tatum\Model\MaticBalance"
        );
            
        return $result;
    }
    
    /**
     * Get Polygon block by hash
     *
     * @param string $hash Block hash or block number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthBlock
     */
    public function polygonGetBlock(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\EthBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/polygon/block/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\EthBlock"
        );
            
        return $result;
    }
    
    /**
     * Get current block number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function polygonGetCurrentBlock() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/polygon/block/current", [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Get Polygon Transaction
     *
     * @param string $hash Transaction hash
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PolygonTx
     */
    public function polygonGetTransaction(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\PolygonTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/polygon/transaction/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\PolygonTx"
        );
            
        return $result;
    }
    
    /**
     * Get Polygon transactions by address
     *
     * @param string $address Account address you want to get balance of
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param float|null $from Transactions from this block onwards will be included.
     * @param float|null $to Transactions up to this block will be included.
     * @param string|'DESC' $sort Sorting of the data. ASC - oldest first, DESC - newest first.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PolygonTx[]
     */
    public function polygonGetTransactionByAddress(string $address, float $page_size, float $offset = null, float $from = null, float $to = null, string $sort = 'DESC') {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling PolygonApi.polygonGetTransactionByAddress, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling PolygonApi.polygonGetTransactionByAddress, must be bigger than or equal to 1.');
        }

        if (isset($from) && $from < 0) {
            throw new IAE('Invalid value for "$from" when calling PolygonApi.polygonGetTransactionByAddress, must be bigger than or equal to 0.');
        }

        if (isset($to) && $to < 0) {
            throw new IAE('Invalid value for "$to" when calling PolygonApi.polygonGetTransactionByAddress, must be bigger than or equal to 0.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\PolygonTx[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/polygon/account/transaction/{address}", ["address" => $address]), [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                    "from" => isset($from) ? S::toQueryValue($from) : null,
                    "to" => isset($to) ? S::toQueryValue($to) : null,
                    "sort" => S::toQueryValue($sort),
                ], $rHeaders, []
            ), 
            "\Tatum\Model\PolygonTx[]"
        );
            
        return $result;
    }
    
    /**
     * Get count of outgoing Polygon transactions
     *
     * @param string $address address
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function polygonGetTransactionCount(string $address) {
        if (strlen($address) > 42) {
            throw new IAE('Invalid length for "$address" when calling PolygonApi.polygonGetTransactionCount, must be smaller than or equal to 42');
        }

        if (strlen($address) < 42) {
            throw new IAE('Invalid length for "$address" when calling PolygonApi.polygonGetTransactionCount, must be bigger than or equal to 42');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/polygon/transaction/count/{address}", ["address" => $address]), [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Invoke a method in a smart contract on Polygon
     *
     * @param \Tatum\Model\CallPolygonSmartContractMethod $call_polygon_smart_contract_method 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response
     */
    public function polygonSmartcontractCallPolygonSmartContractMethod(\Tatum\Model\CallPolygonSmartContractMethod $call_polygon_smart_contract_method) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/polygon/smartcontract", [], $rHeaders, [], $call_polygon_smart_contract_method
            ), 
            "\Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response"
        );
            
        return $result;
    }
    
    /**
     * Invoke a method in a smart contract on Polygon
     *
     * @param \Tatum\Model\CallPolygonSmartContractMethodCaller $call_polygon_smart_contract_method_caller 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response
     */
    public function polygonSmartcontractCallPolygonSmartContractMethodCaller(\Tatum\Model\CallPolygonSmartContractMethodCaller $call_polygon_smart_contract_method_caller) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/polygon/smartcontract", [], $rHeaders, [], $call_polygon_smart_contract_method_caller
            ), 
            "\Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response"
        );
            
        return $result;
    }
    
    /**
     * Invoke a method in a smart contract on Polygon
     *
     * @param \Tatum\Model\CallPolygonSmartContractMethodKMS $call_polygon_smart_contract_method_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response
     */
    public function polygonSmartcontractCallPolygonSmartContractMethodKMS(\Tatum\Model\CallPolygonSmartContractMethodKMS $call_polygon_smart_contract_method_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/polygon/smartcontract", [], $rHeaders, [], $call_polygon_smart_contract_method_kms
            ), 
            "\Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response"
        );
            
        return $result;
    }
    
    /**
     * Invoke a method in a smart contract on Polygon
     *
     * @param \Tatum\Model\CallPolygonSmartContractReadMethod $call_polygon_smart_contract_read_method 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response
     */
    public function polygonSmartcontractCallPolygonSmartContractReadMethod(\Tatum\Model\CallPolygonSmartContractReadMethod $call_polygon_smart_contract_read_method) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/polygon/smartcontract", [], $rHeaders, [], $call_polygon_smart_contract_read_method
            ), 
            "\Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response"
        );
            
        return $result;
    }
    
    /**
     * Send MATIC from account to account
     *
     * @param \Tatum\Model\TransferPolygonBlockchain $transfer_polygon_blockchain 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
     */
    public function polygonTransactionTransferPolygonBlockchain(\Tatum\Model\TransferPolygonBlockchain $transfer_polygon_blockchain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/polygon/transaction", [], $rHeaders, [], $transfer_polygon_blockchain
            ), 
            "\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Send MATIC from account to account
     *
     * @param \Tatum\Model\TransferPolygonBlockchainKMS $transfer_polygon_blockchain_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
     */
    public function polygonTransactionTransferPolygonBlockchainKMS(\Tatum\Model\TransferPolygonBlockchainKMS $transfer_polygon_blockchain_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/polygon/transaction", [], $rHeaders, [], $transfer_polygon_blockchain_kms
            ), 
            "\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Web3 HTTP driver
     *
     * @param string $x_api_key Tatum X-API-Key used for authorization.
     * @param object $body 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return object
     */
    public function polygonWeb3Driver(string $x_api_key, object $body) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var object $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", S::parse("/v3/polygon/web3/{xApiKey}", ["xApiKey" => $x_api_key]), [], $rHeaders, [], $body
            ), 
            "object"
        );
            
        return $result;
    }
    
}
