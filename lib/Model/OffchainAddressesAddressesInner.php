<?php

/**
 * OffchainAddresses_addresses_inner Model
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
 * OffchainAddresses_addresses_inner Model
 */
class OffchainAddressesAddressesInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "OffchainAddresses_addresses_inner";
    protected static $_definition = [
        "account_id" => ["accountId", "string", null, "getAccountId", "setAccountId", null, ["r" => 1, "nl" => 24, "xl" => 24]], 
        "derivation_key" => ["derivationKey", "int", 'int32', "getDerivationKey", "setDerivationKey", null, ["r" => 0, "n" => [0], "x" => [2147483647]]]
    ];

    /**
     * OffchainAddressesAddressesInner
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
     * @param string $account_id ID of the account, for which blockchain address will be created.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountId(string $account_id) {
        return $this->_set("account_id", $account_id);
    }

    /**
     * Get derivation_key
     *
     * @return int|null
     */
    public function getDerivationKey(): ?int {
        return $this->_data["derivation_key"];
    }

    /**
     * Set derivation_key
     * 
     * @param int|null $derivation_key Derivation key index for given address to generate. If not present, first not used address will be created.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDerivationKey(?int $derivation_key) {
        return $this->_set("derivation_key", $derivation_key);
    }
}
