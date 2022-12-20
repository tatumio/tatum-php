<?php

/**
 * NftGetBalanceSc Model
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
 * NftGetBalanceSc Model
 */
class NftGetBalanceSc extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "NftGetBalanceSc";
    protected static $_definition = [
        "data" => ["data", "string[]", 'uint256', "getData", "setData"]
    ];

    /**
     * NftGetBalanceSc
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["data"=>null] as $k => $v) {
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
     * Get data
     *
     * @return string[]|null
     */
    public function getData(): ?array {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string[]|null $data The array returning the ID of the NFTs
     * @return $this
     */
    public function setData(?array $data) {
        $this->_data['data'] = $data;

        return $this;
    }
}