<?php

/**
 * Model Interface
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
 * Interface abstracting model access.
 *
 * @package Tatum\Model
 */
interface ModelInterface {
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string|class-string>
     */
    public static function openAPITypes(): array;

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string|null>
     */
    public static function openAPIFormats(): array;

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array<array-key, string>
     */
    public static function attributeMap(): array;

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<array-key, string>
     */
    public static function setters(): array;

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<array-key, string>
     */
    public static function getters(): ?array;

    /**
     * The original name of the model
     *
     * @return string
     */
    public function modelName(): string;

    /**
     * Validate all the properties in the model return true if all passed
     *
     * @return bool
     */
    public function valid(): bool;

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[]
     */
    public function listInvalidProperties(): array;

    /**
     * Get list of additional properties for the model
     *
     * @return mixed[] List of additional properties
     */
    public function listAdditionalProperties(): array;

    /**
     * Set an additional property for the model
     *
     * @param string $property Property name
     * @param mixed  $value    Value of the property
     */
    public function additionalPropertySet(string $property, $value);
}
