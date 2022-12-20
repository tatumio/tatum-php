<?php

/**
 * GenerateAuction Model
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
 * GenerateAuction Model
 */
class GenerateAuction extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_MATIC = 'MATIC';
    protected static $_name = "GenerateAuction";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "fee_recipient" => ["feeRecipient", "string", null, "getFeeRecipient", "setFeeRecipient"], 
        "auction_fee" => ["auctionFee", "float", null, "getAuctionFee", "setAuctionFee"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee" => ["fee", "\Tatum\Model\DeployErc20Fee", null, "getFee", "setFee"]
    ];

    /**
     * GenerateAuction
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "fee_recipient"=>null, "auction_fee"=>null, "from_private_key"=>null, "nonce"=>null, "fee"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['fee_recipient'])) {
            $ip[] = "'fee_recipient' can't be null";
        }
        if ((mb_strlen($this->_data['fee_recipient']) > 42)) {
            $ip[] = "'fee_recipient' length must be <= 42";
        }
        if ((mb_strlen($this->_data['fee_recipient']) < 42)) {
            $ip[] = "'fee_recipient' length must be >= 42";
        }
        if (is_null($this->_data['auction_fee'])) {
            $ip[] = "'auction_fee' can't be null";
        }
        if (($this->_data['auction_fee'] > 10000)) {
            $ip[] = "'auction_fee' must be <= 10000";
        }
        if (($this->_data['auction_fee'] < 0)) {
            $ip[] = "'auction_fee' must be >= 0";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 66)) {
            $ip[] = "'from_private_key' length must be <= 66";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 66)) {
            $ip[] = "'from_private_key' length must be >= 66";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_ETH,
            self::CHAIN_ONE,
            self::CHAIN_KLAY,
            self::CHAIN_BSC,
            self::CHAIN_MATIC,
        ];
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain Blockchain to work with.
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("GenerateAuction.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get fee_recipient
     *
     * @return string
     */
    public function getFeeRecipient(): string {
        return $this->_data["fee_recipient"];
    }

    /**
     * Set fee_recipient
     * 
     * @param string $fee_recipient Address of the recipient of the fee for the trade.
     * @return $this
     */
    public function setFeeRecipient(string $fee_recipient) {
        if ((mb_strlen($fee_recipient) > 42)) {
            throw new IAE('GenerateAuction.setFeeRecipient: $fee_recipient length must be <= 42');
        }
        if ((mb_strlen($fee_recipient) < 42)) {
            throw new IAE('GenerateAuction.setFeeRecipient: $fee_recipient length must be >= 42');
        }
        $this->_data['fee_recipient'] = $fee_recipient;

        return $this;
    }

    /**
     * Get auction_fee
     *
     * @return float
     */
    public function getAuctionFee(): float {
        return $this->_data["auction_fee"];
    }

    /**
     * Set auction_fee
     * 
     * @param float $auction_fee Percentage of the selling amount of the NFT asset. 100 - 1%
     * @return $this
     */
    public function setAuctionFee(float $auction_fee) {
        if (($auction_fee > 10000)) {
            throw new IAE('GenerateAuction.setAuctionFee: $auction_fee must be <=10000');
        }
        if (($auction_fee < 0)) {
            throw new IAE('GenerateAuction.setAuctionFee: $auction_fee must be >=0');
        }
        $this->_data['auction_fee'] = $auction_fee;

        return $this;
    }

    /**
     * Get from_private_key
     *
     * @return string
     */
    public function getFromPrivateKey(): string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key Private key of sender address. Private key, or signature Id must be present.
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 66)) {
            throw new IAE('GenerateAuction.setFromPrivateKey: $from_private_key length must be <= 66');
        }
        if ((mb_strlen($from_private_key) < 66)) {
            throw new IAE('GenerateAuction.setFromPrivateKey: $from_private_key length must be >= 66');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }

    /**
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce The nonce to be set to the transaction; if not present, the last known nonce will be used
     * @return $this
     */
    public function setNonce(?float $nonce) {
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\DeployErc20Fee|null
     */
    public function getFee(): ?\Tatum\Model\DeployErc20Fee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\DeployErc20Fee|null $fee fee
     * @return $this
     */
    public function setFee(?\Tatum\Model\DeployErc20Fee $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }
}