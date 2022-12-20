<?php

/**
 * XrpTrustLineBlockchain_request Model
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
 * XrpTrustLineBlockchain_request Model
 */
class XrpTrustLineBlockchainRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XrpTrustLineBlockchain_request";
    protected static $_definition = [
        "from_account" => ["fromAccount", "string", null, "getFromAccount", "setFromAccount"], 
        "issuer_account" => ["issuerAccount", "string", null, "getIssuerAccount", "setIssuerAccount"], 
        "limit" => ["limit", "string", null, "getLimit", "setLimit"], 
        "token" => ["token", "string", null, "getToken", "setToken"], 
        "from_secret" => ["fromSecret", "string", null, "getFromSecret", "setFromSecret"], 
        "fee" => ["fee", "string", null, "getFee", "setFee"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"]
    ];

    /**
     * XrpTrustLineBlockchainRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["from_account"=>null, "issuer_account"=>null, "limit"=>null, "token"=>null, "from_secret"=>null, "fee"=>null, "signature_id"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['from_account'])) {
            $ip[] = "'from_account' can't be null";
        }
        if ((mb_strlen($this->_data['from_account']) > 34)) {
            $ip[] = "'from_account' length must be <= 34";
        }
        if ((mb_strlen($this->_data['from_account']) < 33)) {
            $ip[] = "'from_account' length must be >= 33";
        }
        if (is_null($this->_data['issuer_account'])) {
            $ip[] = "'issuer_account' can't be null";
        }
        if ((mb_strlen($this->_data['issuer_account']) > 34)) {
            $ip[] = "'issuer_account' length must be <= 34";
        }
        if ((mb_strlen($this->_data['issuer_account']) < 33)) {
            $ip[] = "'issuer_account' length must be >= 33";
        }
        if (is_null($this->_data['limit'])) {
            $ip[] = "'limit' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['limit'])) {
            $ip[] = "'limit' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['token'])) {
            $ip[] = "'token' can't be null";
        }
        if ((mb_strlen($this->_data['token']) > 40)) {
            $ip[] = "'token' length must be <= 40";
        }
        if ((mb_strlen($this->_data['token']) < 40)) {
            $ip[] = "'token' length must be >= 40";
        }
        if (!preg_match("/^[A-F0-9]{40}$/", $this->_data['token'])) {
            $ip[] = "'token' must match /^[A-F0-9]{40}$/";
        }
        if (is_null($this->_data['from_secret'])) {
            $ip[] = "'from_secret' can't be null";
        }
        if ((mb_strlen($this->_data['from_secret']) > 29)) {
            $ip[] = "'from_secret' length must be <= 29";
        }
        if ((mb_strlen($this->_data['from_secret']) < 29)) {
            $ip[] = "'from_secret' length must be >= 29";
        }
        if (!is_null($this->_data['fee']) && !preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['fee'])) {
            $ip[] = "'fee' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get from_account
     *
     * @return string
     */
    public function getFromAccount(): string {
        return $this->_data["from_account"];
    }

    /**
     * Set from_account
     * 
     * @param string $from_account XRP account address. Must be the one used for generating deposit tags.
     * @return $this
     */
    public function setFromAccount(string $from_account) {
        if ((mb_strlen($from_account) > 34)) {
            throw new IAE('XrpTrustLineBlockchainRequest.setFromAccount: $from_account length must be <= 34');
        }
        if ((mb_strlen($from_account) < 33)) {
            throw new IAE('XrpTrustLineBlockchainRequest.setFromAccount: $from_account length must be >= 33');
        }
        $this->_data['from_account'] = $from_account;

        return $this;
    }

    /**
     * Get issuer_account
     *
     * @return string
     */
    public function getIssuerAccount(): string {
        return $this->_data["issuer_account"];
    }

    /**
     * Set issuer_account
     * 
     * @param string $issuer_account Blockchain address of the issuer of the assets to create trust line for.
     * @return $this
     */
    public function setIssuerAccount(string $issuer_account) {
        if ((mb_strlen($issuer_account) > 34)) {
            throw new IAE('XrpTrustLineBlockchainRequest.setIssuerAccount: $issuer_account length must be <= 34');
        }
        if ((mb_strlen($issuer_account) < 33)) {
            throw new IAE('XrpTrustLineBlockchainRequest.setIssuerAccount: $issuer_account length must be >= 33');
        }
        $this->_data['issuer_account'] = $issuer_account;

        return $this;
    }

    /**
     * Get limit
     *
     * @return string
     */
    public function getLimit(): string {
        return $this->_data["limit"];
    }

    /**
     * Set limit
     * 
     * @param string $limit Amount of the assets to be permitted to send over this trust line. 0 means deletion of the trust line.
     * @return $this
     */
    public function setLimit(string $limit) {
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $limit))) {
            throw new IAE('XrpTrustLineBlockchainRequest.setLimit: $limit must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($limit, true) . ' given');
        }
        $this->_data['limit'] = $limit;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken(): string {
        return $this->_data["token"];
    }

    /**
     * Set token
     * 
     * @param string $token Asset name. Must be 160bit HEX string, e.g. SHA1.
     * @return $this
     */
    public function setToken(string $token) {
        if ((mb_strlen($token) > 40)) {
            throw new IAE('XrpTrustLineBlockchainRequest.setToken: $token length must be <= 40');
        }
        if ((mb_strlen($token) < 40)) {
            throw new IAE('XrpTrustLineBlockchainRequest.setToken: $token length must be >= 40');
        }
        if ((!preg_match("/^[A-F0-9]{40}$/", $token))) {
            throw new IAE('XrpTrustLineBlockchainRequest.setToken: $token must match /^[A-F0-9]{40}$/, ' . var_export($token, true) . ' given');
        }
        $this->_data['token'] = $token;

        return $this;
    }

    /**
     * Get from_secret
     *
     * @return string
     */
    public function getFromSecret(): string {
        return $this->_data["from_secret"];
    }

    /**
     * Set from_secret
     * 
     * @param string $from_secret Secret for account. Secret, or signature Id must be present.
     * @return $this
     */
    public function setFromSecret(string $from_secret) {
        if ((mb_strlen($from_secret) > 29)) {
            throw new IAE('XrpTrustLineBlockchainRequest.setFromSecret: $from_secret length must be <= 29');
        }
        if ((mb_strlen($from_secret) < 29)) {
            throw new IAE('XrpTrustLineBlockchainRequest.setFromSecret: $from_secret length must be >= 29');
        }
        $this->_data['from_secret'] = $from_secret;

        return $this;
    }

    /**
     * Get fee
     *
     * @return string|null
     */
    public function getFee(): ?string {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param string|null $fee Fee to be paid, in XRP. If omitted, current fee will be calculated.
     * @return $this
     */
    public function setFee(?string $fee) {
        if (!is_null($fee) && (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $fee))) {
            throw new IAE('XrpTrustLineBlockchainRequest.setFee: $fee must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($fee, true) . ' given');
        }
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
     * @param string $signature_id Identifier of the secret associated in signing application. Secret, or signature Id must be present.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }
}