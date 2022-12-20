<?php

/**
 * FlowAddPubKeyMnemonic Model
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
 * FlowAddPubKeyMnemonic Model
 */
class FlowAddPubKeyMnemonic extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "FlowAddPubKeyMnemonic";
    protected static $_definition = [
        "account" => ["account", "string", null, "getAccount", "setAccount"], 
        "public_key" => ["publicKey", "string", null, "getPublicKey", "setPublicKey"], 
        "mnemonic" => ["mnemonic", "string", null, "getMnemonic", "setMnemonic"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "weight" => ["weight", "float", null, "getWeight", "setWeight"]
    ];

    /**
     * FlowAddPubKeyMnemonic
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["account"=>null, "public_key"=>null, "mnemonic"=>null, "index"=>null, "weight"=>null] as $k => $v) {
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
        if (is_null($this->_data['public_key'])) {
            $ip[] = "'public_key' can't be null";
        }
        if ((mb_strlen($this->_data['public_key']) > 128)) {
            $ip[] = "'public_key' length must be <= 128";
        }
        if ((mb_strlen($this->_data['public_key']) < 128)) {
            $ip[] = "'public_key' length must be >= 128";
        }
        if (is_null($this->_data['mnemonic'])) {
            $ip[] = "'mnemonic' can't be null";
        }
        if ((mb_strlen($this->_data['mnemonic']) > 500)) {
            $ip[] = "'mnemonic' length must be <= 500";
        }
        if ((mb_strlen($this->_data['mnemonic']) < 1)) {
            $ip[] = "'mnemonic' length must be >= 1";
        }
        if (is_null($this->_data['index'])) {
            $ip[] = "'index' can't be null";
        }
        if (($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        if (!is_null($this->_data['weight']) && ($this->_data['weight'] > 1000)) {
            $ip[] = "'weight' must be <= 1000";
        }
        if (!is_null($this->_data['weight']) && ($this->_data['weight'] < 0)) {
            $ip[] = "'weight' must be >= 0";
        }
        
        return $ip;
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
            throw new IAE('FlowAddPubKeyMnemonic.setAccount: $account length must be <= 18');
        }
        if ((mb_strlen($account) < 18)) {
            throw new IAE('FlowAddPubKeyMnemonic.setAccount: $account length must be >= 18');
        }
        $this->_data['account'] = $account;

        return $this;
    }

    /**
     * Get public_key
     *
     * @return string
     */
    public function getPublicKey(): string {
        return $this->_data["public_key"];
    }

    /**
     * Set public_key
     * 
     * @param string $public_key Public key to be used
     * @return $this
     */
    public function setPublicKey(string $public_key) {
        if ((mb_strlen($public_key) > 128)) {
            throw new IAE('FlowAddPubKeyMnemonic.setPublicKey: $public_key length must be <= 128');
        }
        if ((mb_strlen($public_key) < 128)) {
            throw new IAE('FlowAddPubKeyMnemonic.setPublicKey: $public_key length must be >= 128');
        }
        $this->_data['public_key'] = $public_key;

        return $this;
    }

    /**
     * Get mnemonic
     *
     * @return string
     */
    public function getMnemonic(): string {
        return $this->_data["mnemonic"];
    }

    /**
     * Set mnemonic
     * 
     * @param string $mnemonic Mnemonic to generate private key.
     * @return $this
     */
    public function setMnemonic(string $mnemonic) {
        if ((mb_strlen($mnemonic) > 500)) {
            throw new IAE('FlowAddPubKeyMnemonic.setMnemonic: $mnemonic length must be <= 500');
        }
        if ((mb_strlen($mnemonic) < 1)) {
            throw new IAE('FlowAddPubKeyMnemonic.setMnemonic: $mnemonic length must be >= 1');
        }
        $this->_data['mnemonic'] = $mnemonic;

        return $this;
    }

    /**
     * Get index
     *
     * @return float
     */
    public function getIndex(): float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float $index Index to the specific address from mnemonic.
     * @return $this
     */
    public function setIndex(float $index) {
        if (($index < 0)) {
            throw new IAE('FlowAddPubKeyMnemonic.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float|null
     */
    public function getWeight(): ?float {
        return $this->_data["weight"];
    }

    /**
     * Set weight
     * 
     * @param float|null $weight Weight of the key. If not set, default 1000 will be used.
     * @return $this
     */
    public function setWeight(?float $weight) {
        if (!is_null($weight) && ($weight > 1000)) {
            throw new IAE('FlowAddPubKeyMnemonic.setWeight: $weight must be <=1000');
        }
        if (!is_null($weight) && ($weight < 0)) {
            throw new IAE('FlowAddPubKeyMnemonic.setWeight: $weight must be >=0');
        }
        $this->_data['weight'] = $weight;

        return $this;
    }
}