<?php

declare(strict_types=1);

/**
 * Transfer Bitcoin from UTXO
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Local\Transaction\Bitcoin;
!defined("TATUM-SDK") && exit();

class Transfer {
    /**
     * The fee to be paid for the transaction
     *
     * @var string|null
     */
    protected $_fee = null;

    /**
     * The blockchain address to send any extra assets remaining after covering the fee
     *
     * @var string|null
     */
    protected $_changeAddress = null;

    /**
     * Source array
     *
     * @var array
     */
    protected $_sources = [];

    /**
     * Target array
     *
     * @var array
     */
    protected $_targets = [];

    /**
     * Set transaction fee
     *
     * @param string|null $fee The fee to be paid for the transaction (in BTC); if you are using this method,
     * you have to also use the <code>setChangeAddress()</code> method because these two methods only work together
     *
     * @return $this
     */
    public function setFee(string $fee = null): self {
        $this->_fee = $fee;

        return $this;
    }

    /**
     * Get the transaction fee
     *
     * @return string|null
     */
    public function getFee(): ?string {
        return $this->_fee;
    }

    /**
     *
     * @param string|null $changeAddress The blockchain address to send any extra assets remaining after covering the fee;
     * if you are using this method, you have to also use the <code>setFee()</code> method because these two methods only work together
     *
     * @return $this
     */
    public function setChangeAddress(string $changeAddress = null): self {
        $this->_changeAddress = $changeAddress;

        return $this;
    }

    /**
     * Get the change address
     *
     * @return string|null
     */
    public function getChangeAddress(): ?string {
        return $this->_changeAddress;
    }

    /**
     * Add a transaction source
     *
     * @param string $privateKey Private key
     * @param string $hash       Hash
     * @param float  $index      Index
     * @param float  $value      Value
     */
    public function addSource($privateKey, $hash, $index, $value): self {
        $this->_sources[] = [$privateKey, $hash, $index, $value];

        return $this;
    }

    /**
     * Get the transaction sources
     *
     * @return array Array of [privateKey, hash, index, value]
     */
    public function getSources(): array {
        return $this->_sources;
    }

    /**
     * Add a target
     *
     * @param string $address The blockchain address to receive the assets
     * @param float  $value   The amount to receive
     *
     * @return $this
     */
    public function addTarget(string $address, float $value): self {
        $this->_targets[] = [$address, $value];

        return $this;
    }

    /**
     * Get transaction target objects
     *
     * @return array of [address, value]
     */
    public function getTargets(): array {
        return $this->_targets;
    }
}
