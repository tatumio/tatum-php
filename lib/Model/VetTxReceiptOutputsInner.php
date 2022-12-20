<?php

/**
 * VetTxReceipt_outputs_inner Model
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
 * VetTxReceipt_outputs_inner Model
 */
class VetTxReceiptOutputsInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "VetTxReceipt_outputs_inner";
    protected static $_definition = [
        "events" => ["events", "object[]", null, "getEvents", "setEvents"], 
        "transfers" => ["transfers", "\Tatum\Model\VetTxReceiptOutputsInnerTransfersInner[]", null, "getTransfers", "setTransfers"]
    ];

    /**
     * VetTxReceiptOutputsInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["events"=>null, "transfers"=>null] as $k => $v) {
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
     * Get events
     *
     * @return object[]|null
     */
    public function getEvents(): ?array {
        return $this->_data["events"];
    }

    /**
     * Set events
     * 
     * @param object[]|null $events events
     * @return $this
     */
    public function setEvents(?array $events) {
        $this->_data['events'] = $events;

        return $this;
    }

    /**
     * Get transfers
     *
     * @return \Tatum\Model\VetTxReceiptOutputsInnerTransfersInner[]|null
     */
    public function getTransfers(): ?array {
        return $this->_data["transfers"];
    }

    /**
     * Set transfers
     * 
     * @param \Tatum\Model\VetTxReceiptOutputsInnerTransfersInner[]|null $transfers transfers
     * @return $this
     */
    public function setTransfers(?array $transfers) {
        $this->_data['transfers'] = $transfers;

        return $this;
    }
}