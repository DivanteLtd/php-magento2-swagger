<?php
/**
 * SalesDataCreditmemoCreationArgumentsInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Magento2Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Magento2Client\Model;

use \ArrayAccess;

/**
 * SalesDataCreditmemoCreationArgumentsInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface CreditmemoCreationArgumentsInterface
 * @package     Swagger\Magento2Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesDataCreditmemoCreationArgumentsInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-creditmemo-creation-arguments-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipping_amount' => 'float',
        'adjustment_positive' => 'float',
        'adjustment_negative' => 'float',
        'extension_attributes' => '\Swagger\Magento2Client\Model\SalesDataCreditmemoCreationArgumentsExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipping_amount' => null,
        'adjustment_positive' => null,
        'adjustment_negative' => null,
        'extension_attributes' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'shipping_amount' => 'shippingAmount',
        'adjustment_positive' => 'adjustmentPositive',
        'adjustment_negative' => 'adjustmentNegative',
        'extension_attributes' => 'extensionAttributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'shipping_amount' => 'setShippingAmount',
        'adjustment_positive' => 'setAdjustmentPositive',
        'adjustment_negative' => 'setAdjustmentNegative',
        'extension_attributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'shipping_amount' => 'getShippingAmount',
        'adjustment_positive' => 'getAdjustmentPositive',
        'adjustment_negative' => 'getAdjustmentNegative',
        'extension_attributes' => 'getExtensionAttributes'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['shipping_amount'] = isset($data['shipping_amount']) ? $data['shipping_amount'] : null;
        $this->container['adjustment_positive'] = isset($data['adjustment_positive']) ? $data['adjustment_positive'] : null;
        $this->container['adjustment_negative'] = isset($data['adjustment_negative']) ? $data['adjustment_negative'] : null;
        $this->container['extension_attributes'] = isset($data['extension_attributes']) ? $data['extension_attributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets shipping_amount
     * @return float
     */
    public function getShippingAmount()
    {
        return $this->container['shipping_amount'];
    }

    /**
     * Sets shipping_amount
     * @param float $shipping_amount Credit memo shipping amount.
     * @return $this
     */
    public function setShippingAmount($shipping_amount)
    {
        $this->container['shipping_amount'] = $shipping_amount;

        return $this;
    }

    /**
     * Gets adjustment_positive
     * @return float
     */
    public function getAdjustmentPositive()
    {
        return $this->container['adjustment_positive'];
    }

    /**
     * Sets adjustment_positive
     * @param float $adjustment_positive Credit memo positive adjustment.
     * @return $this
     */
    public function setAdjustmentPositive($adjustment_positive)
    {
        $this->container['adjustment_positive'] = $adjustment_positive;

        return $this;
    }

    /**
     * Gets adjustment_negative
     * @return float
     */
    public function getAdjustmentNegative()
    {
        return $this->container['adjustment_negative'];
    }

    /**
     * Sets adjustment_negative
     * @param float $adjustment_negative Credit memo negative adjustment.
     * @return $this
     */
    public function setAdjustmentNegative($adjustment_negative)
    {
        $this->container['adjustment_negative'] = $adjustment_negative;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Magento2Client\Model\SalesDataCreditmemoCreationArgumentsExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Magento2Client\Model\SalesDataCreditmemoCreationArgumentsExtensionInterface $extension_attributes
     * @return $this
     */
    public function setExtensionAttributes($extension_attributes)
    {
        $this->container['extension_attributes'] = $extension_attributes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Magento2Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Magento2Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


