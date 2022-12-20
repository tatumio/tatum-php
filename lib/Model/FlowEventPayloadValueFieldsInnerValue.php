<?php

/**
 * FlowEvent_payload_value_fields_inner_value Model
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
 * FlowEvent_payload_value_fields_inner_value Model
 */
class FlowEventPayloadValueFieldsInnerValue extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "FlowEvent_payload_value_fields_inner_value";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType"], 
        "value" => ["value", "\Tatum\Model\FlowEventPayloadValueFieldsInnerValueOneOf1Value", null, "getValue", "setValue"]
    ];

    /**
     * FlowEventPayloadValueFieldsInnerValue
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["type"=>null, "value"=>null] as $k => $v) {
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
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string|null $type Type of the value
     * @return $this
     */
    public function setType(?string $type) {
        $this->_data['type'] = $type;

        return $this;
    }

    /**
     * Get value
     *
     * @return \Tatum\Model\FlowEventPayloadValueFieldsInnerValueOneOf1Value|null
     */
    public function getValue(): ?\Tatum\Model\FlowEventPayloadValueFieldsInnerValueOneOf1Value {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param \Tatum\Model\FlowEventPayloadValueFieldsInnerValueOneOf1Value|null $value value
     * @return $this
     */
    public function setValue(?\Tatum\Model\FlowEventPayloadValueFieldsInnerValueOneOf1Value $value) {
        $this->_data['value'] = $value;

        return $this;
    }
}