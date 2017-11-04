<?php
/**
 * Loading
 *
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * quantimodo
 *
 * We make it easy to retrieve and analyze normalized user data from a wide array of devices and applications. Check out our [docs and sdk's](https://github.com/QuantiModo/docs) or [contact us](https://help.quantimo.do).
 *
 * OpenAPI spec version: 5.8.100414
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace QuantiModo\Client\Model;

use \ArrayAccess;

/**
 * Loading Class Doc Comment
 *
 * @category    Class
 * @package     QuantiModo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Loading implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Loading';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hide_duration' => 'int',
        'show_duration' => 'int',
        'style' => '\QuantiModo\Client\Model\ChartStyle'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'hide_duration' => null,
        'show_duration' => null,
        'style' => null
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
        'hide_duration' => 'hideDuration',
        'show_duration' => 'showDuration',
        'style' => 'style'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'hide_duration' => 'setHideDuration',
        'show_duration' => 'setShowDuration',
        'style' => 'setStyle'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'hide_duration' => 'getHideDuration',
        'show_duration' => 'getShowDuration',
        'style' => 'getStyle'
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
        $this->container['hide_duration'] = isset($data['hide_duration']) ? $data['hide_duration'] : null;
        $this->container['show_duration'] = isset($data['show_duration']) ? $data['show_duration'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['hide_duration'] === null) {
            $invalid_properties[] = "'hide_duration' can't be null";
        }
        if ($this->container['show_duration'] === null) {
            $invalid_properties[] = "'show_duration' can't be null";
        }
        if ($this->container['style'] === null) {
            $invalid_properties[] = "'style' can't be null";
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

        if ($this->container['hide_duration'] === null) {
            return false;
        }
        if ($this->container['show_duration'] === null) {
            return false;
        }
        if ($this->container['style'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets hide_duration
     * @return int
     */
    public function getHideDuration()
    {
        return $this->container['hide_duration'];
    }

    /**
     * Sets hide_duration
     * @param int $hide_duration Example: 10
     * @return $this
     */
    public function setHideDuration($hide_duration)
    {
        $this->container['hide_duration'] = $hide_duration;

        return $this;
    }

    /**
     * Gets show_duration
     * @return int
     */
    public function getShowDuration()
    {
        return $this->container['show_duration'];
    }

    /**
     * Sets show_duration
     * @param int $show_duration Example: 10
     * @return $this
     */
    public function setShowDuration($show_duration)
    {
        $this->container['show_duration'] = $show_duration;

        return $this;
    }

    /**
     * Gets style
     * @return \QuantiModo\Client\Model\ChartStyle
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     * @param \QuantiModo\Client\Model\ChartStyle $style
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

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
            return json_encode(\QuantiModo\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\QuantiModo\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

