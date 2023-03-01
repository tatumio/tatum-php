<?php

/**
 * NftTokenByCollectionErc721 Model
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
 * NftTokenByCollectionErc721 Model
 */
class NftTokenByCollectionErc721 extends AbstractModel {

    public const _D = null;
    protected static $_name = "NftTokenByCollectionErc721";
    protected static $_definition = [
        "token_id" => ["tokenId", "string", 'uint256', "getTokenId", "setTokenId", null, ["r" => 1, "xl" => 78]], 
        "metadata" => ["metadata", "\Tatum\Model\NftTokenByCollectionErc721TokenMetadata", null, "getMetadata", "setMetadata", null, ["r" => 0]]
    ];

    /**
     * NftTokenByCollectionErc721
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get token_id
     *
     * @return string
     */
    public function getTokenId(): ?string {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string $token_id ID of the token.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTokenId(string $token_id) {
        return $this->_set("token_id", $token_id);
    }

    /**
     * Get metadata
     *
     * @return \Tatum\Model\NftTokenByCollectionErc721TokenMetadata|null
     */
    public function getMetadata(): ?\Tatum\Model\NftTokenByCollectionErc721TokenMetadata {
        return $this->_data["metadata"];
    }

    /**
     * Set metadata
     * 
     * @param \Tatum\Model\NftTokenByCollectionErc721TokenMetadata|null $metadata metadata
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMetadata(?\Tatum\Model\NftTokenByCollectionErc721TokenMetadata $metadata) {
        return $this->_set("metadata", $metadata);
    }
}
