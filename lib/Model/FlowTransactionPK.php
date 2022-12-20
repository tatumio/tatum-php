<?php

/**
 * FlowTransactionPK Model
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
 * FlowTransactionPK Model
 */
class FlowTransactionPK extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CURRENCY_FLOW = 'FLOW';
    public const CURRENCY_FUSD = 'FUSD';
    protected static $_name = "FlowTransactionPK";
    protected static $_definition = [
        "account" => ["account", "string", null, "getAccount", "setAccount"], 
        "currency" => ["currency", "string", null, "getCurrency", "setCurrency"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey"]
    ];

    /**
     * FlowTransactionPK
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["account"=>null, "currency"=>null, "to"=>null, "amount"=>null, "private_key"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['account'])) {
            $ip[] = "'account' can't be null";
        }
        if ((mb_strlen($this->_data['account']) > 18)) {
            $ip[] = "'account' length must be <= 18";
        }
        if ((mb_strlen($this->_data['account']) < 18)) {
            $ip[] = "'account' length must be >= 18";
        }
        if (is_null($this->_data['currency'])) {
            $ip[] = "'currency' can't be null";
        }
        $allowed = $this->getCurrencyAllowableValues();
        $value = $this->_data['currency'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'currency' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 18)) {
            $ip[] = "'to' length must be <= 18";
        }
        if ((mb_strlen($this->_data['to']) < 18)) {
            $ip[] = "'to' length must be >= 18";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if ((mb_strlen($this->_data['amount']) > 38)) {
            $ip[] = "'amount' length must be <= 38";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['private_key'])) {
            $ip[] = "'private_key' can't be null";
        }
        if ((mb_strlen($this->_data['private_key']) > 64)) {
            $ip[] = "'private_key' length must be <= 64";
        }
        if ((mb_strlen($this->_data['private_key']) < 64)) {
            $ip[] = "'private_key' length must be >= 64";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getCurrencyAllowableValues(): array {
        return [
            self::CURRENCY_FLOW,
            self::CURRENCY_FUSD,
        ];
    }

    /**
     * Get account
     *
     * @return string
     */
    public function getAccount(): string {
        return $this->_data["account"];
    }

    /**
     * Set account
     * 
     * @param string $account Blockchain account to send from
     * @return $this
     */
    public function setAccount(string $account) {
        if ((mb_strlen($account) > 18)) {
            throw new IAE('FlowTransactionPK.setAccount: $account length must be <= 18');
        }
        if ((mb_strlen($account) < 18)) {
            throw new IAE('FlowTransactionPK.setAccount: $account length must be >= 18');
        }
        $this->_data['account'] = $account;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency(): string {
        return $this->_data["currency"];
    }

    /**
     * Set currency
     * 
     * @param string $currency Type of asset to send
     * @return $this
     */
    public function setCurrency(string $currency) {
        $allowed = $this->getCurrencyAllowableValues();
        if (!in_array($currency, $allowed, true)) {
            throw new IAE(sprintf("FlowTransactionPK.setCurrency: currency invalid value '%s', must be one of '%s'", $currency, implode("', '", $allowed)));
        }
        $this->_data['currency'] = $currency;

        return $this;
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo(): string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string $to Blockchain address to send assets
     * @return $this
     */
    public function setTo(string $to) {
        if ((mb_strlen($to) > 18)) {
            throw new IAE('FlowTransactionPK.setTo: $to length must be <= 18');
        }
        if ((mb_strlen($to) < 18)) {
            throw new IAE('FlowTransactionPK.setTo: $to length must be >= 18');
        }
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount(): string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount Amount to be sent, in Flow.
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((mb_strlen($amount) > 38)) {
            throw new IAE('FlowTransactionPK.setAmount: $amount length must be <= 38');
        }
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('FlowTransactionPK.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get private_key
     *
     * @return string
     */
    public function getPrivateKey(): string {
        return $this->_data["private_key"];
    }

    /**
     * Set private_key
     * 
     * @param string $private_key Secret for account. Secret, or signature Id must be present.
     * @return $this
     */
    public function setPrivateKey(string $private_key) {
        if ((mb_strlen($private_key) > 64)) {
            throw new IAE('FlowTransactionPK.setPrivateKey: $private_key length must be <= 64');
        }
        if ((mb_strlen($private_key) < 64)) {
            throw new IAE('FlowTransactionPK.setPrivateKey: $private_key length must be >= 64');
        }
        $this->_data['private_key'] = $private_key;

        return $this;
    }
}