<?php

/**
 * AdaTransaction Model
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
 * AdaTransaction Model
 */
class AdaTransaction extends AbstractModel {

    public const _D = null;
    protected static $_name = "AdaTransaction";
    protected static $_definition = [
        "from_address" => ["fromAddress", "\Tatum\Model\AdaTransactionFromAddressInner[]", null, "getFromAddress", "setFromAddress", null, ["r" => 0, "c" => 1]], 
        "from_utxo" => ["fromUTXO", "\Tatum\Model\AdaTransactionFromUTXOInner[]", null, "getFromUtxo", "setFromUtxo", null, ["r" => 0, "c" => 1]], 
        "to" => ["to", "\Tatum\Model\AdaTransactionToInner[]", null, "getTo", "setTo", null, ["r" => 1, "c" => 1]]
    ];

    /**
     * AdaTransaction
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
     * @return \Tatum\Model\AdaTransactionFromAddressInner[]|null
     */
    public function getFromAddress(): ?array {
        return $this->_data["from_address"];
    }

    /**
     * Set from_address
     * 
     * @param \Tatum\Model\AdaTransactionFromAddressInner[]|null $from_address Array of addresses and corresponding private keys. Tatum will automatically scan last unspent transactions for each address and will use all of the unspent values. We advise to use this option if you have 1 address per 1 transaction only.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromAddress(?array $from_address) {
        return $this->_set("from_address", $from_address);
    }

    /**
     * Get from_utxo
     *
     * @return \Tatum\Model\AdaTransactionFromUTXOInner[]|null
     */
    public function getFromUtxo(): ?array {
        return $this->_data["from_utxo"];
    }

    /**
     * Set from_utxo
     * 
     * @param \Tatum\Model\AdaTransactionFromUTXOInner[]|null $from_utxo Array of transaction hashes, index of UTXO in it and corresponding private keys. Use this option if you want to calculate amount to send manually. Either fromUTXO or fromAddress must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromUtxo(?array $from_utxo) {
        return $this->_set("from_utxo", $from_utxo);
    }

    /**
     * Get to
     *
     * @return \Tatum\Model\AdaTransactionToInner[]
     */
    public function getTo(): ?array {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param \Tatum\Model\AdaTransactionToInner[] $to Array of addresses and values to send Litecoins to. Values must be set in LTC. Difference between from and to is transaction fee.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(array $to) {
        return $this->_set("to", $to);
    }
}
