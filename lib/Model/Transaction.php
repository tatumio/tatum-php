<?php

/**
 * Transaction Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * Transaction Model
 */
class Transaction extends AbstractModel {

    public const _D = null;
    public const OPERATION_TYPE_PAYMENT = 'PAYMENT';
    public const OPERATION_TYPE_WITHDRAWAL = 'WITHDRAWAL';
    public const OPERATION_TYPE_BLOCKCHAIN_TRANSACTION = 'BLOCKCHAIN_TRANSACTION';
    public const OPERATION_TYPE_EXCHANGE = 'EXCHANGE';
    public const OPERATION_TYPE_FAILED = 'FAILED';
    public const OPERATION_TYPE_DEPOSIT = 'DEPOSIT';
    public const OPERATION_TYPE_MINT = 'MINT';
    public const OPERATION_TYPE_REVOKE = 'REVOKE';
    public const TRANSACTION_TYPE_FAILED = 'FAILED';
    public const TRANSACTION_TYPE_DEBIT_PAYMENT = 'DEBIT_PAYMENT';
    public const TRANSACTION_TYPE_CREDIT_PAYMENT = 'CREDIT_PAYMENT';
    public const TRANSACTION_TYPE_CREDIT_DEPOSIT = 'CREDIT_DEPOSIT';
    public const TRANSACTION_TYPE_DEBIT_WITHDRAWAL = 'DEBIT_WITHDRAWAL';
    public const TRANSACTION_TYPE_CANCEL_WITHDRAWAL = 'CANCEL_WITHDRAWAL';
    public const TRANSACTION_TYPE_DEBIT_OUTGOING_PAYMENT = 'DEBIT_OUTGOING_PAYMENT';
    public const TRANSACTION_TYPE_CREDIT_INCOMING_PAYMENT = 'CREDIT_INCOMING_PAYMENT';
    public const TRANSACTION_TYPE_EXCHANGE_BUY = 'EXCHANGE_BUY';
    public const TRANSACTION_TYPE_EXCHANGE_SELL = 'EXCHANGE_SELL';
    protected static $_name = "Transaction";
    protected static $_definition = [
        "account_id" => ["accountId", "string", null, "getAccountId", "setAccountId", null, ["r" => 1]], 
        "counter_account_id" => ["counterAccountId", "string", null, "getCounterAccountId", "setCounterAccountId", null, ["r" => 0]], 
        "currency" => ["currency", "string", null, "getCurrency", "setCurrency", null, ["r" => 1]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1]], 
        "anonymous" => ["anonymous", "bool", null, "getAnonymous", "setAnonymous", null, ["r" => 1]], 
        "created" => ["created", "float", null, "getCreated", "setCreated", null, ["r" => 1]], 
        "market_value" => ["marketValue", "\Tatum\Model\MarketValue", null, "getMarketValue", "setMarketValue", null, ["r" => 1]], 
        "operation_type" => ["operationType", "string", null, "getOperationType", "setOperationType", null, ["r" => 1, "e" => 1]], 
        "transaction_type" => ["transactionType", "string", null, "getTransactionType", "setTransactionType", null, ["r" => 1, "e" => 1]], 
        "reference" => ["reference", "string", null, "getReference", "setReference", null, ["r" => 1]], 
        "transaction_code" => ["transactionCode", "string", null, "getTransactionCode", "setTransactionCode", null, ["r" => 0]], 
        "sender_note" => ["senderNote", "string", null, "getSenderNote", "setSenderNote", null, ["r" => 0]], 
        "recipient_note" => ["recipientNote", "string", null, "getRecipientNote", "setRecipientNote", null, ["r" => 0]], 
        "payment_id" => ["paymentId", "string", null, "getPaymentId", "setPaymentId", null, ["r" => 0]], 
        "attr" => ["attr", "string", null, "getAttr", "setAttr", null, ["r" => 0]], 
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 0]], 
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId", null, ["r" => 0]]
    ];

    /**
     * Transaction
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return array|null
     */
    public function getOperationTypeAllowableValues(): ?array {
        return [
            self::OPERATION_TYPE_PAYMENT,
            self::OPERATION_TYPE_WITHDRAWAL,
            self::OPERATION_TYPE_BLOCKCHAIN_TRANSACTION,
            self::OPERATION_TYPE_EXCHANGE,
            self::OPERATION_TYPE_FAILED,
            self::OPERATION_TYPE_DEPOSIT,
            self::OPERATION_TYPE_MINT,
            self::OPERATION_TYPE_REVOKE,
        ];
    }

    /**
     * Get allowable values
     *
     * @return array|null
     */
    public function getTransactionTypeAllowableValues(): ?array {
        return [
            self::TRANSACTION_TYPE_FAILED,
            self::TRANSACTION_TYPE_DEBIT_PAYMENT,
            self::TRANSACTION_TYPE_CREDIT_PAYMENT,
            self::TRANSACTION_TYPE_CREDIT_DEPOSIT,
            self::TRANSACTION_TYPE_DEBIT_WITHDRAWAL,
            self::TRANSACTION_TYPE_CANCEL_WITHDRAWAL,
            self::TRANSACTION_TYPE_DEBIT_OUTGOING_PAYMENT,
            self::TRANSACTION_TYPE_CREDIT_INCOMING_PAYMENT,
            self::TRANSACTION_TYPE_EXCHANGE_BUY,
            self::TRANSACTION_TYPE_EXCHANGE_SELL,
        ];
    }

    /**
     * Get account_id
     *
     * @return string|null
     */
    public function getAccountId(): ?string {
        return $this->_data["account_id"];
    }

    /**
     * Set account_id
     * 
     * @param string $account_id Source account - source of transaction(s)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountId(string $account_id) {
        return $this->_set("account_id", $account_id);
    }

    /**
     * Get counter_account_id
     *
     * @return string|null
     */
    public function getCounterAccountId(): ?string {
        return $this->_data["counter_account_id"];
    }

    /**
     * Set counter_account_id
     * 
     * @param string|null $counter_account_id Counter account - transaction(s) destination account. In case of blockchain recipient, this is addess of blockchain account.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCounterAccountId(?string $counter_account_id) {
        return $this->_set("counter_account_id", $counter_account_id);
    }

    /**
     * Get currency
     *
     * @return string|null
     */
    public function getCurrency(): ?string {
        return $this->_data["currency"];
    }

    /**
     * Set currency
     * 
     * @param string $currency Transaction currency
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurrency(string $currency) {
        return $this->_set("currency", $currency);
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
     * @param string $amount Amount in account's currency
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get anonymous
     *
     * @return bool|null
     */
    public function getAnonymous(): ?bool {
        return $this->_data["anonymous"];
    }

    /**
     * Set anonymous
     * 
     * @param bool $anonymous Whether the transaction is anonymous. If true, counter account owner does not see source account.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAnonymous(bool $anonymous) {
        return $this->_set("anonymous", $anonymous);
    }

    /**
     * Get created
     *
     * @return float|null
     */
    public function getCreated(): ?float {
        return $this->_data["created"];
    }

    /**
     * Set created
     * 
     * @param float $created Time in UTC of transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCreated(float $created) {
        return $this->_set("created", $created);
    }

    /**
     * Get market_value
     *
     * @return \Tatum\Model\MarketValue|null
     */
    public function getMarketValue(): ?\Tatum\Model\MarketValue {
        return $this->_data["market_value"];
    }

    /**
     * Set market_value
     * 
     * @param \Tatum\Model\MarketValue $market_value market_value
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMarketValue(\Tatum\Model\MarketValue $market_value) {
        return $this->_set("market_value", $market_value);
    }

    /**
     * Get operation_type
     *
     * @return string|null
     */
    public function getOperationType(): ?string {
        return $this->_data["operation_type"];
    }

    /**
     * Set operation_type
     * 
     * @param string $operation_type Type of operation.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOperationType(string $operation_type) {
        return $this->_set("operation_type", $operation_type);
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
     * @param string $transaction_type Type of payment.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactionType(string $transaction_type) {
        return $this->_set("transaction_type", $transaction_type);
    }

    /**
     * Get reference
     *
     * @return string|null
     */
    public function getReference(): ?string {
        return $this->_data["reference"];
    }

    /**
     * Set reference
     * 
     * @param string $reference Transaction internal reference - unique identifier within Tatum ledger. In order of failure, use this value to search for problems.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setReference(string $reference) {
        return $this->_set("reference", $reference);
    }

    /**
     * Get transaction_code
     *
     * @return string|null
     */
    public function getTransactionCode(): ?string {
        return $this->_data["transaction_code"];
    }

    /**
     * Set transaction_code
     * 
     * @param string|null $transaction_code For bookkeeping to distinct transaction purpose.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactionCode(?string $transaction_code) {
        return $this->_set("transaction_code", $transaction_code);
    }

    /**
     * Get sender_note
     *
     * @return string|null
     */
    public function getSenderNote(): ?string {
        return $this->_data["sender_note"];
    }

    /**
     * Set sender_note
     * 
     * @param string|null $sender_note Note visible for sender.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSenderNote(?string $sender_note) {
        return $this->_set("sender_note", $sender_note);
    }

    /**
     * Get recipient_note
     *
     * @return string|null
     */
    public function getRecipientNote(): ?string {
        return $this->_data["recipient_note"];
    }

    /**
     * Set recipient_note
     * 
     * @param string|null $recipient_note Note visible for both sender and recipient.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRecipientNote(?string $recipient_note) {
        return $this->_set("recipient_note", $recipient_note);
    }

    /**
     * Get payment_id
     *
     * @return string|null
     */
    public function getPaymentId(): ?string {
        return $this->_data["payment_id"];
    }

    /**
     * Set payment_id
     * 
     * @param string|null $payment_id Payment ID defined in payment order by sender.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPaymentId(?string $payment_id) {
        return $this->_set("payment_id", $payment_id);
    }

    /**
     * Get attr
     *
     * @return string|null
     */
    public function getAttr(): ?string {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param string|null $attr Present only for operationType WITHDRAWAL and XLM / XRP based accounts it represents message or destinationTag of the recipient, if present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAttr(?string $attr) {
        return $this->_set("attr", $attr);
    }

    /**
     * Get address
     *
     * @return string|null
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string|null $address For operationType DEPOSIT it represents address, on which was deposit credited for the account.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(?string $address) {
        return $this->_set("address", $address);
    }

    /**
     * Get tx_id
     *
     * @return string|null
     */
    public function getTxId(): ?string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string|null $tx_id For operationType DEPOSIT, BLOCKCHAIN_TRANSACTION it represents transaction id, for which deposit occured.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxId(?string $tx_id) {
        return $this->_set("tx_id", $tx_id);
    }
}
