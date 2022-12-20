<?php

/**
 * XrpTx Model
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
 * XrpTx Model
 */
class XrpTx extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XrpTx";
    protected static $_definition = [
        "hash" => ["hash", "string", null, "getHash", "setHash"], 
        "ledger_index" => ["ledger_index", "float", null, "getLedgerIndex", "setLedgerIndex"], 
        "account" => ["Account", "string", null, "getAccount", "setAccount"], 
        "amount" => ["Amount", "string", null, "getAmount", "setAmount"], 
        "destination" => ["Destination", "string", null, "getDestination", "setDestination"], 
        "fee" => ["Fee", "string", null, "getFee", "setFee"], 
        "transaction_type" => ["TransactionType", "string", null, "getTransactionType", "setTransactionType"], 
        "flags" => ["Flags", "float", null, "getFlags", "setFlags"], 
        "last_ledger_sequence" => ["LastLedgerSequence", "float", null, "getLastLedgerSequence", "setLastLedgerSequence"], 
        "sequence" => ["Sequence", "float", null, "getSequence", "setSequence"], 
        "date" => ["date", "float", null, "getDate", "setDate"], 
        "in_ledger" => ["inLedger", "float", null, "getInLedger", "setInLedger"], 
        "signing_pub_key" => ["SigningPubKey", "string", null, "getSigningPubKey", "setSigningPubKey"], 
        "txn_signature" => ["TxnSignature", "string", null, "getTxnSignature", "setTxnSignature"], 
        "meta" => ["meta", "\Tatum\Model\XrpTxMeta", null, "getMeta", "setMeta"], 
        "validated" => ["validated", "bool", null, "getValidated", "setValidated"]
    ];

    /**
     * XrpTx
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["hash"=>null, "ledger_index"=>null, "account"=>null, "amount"=>null, "destination"=>null, "fee"=>null, "transaction_type"=>null, "flags"=>null, "last_ledger_sequence"=>null, "sequence"=>null, "date"=>null, "in_ledger"=>null, "signing_pub_key"=>null, "txn_signature"=>null, "meta"=>null, "validated"=>null] as $k => $v) {
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
     * Get hash
     *
     * @return string|null
     */
    public function getHash(): ?string {
        return $this->_data["hash"];
    }

    /**
     * Set hash
     * 
     * @param string|null $hash The SHA-512 hash of the transaction
     * @return $this
     */
    public function setHash(?string $hash) {
        $this->_data['hash'] = $hash;

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
     * @param float|null $ledger_index The ledger index of the ledger that includes this transaction.
     * @return $this
     */
    public function setLedgerIndex(?float $ledger_index) {
        $this->_data['ledger_index'] = $ledger_index;

        return $this;
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
     * @param string|null $account The unique address of the account that initiated the transaction.
     * @return $this
     */
    public function setAccount(?string $account) {
        $this->_data['account'] = $account;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string|null
     */
    public function getAmount(): ?string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string|null $amount Amount of transaction, in drops. 1 drop = 0.000001 XRP.
     * @return $this
     */
    public function setAmount(?string $amount) {
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string|null
     */
    public function getDestination(): ?string {
        return $this->_data["destination"];
    }

    /**
     * Set destination
     * 
     * @param string|null $destination Recipient account address.
     * @return $this
     */
    public function setDestination(?string $destination) {
        $this->_data['destination'] = $destination;

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
     * @param string|null $fee Integer amount of XRP, in drops, to be destroyed as a cost for distributing this transaction to the network. Some transaction types have different minimum requirements.
     * @return $this
     */
    public function setFee(?string $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }

    /**
     * Get transaction_type
     *
     * @return string|null
     */
    public function getTransactionType(): ?string {
        return $this->_data["transaction_type"];
    }

    /**
     * Set transaction_type
     * 
     * @param string|null $transaction_type Type of the transaction. XRp supports more than 18 transaction types. For the payment, Payment type is used.
     * @return $this
     */
    public function setTransactionType(?string $transaction_type) {
        $this->_data['transaction_type'] = $transaction_type;

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
     * @param float|null $flags Set of bit-flags for this transaction.
     * @return $this
     */
    public function setFlags(?float $flags) {
        $this->_data['flags'] = $flags;

        return $this;
    }

    /**
     * Get last_ledger_sequence
     *
     * @return float|null
     */
    public function getLastLedgerSequence(): ?float {
        return $this->_data["last_ledger_sequence"];
    }

    /**
     * Set last_ledger_sequence
     * 
     * @param float|null $last_ledger_sequence Last ledger, in which this transaction could have occured.
     * @return $this
     */
    public function setLastLedgerSequence(?float $last_ledger_sequence) {
        $this->_data['last_ledger_sequence'] = $last_ledger_sequence;

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
     * @param float|null $sequence The sequence number of the account sending the transaction. A transaction is only valid if the Sequence number is exactly 1 greater than the previous transaction from the same account.
     * @return $this
     */
    public function setSequence(?float $sequence) {
        $this->_data['sequence'] = $sequence;

        return $this;
    }

    /**
     * Get date
     *
     * @return float|null
     */
    public function getDate(): ?float {
        return $this->_data["date"];
    }

    /**
     * Set date
     * 
     * @param float|null $date Timestamp of the transaction, in Ripple epoch (946684800 seconds after Unix Epoch)
     * @return $this
     */
    public function setDate(?float $date) {
        $this->_data['date'] = $date;

        return $this;
    }

    /**
     * Get in_ledger
     *
     * @return float|null
     */
    public function getInLedger(): ?float {
        return $this->_data["in_ledger"];
    }

    /**
     * Set in_ledger
     * 
     * @param float|null $in_ledger Ledger, in which transaction took place.
     * @return $this
     */
    public function setInLedger(?float $in_ledger) {
        $this->_data['in_ledger'] = $in_ledger;

        return $this;
    }

    /**
     * Get signing_pub_key
     *
     * @return string|null
     */
    public function getSigningPubKey(): ?string {
        return $this->_data["signing_pub_key"];
    }

    /**
     * Set signing_pub_key
     * 
     * @param string|null $signing_pub_key signing_pub_key
     * @return $this
     */
    public function setSigningPubKey(?string $signing_pub_key) {
        $this->_data['signing_pub_key'] = $signing_pub_key;

        return $this;
    }

    /**
     * Get txn_signature
     *
     * @return string|null
     */
    public function getTxnSignature(): ?string {
        return $this->_data["txn_signature"];
    }

    /**
     * Set txn_signature
     * 
     * @param string|null $txn_signature txn_signature
     * @return $this
     */
    public function setTxnSignature(?string $txn_signature) {
        $this->_data['txn_signature'] = $txn_signature;

        return $this;
    }

    /**
     * Get meta
     *
     * @return \Tatum\Model\XrpTxMeta|null
     */
    public function getMeta(): ?\Tatum\Model\XrpTxMeta {
        return $this->_data["meta"];
    }

    /**
     * Set meta
     * 
     * @param \Tatum\Model\XrpTxMeta|null $meta meta
     * @return $this
     */
    public function setMeta(?\Tatum\Model\XrpTxMeta $meta) {
        $this->_data['meta'] = $meta;

        return $this;
    }

    /**
     * Get validated
     *
     * @return bool|null
     */
    public function getValidated(): ?bool {
        return $this->_data["validated"];
    }

    /**
     * Set validated
     * 
     * @param bool|null $validated Whether or not the transaction is included in a validated ledger. Any transaction not yet in a validated ledger is subject to change.
     * @return $this
     */
    public function setValidated(?bool $validated) {
        $this->_data['validated'] = $validated;

        return $this;
    }
}