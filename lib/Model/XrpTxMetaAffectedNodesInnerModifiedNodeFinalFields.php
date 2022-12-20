<?php

/**
 * XrpTx_meta_AffectedNodes_inner_ModifiedNode_FinalFields Model
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
 * XrpTx_meta_AffectedNodes_inner_ModifiedNode_FinalFields Model
 */
class XrpTxMetaAffectedNodesInnerModifiedNodeFinalFields extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XrpTx_meta_AffectedNodes_inner_ModifiedNode_FinalFields";
    protected static $_definition = [
        "account" => ["Account", "string", null, "getAccount", "setAccount"], 
        "balance" => ["Balance", "string", null, "getBalance", "setBalance"], 
        "flags" => ["Flags", "float", null, "getFlags", "setFlags"], 
        "owner_count" => ["OwnerCount", "float", null, "getOwnerCount", "setOwnerCount"], 
        "sequence" => ["Sequence", "float", null, "getSequence", "setSequence"]
    ];

    /**
     * XrpTxMetaAffectedNodesInnerModifiedNodeFinalFields
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["account"=>null, "balance"=>null, "flags"=>null, "owner_count"=>null, "sequence"=>null] as $k => $v) {
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
     * Get account
     *
     * @return string|null
     */
    public function getAccount(): ?string {
        return $this->_data["account"];
    }

    /**
     * Set account
     * 
     * @param string|null $account account
     * @return $this
     */
    public function setAccount(?string $account) {
        $this->_data['account'] = $account;

        return $this;
    }

    /**
     * Get balance
     *
     * @return string|null
     */
    public function getBalance(): ?string {
        return $this->_data["balance"];
    }

    /**
     * Set balance
     * 
     * @param string|null $balance balance
     * @return $this
     */
    public function setBalance(?string $balance) {
        $this->_data['balance'] = $balance;

        return $this;
    }

    /**
     * Get flags
     *
     * @return float|null
     */
    public function getFlags(): ?float {
        return $this->_data["flags"];
    }

    /**
     * Set flags
     * 
     * @param float|null $flags flags
     * @return $this
     */
    public function setFlags(?float $flags) {
        $this->_data['flags'] = $flags;

        return $this;
    }

    /**
     * Get owner_count
     *
     * @return float|null
     */
    public function getOwnerCount(): ?float {
        return $this->_data["owner_count"];
    }

    /**
     * Set owner_count
     * 
     * @param float|null $owner_count owner_count
     * @return $this
     */
    public function setOwnerCount(?float $owner_count) {
        $this->_data['owner_count'] = $owner_count;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return float|null
     */
    public function getSequence(): ?float {
        return $this->_data["sequence"];
    }

    /**
     * Set sequence
     * 
     * @param float|null $sequence sequence
     * @return $this
     */
    public function setSequence(?float $sequence) {
        $this->_data['sequence'] = $sequence;

        return $this;
    }
}