<?php

/**
 * BtcTransactionFromAddress Model
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
 * BtcTransactionFromAddress Model
 */
class BtcTransactionFromAddress extends AbstractModel {

    public const _D = null;
    protected static $_name = "BtcTransactionFromAddress";
    protected static $_definition = [
        "from_address" => ["fromAddress", "\Tatum\Model\BtcTransactionFromAddressSource[]", null, "getFromAddress", "setFromAddress", null, ["r" => 1, "c" => 1]], 
        "to" => ["to", "\Tatum\Model\BtcTransactionFromAddressTarget[]", null, "getTo", "setTo", null, ["r" => 1, "c" => 1]], 
        "fee" => ["fee", "string", null, "getFee", "setFee", null, ["r" => 0]], 
        "change_address" => ["changeAddress", "string", null, "getChangeAddress", "setChangeAddress", null, ["r" => 0]]
    ];

    /**
     * BtcTransactionFromAddress
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get from_address
     *
     * @return \Tatum\Model\BtcTransactionFromAddressSource[]
     */
    public function getFromAddress(): ?array {
        return $this->_data["from_address"];
    }

    /**
     * Set from_address
     * 
     * @param \Tatum\Model\BtcTransactionFromAddressSource[] $from_address The array of blockchain addresses to send the assets from and their private keys. For each address, the last 100 transactions are scanned for any UTXO to be included in the transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromAddress(array $from_address) {
        return $this->_set("from_address", $from_address);
    }

    /**
     * Get to
     *
     * @return \Tatum\Model\BtcTransactionFromAddressTarget[]
     */
    public function getTo(): ?array {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param \Tatum\Model\BtcTransactionFromAddressTarget[] $to The array of blockchain addresses to send the assets to and the amounts that each address should receive (in BTC). The difference between the UTXOs calculated in the <code>fromAddress</code> section and the total amount to receive calculated in the <code>to</code> section will be used as the gas fee. To explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent, set the <code>fee</code> and <code>changeAddress</code> parameters.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(array $to) {
        return $this->_set("to", $to);
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
     * @param string|null $fee The fee to be paid for the transaction (in BTC); if you are using this parameter, you have to also use the <code>changeAddress</code> parameter because these two parameters only work together.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?string $fee) {
        return $this->_set("fee", $fee);
    }

    /**
     * Get change_address
     *
     * @return string|null
     */
    public function getChangeAddress(): ?string {
        return $this->_data["change_address"];
    }

    /**
     * Set change_address
     * 
     * @param string|null $change_address The blockchain address to send any extra assets remaning after covering the fee to; if you are using this parameter, you have to also use the <code>fee</code> parameter because these two parameters only work together.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChangeAddress(?string $change_address) {
        return $this->_set("change_address", $change_address);
    }
}
