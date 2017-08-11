<?php
/**
 * StoreDataGroupInterface
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
 * StoreDataGroupInterface Class Doc Comment
 *
 * @category    Class
 * @description Group interface
 * @package     Swagger\Magento2Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StoreDataGroupInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'store-data-group-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'website_id' => 'int',
        'root_category_id' => 'int',
        'default_store_id' => 'int',
        'name' => 'string',
        'extension_attributes' => '\Swagger\Magento2Client\Model\StoreDataGroupExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'website_id' => null,
        'root_category_id' => null,
        'default_store_id' => null,
        'name' => null,
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
        'id' => 'id',
        'website_id' => 'websiteId',
        'root_category_id' => 'rootCategoryId',
        'default_store_id' => 'defaultStoreId',
        'name' => 'name',
        'extension_attributes' => 'extensionAttributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'website_id' => 'setWebsiteId',
        'root_category_id' => 'setRootCategoryId',
        'default_store_id' => 'setDefaultStoreId',
        'name' => 'setName',
        'extension_attributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'website_id' => 'getWebsiteId',
        'root_category_id' => 'getRootCategoryId',
        'default_store_id' => 'getDefaultStoreId',
        'name' => 'getName',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['website_id'] = isset($data['website_id']) ? $data['website_id'] : null;
        $this->container['root_category_id'] = isset($data['root_category_id']) ? $data['root_category_id'] : null;
        $this->container['default_store_id'] = isset($data['default_store_id']) ? $data['default_store_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['website_id'] === null) {
            $invalid_properties[] = "'website_id' can't be null";
        }
        if ($this->container['root_category_id'] === null) {
            $invalid_properties[] = "'root_category_id' can't be null";
        }
        if ($this->container['default_store_id'] === null) {
            $invalid_properties[] = "'default_store_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['website_id'] === null) {
            return false;
        }
        if ($this->container['root_category_id'] === null) {
            return false;
        }
        if ($this->container['default_store_id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets website_id
     * @return int
     */
    public function getWebsiteId()
    {
        return $this->container['website_id'];
    }

    /**
     * Sets website_id
     * @param int $website_id
     * @return $this
     */
    public function setWebsiteId($website_id)
    {
        $this->container['website_id'] = $website_id;

        return $this;
    }

    /**
     * Gets root_category_id
     * @return int
     */
    public function getRootCategoryId()
    {
        return $this->container['root_category_id'];
    }

    /**
     * Sets root_category_id
     * @param int $root_category_id
     * @return $this
     */
    public function setRootCategoryId($root_category_id)
    {
        $this->container['root_category_id'] = $root_category_id;

        return $this;
    }

    /**
     * Gets default_store_id
     * @return int
     */
    public function getDefaultStoreId()
    {
        return $this->container['default_store_id'];
    }

    /**
     * Sets default_store_id
     * @param int $default_store_id
     * @return $this
     */
    public function setDefaultStoreId($default_store_id)
    {
        $this->container['default_store_id'] = $default_store_id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Magento2Client\Model\StoreDataGroupExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Magento2Client\Model\StoreDataGroupExtensionInterface $extension_attributes
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

