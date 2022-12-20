<?php

/**
 * XrpInfo Model
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
 * XrpInfo Model
 */
class XrpInfo extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XrpInfo";
    protected static $_definition = [
        "ledger_hash" => ["ledger_hash", "string", null, "getLedgerHash", "setLedgerHash"], 
        "ledger_index" => ["ledger_index", "float", null, "getLedgerIndex", "setLedgerIndex"]
    ];

    /**
     * XrpInfo
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["ledger_hash"=>null, "ledger_index"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        
        return $ip;
    }

    /**
     * Get ledger_hash
     *
     * @return string|null
     */
    public function getLedgerHash(): ?string {
        return $this->_data["ledger_hash"];
    }

    /**
     * Set ledger_hash
     * 
     * @param string|null $ledger_hash Current ledger hash.
     * @return $this
     */
    public function setLedgerHash(?string $ledger_hash) {
        $this->_data['ledger_hash'] = $ledger_hash;

        return $this;
    }

    /**
     * Get ledger_index
     *
     * @return float|null
     */
    public function getLedgerIndex(): ?float {
        return $this->_data["ledger_index"];
    }

    /**
     * Set ledger_index
     * 
     * @param float|null $ledger_index Current ledger index.
     * @return $this
     */
    public function setLedgerIndex(?float $ledger_index) {
        $this->_data['ledger_index'] = $ledger_index;

        return $this;
    }
}