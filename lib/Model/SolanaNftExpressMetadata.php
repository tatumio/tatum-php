<?php

/**
 * SolanaNftExpressMetadata Model
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
 * SolanaNftExpressMetadata Model
 */
class SolanaNftExpressMetadata extends AbstractModel {

    public const _D = null;
    protected static $_name = "SolanaNftExpressMetadata";
    protected static $_definition = [
        "name" => ["name", "string", null, "getName", "setName", null, ["r" => 1, "xl" => 255]], 
        "symbol" => ["symbol", "string", null, "getSymbol", "setSymbol", null, ["r" => 1, "xl" => 255]], 
        "seller_fee_basis_points" => ["sellerFeeBasisPoints", "float", null, "getSellerFeeBasisPoints", "setSellerFeeBasisPoints", null, ["r" => 1]], 
        "uri" => ["uri", "string", null, "getUri", "setUri", null, ["r" => 1, "xl" => 500]], 
        "collection" => ["collection", "string", null, "getCollection", "setCollection", null, ["r" => 0, "nl" => 43, "xl" => 44]], 
        "mutable" => ["mutable", "bool", null, "getMutable", "setMutable", true, ["r" => 0]], 
        "creators" => ["creators", "\Tatum\Model\SolanaNftMetadataCreator[]", null, "getCreators", "setCreators", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * SolanaNftExpressMetadata
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get name
     *
     * @return string
     */
    public function getName(): ?string {
        return $this->_data["name"];
    }

    /**
     * Set name
     * 
     * @param string $name The name of the NFT
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setName(string $name) {
        return $this->_set("name", $name);
    }

    /**
     * Get symbol
     *
     * @return string
     */
    public function getSymbol(): ?string {
        return $this->_data["symbol"];
    }

    /**
     * Set symbol
     * 
     * @param string $symbol The symbol or abbreviated name of the NFT
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSymbol(string $symbol) {
        return $this->_set("symbol", $symbol);
    }

    /**
     * Get seller_fee_basis_points
     *
     * @return float
     */
    public function getSellerFeeBasisPoints(): ?float {
        return $this->_data["seller_fee_basis_points"];
    }

    /**
     * Set seller_fee_basis_points
     * 
     * @param float $seller_fee_basis_points The royalty that will be paid to the authors of the minted NFT every time the NFT is transferred<br/>The royalty is calculated as a percentage of the NFT price. To set the royalty to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on.<br/>To specify the NFT authors and their shares in the royalty, set the <code>creators</code> parameter.<br/>To disable the royalty for the NFT completely, set <code>sellerFeeBasisPoints</code> to <code>0</code> and do not set <code>creators</code>.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSellerFeeBasisPoints(float $seller_fee_basis_points) {
        return $this->_set("seller_fee_basis_points", $seller_fee_basis_points);
    }

    /**
     * Get uri
     *
     * @return string
     */
    public function getUri(): ?string {
        return $this->_data["uri"];
    }

    /**
     * Set uri
     * 
     * @param string $uri The URL pointing to the NFT metadata; for more information, see <a href=\"https://eips.ethereum.org/EIPS/eip-721#specification\" target=\"_blank\">EIP-721</a>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUri(string $uri) {
        return $this->_set("uri", $uri);
    }

    /**
     * Get collection
     *
     * @return string|null
     */
    public function getCollection(): ?string {
        return $this->_data["collection"];
    }

    /**
     * Set collection
     * 
     * @param string|null $collection The blockchain address of the NFT collection where the NFT will be minted in. By default, the NFT is minted as not verified (is not considered a part of the collection). To verify the NFT in the collection, use the <a href=\"https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)#operation/NftVerifyInCollection\" target=\"_blank\">NFT verification API</a>. To know more about Solana collections and verification, refer to the <a href=\"https://docs.metaplex.com/programs/token-metadata/certified-collections\" target=\"_blank\">Solana user documentation</a>.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCollection(?string $collection) {
        return $this->_set("collection", $collection);
    }

    /**
     * Get mutable
     *
     * @return bool|null
     */
    public function getMutable(): ?bool {
        return $this->_data["mutable"];
    }

    /**
     * Set mutable
     * 
     * @param bool|null $mutable Specifies whether the NFT metadata is mutable (\"true\") or immutable (\"false\"); if not set, defaults to \"true\"
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMutable(?bool $mutable) {
        return $this->_set("mutable", $mutable);
    }

    /**
     * Get creators
     *
     * @return \Tatum\Model\SolanaNftMetadataCreator[]|null
     */
    public function getCreators(): ?array {
        return $this->_data["creators"];
    }

    /**
     * Set creators
     * 
     * @param \Tatum\Model\SolanaNftMetadataCreator[]|null $creators The blockchain addresses where the royalties will be sent every time the minted NFT is transferred
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCreators(?array $creators) {
        return $this->_set("creators", $creators);
    }
}
