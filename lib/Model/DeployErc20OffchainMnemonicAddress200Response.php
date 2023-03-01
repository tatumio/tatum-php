<?php

/**
 * DeployErc20OffchainMnemonicAddress_200_response Model
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
 * DeployErc20OffchainMnemonicAddress_200_response Model
 */
class DeployErc20OffchainMnemonicAddress200Response extends AbstractModel {

    public const _D = null;
    protected static $_name = "DeployErc20OffchainMnemonicAddress_200_response";
    protected static $_definition = [
        "account_id" => ["accountId", "string", null, "getAccountId", "setAccountId", null, ["r" => 1]], 
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId", null, ["r" => 1]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]]
    ];

    /**
     * DeployErc20OffchainMnemonicAddress200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get account_id
     *
     * @return string
     */
    public function getAccountId(): ?string {
        return $this->_data["account_id"];
    }

    /**
     * Set account_id
     * 
     * @param string $account_id Account ID with the type of currency as created ERC20/BEP20 token symbol. Account will be unfrozen when ERC20/BEP20 contract address will be set.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountId(string $account_id) {
        return $this->_set("account_id", $account_id);
    }

    /**
     * Get tx_id
     *
     * @return string
     */
    public function getTxId(): ?string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string $tx_id TX hash of successful transaction. From this transaction receipt contract address can be obtained.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxId(string $tx_id) {
        return $this->_set("tx_id", $tx_id);
    }

    /**
     * Get signature_id
     *
     * @return string
     */
    public function getSignatureId(): ?string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id ID of prepared payment template to sign. This is should be stored on a client side to retrieve ID of the blockchain transaction, when signing application signs the transaction and broadcasts it to the blockchain.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }
}
