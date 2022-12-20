<?php

/**
 * OffchainAddresses Model
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
 * OffchainAddresses Model
 */
class OffchainAddresses extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "OffchainAddresses";
    protected static $_definition = [
        "addresses" => ["addresses", "\Tatum\Model\OffchainAddressesAddressesInner[]", null, "getAddresses", "setAddresses"]
    ];

    /**
     * OffchainAddresses
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["addresses"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['addresses'])) {
            $ip[] = "'addresses' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get addresses
     *
     * @return \Tatum\Model\OffchainAddressesAddressesInner[]
     */
    public function getAddresses(): array {
        return $this->_data["addresses"];
    }

    /**
     * Set addresses
     * 
     * @param \Tatum\Model\OffchainAddressesAddressesInner[] $addresses addresses
     * @return $this
     */
    public function setAddresses(array $addresses) {
        $this->_data['addresses'] = $addresses;

        return $this;
    }
}