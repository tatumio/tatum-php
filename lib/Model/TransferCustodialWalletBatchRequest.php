<?php

/**
 * TransferCustodialWalletBatch_request Model
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

namespace Tatum\Model;

use InvalidArgumentException as IAE;

/**
 * TransferCustodialWalletBatch_request Model
 */
class TransferCustodialWalletBatchRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_TRON = 'TRON';
    public const CONTRACT_TYPE_0 = 0;
    public const CONTRACT_TYPE_1 = 1;
    public const CONTRACT_TYPE_3 = 3;
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "TransferCustodialWalletBatch_request";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "custodial_address" => ["custodialAddress", "string", null, "getCustodialAddress", "setCustodialAddress"], 
        "recipient" => ["recipient", "string[]", null, "getRecipient", "setRecipient"], 
        "contract_type" => ["contractType", "float[]", null, "getContractType", "setContractType"], 
        "token_address" => ["tokenAddress", "string[]", null, "getTokenAddress", "setTokenAddress"], 
        "amount" => ["amount", "string[]", null, "getAmount", "setAmount"], 
        "token_id" => ["tokenId", "string[]", null, "getTokenId", "setTokenId"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee" => ["fee", "\Tatum\Model\ApproveTransferCustodialWalletFee", null, "getFee", "setFee"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency"], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit"], 
        "from" => ["from", "string", null, "getFrom", "setFrom"]
    ];

    /**
     * TransferCustodialWalletBatchRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "custodial_address"=>null, "recipient"=>null, "contract_type"=>null, "token_address"=>null, "amount"=>null, "token_id"=>null, "from_private_key"=>null, "nonce"=>null, "fee"=>null, "signature_id"=>null, "index"=>null, "fee_currency"=>null, "fee_limit"=>null, "from"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['custodial_address'])) {
            $ip[] = "'custodial_address' can't be null";
        }
        if ((mb_strlen($this->_data['custodial_address']) > 34)) {
            $ip[] = "'custodial_address' length must be <= 34";
        }
        if ((mb_strlen($this->_data['custodial_address']) < 34)) {
            $ip[] = "'custodial_address' length must be >= 34";
        }
        if (is_null($this->_data['recipient'])) {
            $ip[] = "'recipient' can't be null";
        }
        if (is_null($this->_data['contract_type'])) {
            $ip[] = "'contract_type' can't be null";
        }
        if (is_null($this->_data['token_address'])) {
            $ip[] = "'token_address' can't be null";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if (is_null($this->_data['token_id'])) {
            $ip[] = "'token_id' can't be null";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 64)) {
            $ip[] = "'from_private_key' length must be <= 64";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 64)) {
            $ip[] = "'from_private_key' length must be >= 64";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        if (is_null($this->_data['fee_currency'])) {
            $ip[] = "'fee_currency' can't be null";
        }
        $allowed = $this->getFeeCurrencyAllowableValues();
        $value = $this->_data['fee_currency'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'fee_currency' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['fee_limit'])) {
            $ip[] = "'fee_limit' can't be null";
        }
        if (($this->_data['fee_limit'] < 0)) {
            $ip[] = "'fee_limit' must be >= 0";
        }
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 34)) {
            $ip[] = "'from' length must be <= 34";
        }
        if ((mb_strlen($this->_data['from']) < 34)) {
            $ip[] = "'from' length must be >= 34";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_TRON,
        ];
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getContractTypeAllowableValues(): array {
        return [
            self::CONTRACT_TYPE_0,
            self::CONTRACT_TYPE_1,
            self::CONTRACT_TYPE_3,
        ];
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getFeeCurrencyAllowableValues(): array {
        return [
            self::FEE_CURRENCY_CELO,
            self::FEE_CURRENCY_CUSD,
            self::FEE_CURRENCY_CEUR,
        ];
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain The blockchain to work with
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("TransferCustodialWalletBatchRequest.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get custodial_address
     *
     * @return string
     */
    public function getCustodialAddress(): string {
        return $this->_data["custodial_address"];
    }

    /**
     * Set custodial_address
     * 
     * @param string $custodial_address The gas pump address that transfers the assets; this is the address that you <a href=\"#operation/PrecalculateGasPumpAddresses\">precalculated</a> and <a href=\"#operation/ActivateGasPumpAddresses\">activated</a> earlier and that is assigned to a customer in your custodial application; this is not the \"master address\"
     * @return $this
     */
    public function setCustodialAddress(string $custodial_address) {
        if ((mb_strlen($custodial_address) > 34)) {
            throw new IAE('TransferCustodialWalletBatchRequest.setCustodialAddress: $custodial_address length must be <= 34');
        }
        if ((mb_strlen($custodial_address) < 34)) {
            throw new IAE('TransferCustodialWalletBatchRequest.setCustodialAddress: $custodial_address length must be >= 34');
        }
        $this->_data['custodial_address'] = $custodial_address;

        return $this;
    }

    /**
     * Get recipient
     *
     * @return string[]
     */
    public function getRecipient(): array {
        return $this->_data["recipient"];
    }

    /**
     * Set recipient
     * 
     * @param string[] $recipient The blockchain address that receives the assets
     * @return $this
     */
    public function setRecipient(array $recipient) {
        $this->_data['recipient'] = $recipient;

        return $this;
    }

    /**
     * Get contract_type
     *
     * @return float[]
     */
    public function getContractType(): array {
        return $this->_data["contract_type"];
    }

    /**
     * Set contract_type
     * 
     * @param float[] $contract_type The type of the assets to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), or <code>3</code> for native blockchain currencies.
     * @return $this
     */
    public function setContractType(array $contract_type) {
        $allowed = $this->getContractTypeAllowableValues();
        if (array_diff($contract_type, $allowed)) {
            throw new IAE(sprintf("TransferCustodialWalletBatchRequest.setContractType: contract_type must be one of '%s'", implode("', '", $allowed)));
        }
        $this->_data['contract_type'] = $contract_type;

        return $this;
    }

    /**
     * Get token_address
     *
     * @return string[]
     */
    public function getTokenAddress(): array {
        return $this->_data["token_address"];
    }

    /**
     * Set token_address
     * 
     * @param string[] $token_address <ul> <li> If the assets are fungible tokens or NFTs, set this parameter to the array of the addresses of the tokens to transfer:<br/> <code>\"tokenAddress\": [\"0x782919AFc85eEA2cB736874225456bB5d3e242bA\",\"0x74225456bB5d3e242bA782919AFc85eEA2cB7368\",...,\"0x3e242bA78274225456bB52cB7368d919AFc85eEA\"]</code> </li> <li> If the assets are a native blockchain currency, set this parameter to the array of zeros, a zero per currency:<br/> <code>\"tokenAddress\": [\"0\",\"0\",...,\"0\"]</code> </li> </ul>
     * @return $this
     */
    public function setTokenAddress(array $token_address) {
        $this->_data['token_address'] = $token_address;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string[]
     */
    public function getAmount(): array {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string[] $amount <ul> <li> If the assets are fungible tokens or a native blockchain currency, set this parameter to the array of the amounts of the assets to transfer:<br/> <code>\"amount\": [\"100000\",\"15000\",...,\"250000\"]</code> </li> <li> If the assets are NFTs, set this parameter to the array of zeros, a zero per NFT:<br/> <code>\"amount\": [\"0\",\"0\",...,\"0\"]</code> </li> </ul>
     * @return $this
     */
    public function setAmount(array $amount) {
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get token_id
     *
     * @return string[]
     */
    public function getTokenId(): array {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string[] $token_id <ul> <li> If the assets are NFTs, set this parameter to the array of the IDs of the tokens to transfer:<br/> <code>\"tokenId\": [\"12\",\"13\",...,\"24\"]</code>  </li> <li> If the assets are fungible tokens or a native blockchain currency, set this parameter to the array of zeros, a zero per fungible token/currency:<br/> <code>\"tokenId\": [\"0\",\"0\",...,\"0\"]</code> </li> </ul>
     * @return $this
     */
    public function setTokenId(array $token_id) {
        $this->_data['token_id'] = $token_id;

        return $this;
    }

    /**
     * Get from_private_key
     *
     * @return string
     */
    public function getFromPrivateKey(): string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key The private key of the blockchain address that owns the gas pump address (\"master address\")
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 64)) {
            throw new IAE('TransferCustodialWalletBatchRequest.setFromPrivateKey: $from_private_key length must be <= 64');
        }
        if ((mb_strlen($from_private_key) < 64)) {
            throw new IAE('TransferCustodialWalletBatchRequest.setFromPrivateKey: $from_private_key length must be >= 64');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }

    /**
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce The nonce to be set to the transfer transaction; if not present, the last known nonce will be used
     * @return $this
     */
    public function setNonce(?float $nonce) {
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\ApproveTransferCustodialWalletFee|null
     */
    public function getFee(): ?\Tatum\Model\ApproveTransferCustodialWalletFee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\ApproveTransferCustodialWalletFee|null $fee fee
     * @return $this
     */
    public function setFee(?\Tatum\Model\ApproveTransferCustodialWalletFee $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }

    /**
     * Get signature_id
     *
     * @return string
     */
    public function getSignatureId(): string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id The KMS identifier of the private key of the blockchain address that owns the gas pump address key (\"master address\")
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }

    /**
     * Get index
     *
     * @return float|null
     */
    public function getIndex(): ?float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float|null $index (Only if the signature ID is mnemonic-based) The index of the specific address from the mnemonic
     * @return $this
     */
    public function setIndex(?float $index) {
        if (!is_null($index) && ($index < 0)) {
            throw new IAE('TransferCustodialWalletBatchRequest.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get fee_currency
     *
     * @return string
     */
    public function getFeeCurrency(): string {
        return $this->_data["fee_currency"];
    }

    /**
     * Set fee_currency
     * 
     * @param string $fee_currency The currency to pay for the gas fee
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        $allowed = $this->getFeeCurrencyAllowableValues();
        if (!in_array($fee_currency, $allowed, true)) {
            throw new IAE(sprintf("TransferCustodialWalletBatchRequest.setFeeCurrency: fee_currency invalid value '%s', must be one of '%s'", $fee_currency, implode("', '", $allowed)));
        }
        $this->_data['fee_currency'] = $fee_currency;

        return $this;
    }

    /**
     * Get fee_limit
     *
     * @return float
     */
    public function getFeeLimit(): float {
        return $this->_data["fee_limit"];
    }

    /**
     * Set fee_limit
     * 
     * @param float $fee_limit The maximum amount to be paid as the gas fee (in TRX)
     * @return $this
     */
    public function setFeeLimit(float $fee_limit) {
        if (($fee_limit < 0)) {
            throw new IAE('TransferCustodialWalletBatchRequest.setFeeLimit: $fee_limit must be >=0');
        }
        $this->_data['fee_limit'] = $fee_limit;

        return $this;
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom(): string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from The blockchain address that owns the gas pump address (\"master address\") in the Base58 format
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 34)) {
            throw new IAE('TransferCustodialWalletBatchRequest.setFrom: $from length must be <= 34');
        }
        if ((mb_strlen($from) < 34)) {
            throw new IAE('TransferCustodialWalletBatchRequest.setFrom: $from length must be >= 34');
        }
        $this->_data['from'] = $from;

        return $this;
    }
}