<?php

/**
 * Implementation of Cardano API
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
 * Cardano API
 */
class CardanoApi extends AbstractApi {
    /**
     * Broadcast signed Ada transaction
     *
     * @param \Tatum\Model\BroadcastKMS $broadcast_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function adaBroadcast(\Tatum\Model\BroadcastKMS $broadcast_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ada/broadcast", [], $rHeaders, [], $broadcast_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Generate Ada deposit address from Extended public key
     *
     * @param string $xpub Extended public key of a wallet.
     * @param float $index Derivation index of the desired address to be generated.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AdaGenerateAddress200Response
     */
    public function adaGenerateAddress(string $xpub, float $index) {
        if ($index < 0) {
            throw new IAE('Invalid value for "$index" when calling CardanoApi.adaGenerateAddress, must be bigger than or equal to 0.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\AdaGenerateAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ada/address/{xpub}/{index}", ["xpub" => $xpub, "index" => $index]), [], $rHeaders, []
            ), 
            "\Tatum\Model\AdaGenerateAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Generate Ada private key
     *
     * @param \Tatum\Model\PrivKeyRequest $priv_key_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PrivKey
     */
    public function adaGenerateAddressPrivateKey(\Tatum\Model\PrivKeyRequest $priv_key_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\PrivKey $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ada/wallet/priv", [], $rHeaders, [], $priv_key_request
            ), 
            "\Tatum\Model\PrivKey"
        );
            
        return $result;
    }
    
    /**
     * Generate Ada wallet
     *
     * @param string|null $mnemonic Mnemonic to use for generation of extended public and private keys.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Wallet
     */
    public function adaGenerateWallet(string $mnemonic = null) {
        if (isset($mnemonic) && strlen($mnemonic) > 500) {
            throw new IAE('Invalid length for "$mnemonic" when calling CardanoApi.adaGenerateWallet, must be smaller than or equal to 500');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Wallet $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/ada/wallet", [
                    "mnemonic" => isset($mnemonic) ? S::toQueryValue($mnemonic) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Wallet"
        );
            
        return $result;
    }
    
    /**
     * Gets a Ada account by address
     *
     * @param string $address Address
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return array[]
     */
    public function adaGetAccount(string $address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var array[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ada/account/{address}", ["address" => $address]), [], $rHeaders, []
            ), 
            "array[]"
        );
            
        return $result;
    }
    
    /**
     * Get Block by hash or height
     *
     * @param string $hash Block hash or height.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AdaBlock
     */
    public function adaGetBlock(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\AdaBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ada/block/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\AdaBlock"
        );
            
        return $result;
    }
    
    /**
     * Get Blockchain information
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AdaInfo
     */
    public function adaGetBlockChainInfo() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\AdaInfo $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/ada/info", [], $rHeaders, []
            ), 
            "\Tatum\Model\AdaInfo"
        );
            
        return $result;
    }
    
    /**
     * Get transaction by hash
     *
     * @param string $hash Transaction hash
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AdaTx
     */
    public function adaGetRawTransaction(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\AdaTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ada/transaction/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\AdaTx"
        );
            
        return $result;
    }
    
    /**
     * Get transactions by address
     *
     * @param string $address Address
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain the next page of data.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AdaTx[]
     */
    public function adaGetTxByAddress(string $address, float $page_size, float $offset = null) {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling CardanoApi.adaGetTxByAddress, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling CardanoApi.adaGetTxByAddress, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\AdaTx[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ada/transaction/address/{address}", ["address" => $address]), [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\AdaTx[]"
        );
            
        return $result;
    }
    
    /**
     * Get UTXOs by address
     *
     * @param string $address Address
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AdaUTXO[]
     */
    public function adaGetUTXOByAddress(string $address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\AdaUTXO[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ada/{address}/utxos", ["address" => $address]), [], $rHeaders, []
            ), 
            "\Tatum\Model\AdaUTXO[]"
        );
            
        return $result;
    }
    
    /**
     * Send ADA to Cardano addresses
     *
     * @param \Tatum\Model\AdaTransactionFromAddress $ada_transaction_from_address 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
     */
    public function adaTransactionAdaTransactionFromAddress(\Tatum\Model\AdaTransactionFromAddress $ada_transaction_from_address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ada/transaction", [], $rHeaders, [], $ada_transaction_from_address
            ), 
            "\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Send ADA to Cardano addresses
     *
     * @param \Tatum\Model\AdaTransactionFromAddressKMS $ada_transaction_from_address_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
     */
    public function adaTransactionAdaTransactionFromAddressKMS(\Tatum\Model\AdaTransactionFromAddressKMS $ada_transaction_from_address_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ada/transaction", [], $rHeaders, [], $ada_transaction_from_address_kms
            ), 
            "\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Send ADA to Cardano addresses
     *
     * @param \Tatum\Model\AdaTransactionFromUTXO $ada_transaction_from_utxo 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
     */
    public function adaTransactionAdaTransactionFromUTXO(\Tatum\Model\AdaTransactionFromUTXO $ada_transaction_from_utxo) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ada/transaction", [], $rHeaders, [], $ada_transaction_from_utxo
            ), 
            "\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Send ADA to Cardano addresses
     *
     * @param \Tatum\Model\AdaTransactionFromUTXOKMS $ada_transaction_from_utxokms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
     */
    public function adaTransactionAdaTransactionFromUTXOKMS(\Tatum\Model\AdaTransactionFromUTXOKMS $ada_transaction_from_utxokms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ada/transaction", [], $rHeaders, [], $ada_transaction_from_utxokms
            ), 
            "\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response"
        );
            
        return $result;
    }
    
}
