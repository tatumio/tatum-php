<?php

/**
 * Implementation of Litecoin API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Api;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * API for Litecoin
 */
class LitecoinApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Litecoin";

    /**
     * Broadcast signed Litecoin transaction
     *
     * @param \Tatum\Model\BroadcastKMS $broadcast_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function ltcBroadcast($broadcast_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/litecoin/broadcast";
        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $broadcast_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Generate Litecoin deposit address from Extended public key
     *
     * @param string $xpub Extended public key of wallet.
     * @param float $index Derivation index of desired address to be generated.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\LtcGenerateAddress200Response
     */
    public function ltcGenerateAddress($xpub, $index) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/litecoin/address/{xpub}/{index}";
        /** @var \Tatum\Model\LtcGenerateAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", S::parse($rPath, ["xpub" => $xpub, "index" => $index]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\LtcGenerateAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Generate Litecoin private key
     *
     * @param \Tatum\Model\PrivKeyRequest $priv_key_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PrivKey
     */
    public function ltcGenerateAddressPrivateKey($priv_key_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/litecoin/wallet/priv";
        /** @var \Tatum\Model\PrivKey $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $priv_key_request
            ), 
            "\Tatum\Model\PrivKey"
        );
            
        return $result;
    }
    
    /**
     * Generate Litecoin wallet
     *
     * @param string|null $mnemonic Mnemonic to use for generation of extended public and private keys.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Wallet
     */
    public function ltcGenerateWallet($mnemonic = null) {
        if (isset($mnemonic) && strlen($mnemonic) > 500) {
            throw new IAE('Invalid length for "$mnemonic" when calling LitecoinApi.ltcGenerateWallet, must be smaller than or equal to 500');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/litecoin/wallet";
        /** @var \Tatum\Model\Wallet $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", $rPath, $rPath, [
                    "mnemonic" => isset($mnemonic) ? S::toQueryValue($mnemonic) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Wallet"
        );
            
        return $result;
    }
    
    /**
     * Get the balance of a Litecoin address
     *
     * @param string $address Address
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcBasedBalance
     */
    public function ltcGetBalanceOfAddress($address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/litecoin/address/balance/{address}";
        /** @var \Tatum\Model\BtcBasedBalance $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", S::parse($rPath, ["address" => $address]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\BtcBasedBalance"
        );
            
        return $result;
    }
    
    /**
     * Get Litecoin Block by hash or height
     *
     * @param string $hash Block hash or height.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\LtcBlock
     */
    public function ltcGetBlock($hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/litecoin/block/{hash}";
        /** @var \Tatum\Model\LtcBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", S::parse($rPath, ["hash" => $hash]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\LtcBlock"
        );
            
        return $result;
    }
    
    /**
     * Get Litecoin Blockchain Information
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\LtcInfo
     */
    public function ltcGetBlockChainInfo() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/litecoin/info";
        /** @var \Tatum\Model\LtcInfo $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", $rPath, $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\LtcInfo"
        );
            
        return $result;
    }
    
    /**
     * Get Litecoin Block hash
     *
     * @param float $i The number of blocks preceding a particular block on a block chain.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\LtcGetBlockHash200Response
     */
    public function ltcGetBlockHash($i) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/litecoin/block/hash/{i}";
        /** @var \Tatum\Model\LtcGetBlockHash200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", S::parse($rPath, ["i" => $i]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\LtcGetBlockHash200Response"
        );
            
        return $result;
    }
    
    /**
     * Get Mempool Transactions
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return string[]
     */
    public function ltcGetMempool() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/litecoin/mempool";
        /** @var string[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", $rPath, $rPath, [], $rHeaders, []
            ), 
            "string[]"
        );
            
        return $result;
    }
    
    /**
     * Get Litecoin Transaction by hash
     *
     * @param string $hash Transaction hash
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\LtcTx
     */
    public function ltcGetRawTransaction($hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/litecoin/transaction/{hash}";
        /** @var \Tatum\Model\LtcTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", S::parse($rPath, ["hash" => $hash]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\LtcTx"
        );
            
        return $result;
    }
    
    /**
     * Get Litecoin Transactions by address
     *
     * @param string $address Address
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain next page of the data.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\LtcTx[]
     */
    public function ltcGetTxByAddress($address, $page_size, $offset = null) {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling LitecoinApi.ltcGetTxByAddress, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling LitecoinApi.ltcGetTxByAddress, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/litecoin/transaction/address/{address}";
        /** @var \Tatum\Model\LtcTx[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", S::parse($rPath, ["address" => $address]), $rPath, [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\LtcTx[]"
        );
            
        return $result;
    }
    
    /**
     * Get information about a transaction output (UTXO) in a Litecoin transaction
     *
     * @param string $hash The transaction hash
     * @param float $index The index of the transaction output that you want to check for the UTXO
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\LtcUTXO
     */
    public function ltcGetUTXO($hash, $index) {
        if (strlen($hash) > 64) {
            throw new IAE('Invalid length for "$hash" when calling LitecoinApi.ltcGetUTXO, must be smaller than or equal to 64');
        }

        if (strlen($hash) < 64) {
            throw new IAE('Invalid length for "$hash" when calling LitecoinApi.ltcGetUTXO, must be bigger than or equal to 64');
        }

        if ($index < 0) {
            throw new IAE('Invalid value for "$index" when calling LitecoinApi.ltcGetUTXO, must be bigger than or equal to 0.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/litecoin/utxo/{hash}/{index}";
        /** @var \Tatum\Model\LtcUTXO $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", S::parse($rPath, ["hash" => $hash, "index" => $index]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\LtcUTXO"
        );
            
        return $result;
    }
    
    /**
     * Send LTC to Litecoin addresses
     *
     * @param \Tatum\Model\LtcTransactionAddress $ltc_transaction_address 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function ltcTransactionAddress($ltc_transaction_address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/litecoin/transaction";
        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $ltc_transaction_address
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Send LTC to Litecoin addresses
     *
     * @param \Tatum\Model\LtcTransactionAddressKMS $ltc_transaction_address_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function ltcTransactionAddressKMS($ltc_transaction_address_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/litecoin/transaction";
        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $ltc_transaction_address_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Send LTC to Litecoin addresses
     *
     * @param \Tatum\Model\LtcTransactionUTXO $ltc_transaction_utxo 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function ltcTransactionUTXO($ltc_transaction_utxo) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/litecoin/transaction";
        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $ltc_transaction_utxo
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Send LTC to Litecoin addresses
     *
     * @param \Tatum\Model\LtcTransactionUTXOKMS $ltc_transaction_utxokms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function ltcTransactionUTXOKMS($ltc_transaction_utxokms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/litecoin/transaction";
        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $ltc_transaction_utxokms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
}
