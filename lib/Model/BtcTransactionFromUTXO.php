<?php

/**
 * BtcTransactionFromUTXO Model
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
 * BtcTransactionFromUTXO Model
 */
class BtcTransactionFromUTXO extends AbstractModel {

    public const _D = null;
    protected static $_name = "BtcTransactionFromUTXO";
    protected static $_definition = [
        "from_utxo" => ["fromUTXO", "\Tatum\Model\BtcTransactionFromUTXOSource[]", null, "getFromUtxo", "setFromUtxo", null, ["r" => 1, "c" => 1]], 
        "to" => ["to", "\Tatum\Model\BtcTransactionFromUTXOTarget[]", null, "getTo", "setTo", null, ["r" => 1, "c" => 1]], 
        "fee" => ["fee", "string", null, "getFee", "setFee", null, ["r" => 0]], 
        "change_address" => ["changeAddress", "string", null, "getChangeAddress", "setChangeAddress", null, ["r" => 0]]
    ];

    /**
     * BtcTransactionFromUTXO
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get from_utxo
     *
     * @return array|null
     */
    public function getFromUtxo(): ?array {
        return $this->_data["from_utxo"];
    }

    /**
     * Set from_utxo
     * 
     * @param \Tatum\Model\BtcTransactionFromUTXOSource[] $from_utxo The array of transaction hashes, indexes of its UTXOs, and the private keys of the associated blockchain addresses
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromUtxo(array $from_utxo) {
        return $this->_set("from_utxo", $from_utxo);
    }

    /**
     * Get to
     *
     * @return array|null
     */
    public function getTo(): ?array {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param \Tatum\Model\BtcTransactionFromUTXOTarget[] $to The array of blockchain addresses to send the assets to and the amounts that each address should receive (in BTC). The difference between the UTXOs calculated in the <code>fromUTXO</code> section and the total amount to receive calculated in the <code>to</code> section will be used as the gas fee. To explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent, set the <code>fee</code> and <code>changeAddress</code> parameters.
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
     * @param string|null $change_address The blockchain address to send any extra assets remaining after covering the fee; if you are using this parameter, you have to also use the <code>fee</code> parameter because these two parameters only work together.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChangeAddress(?string $change_address) {
        return $this->_set("change_address", $change_address);
    }
}
