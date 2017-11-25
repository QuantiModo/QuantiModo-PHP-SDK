<?php
/**
 * Unit
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
 * OpenAPI spec version: 5.8.112511
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
 * Unit Class Doc Comment
 *
 * @category    Class
 * @package     QuantiModo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Unit implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Unit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'abbreviated_name' => 'string',
        'advanced' => 'int',
        'category' => 'string',
        'category_id' => 'int',
        'category_name' => 'string',
        'conversion_steps' => '\QuantiModo\Client\Model\ConversionStep[]',
        'id' => 'int',
        'manual_tracking' => 'int',
        'maximum_allowed_value' => 'double',
        'maximum_value' => 'int',
        'minimum_allowed_value' => 'double',
        'minimum_value' => 'int',
        'name' => 'string',
        'unit_category' => '\QuantiModo\Client\Model\UnitCategory'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'abbreviated_name' => null,
        'advanced' => null,
        'category' => null,
        'category_id' => null,
        'category_name' => null,
        'conversion_steps' => null,
        'id' => null,
        'manual_tracking' => null,
        'maximum_allowed_value' => 'double',
        'maximum_value' => null,
        'minimum_allowed_value' => 'double',
        'minimum_value' => null,
        'name' => null,
        'unit_category' => null
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
        'abbreviated_name' => 'abbreviatedName',
        'advanced' => 'advanced',
        'category' => 'category',
        'category_id' => 'categoryId',
        'category_name' => 'categoryName',
        'conversion_steps' => 'conversionSteps',
        'id' => 'id',
        'manual_tracking' => 'manualTracking',
        'maximum_allowed_value' => 'maximumAllowedValue',
        'maximum_value' => 'maximumValue',
        'minimum_allowed_value' => 'minimumAllowedValue',
        'minimum_value' => 'minimumValue',
        'name' => 'name',
        'unit_category' => 'unitCategory'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'abbreviated_name' => 'setAbbreviatedName',
        'advanced' => 'setAdvanced',
        'category' => 'setCategory',
        'category_id' => 'setCategoryId',
        'category_name' => 'setCategoryName',
        'conversion_steps' => 'setConversionSteps',
        'id' => 'setId',
        'manual_tracking' => 'setManualTracking',
        'maximum_allowed_value' => 'setMaximumAllowedValue',
        'maximum_value' => 'setMaximumValue',
        'minimum_allowed_value' => 'setMinimumAllowedValue',
        'minimum_value' => 'setMinimumValue',
        'name' => 'setName',
        'unit_category' => 'setUnitCategory'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'abbreviated_name' => 'getAbbreviatedName',
        'advanced' => 'getAdvanced',
        'category' => 'getCategory',
        'category_id' => 'getCategoryId',
        'category_name' => 'getCategoryName',
        'conversion_steps' => 'getConversionSteps',
        'id' => 'getId',
        'manual_tracking' => 'getManualTracking',
        'maximum_allowed_value' => 'getMaximumAllowedValue',
        'maximum_value' => 'getMaximumValue',
        'minimum_allowed_value' => 'getMinimumAllowedValue',
        'minimum_value' => 'getMinimumValue',
        'name' => 'getName',
        'unit_category' => 'getUnitCategory'
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

    const CATEGORY_DISTANCE = 'Distance';
    const CATEGORY_DURATION = 'Duration';
    const CATEGORY_ENERGY = 'Energy';
    const CATEGORY_FREQUENCY = 'Frequency';
    const CATEGORY_MISCELLANY = 'Miscellany';
    const CATEGORY_PRESSURE = 'Pressure';
    const CATEGORY_PROPORTION = 'Proportion';
    const CATEGORY_RATING = 'Rating';
    const CATEGORY_TEMPERATURE = 'Temperature';
    const CATEGORY_VOLUME = 'Volume';
    const CATEGORY_WEIGHT = 'Weight';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_DISTANCE,
            self::CATEGORY_DURATION,
            self::CATEGORY_ENERGY,
            self::CATEGORY_FREQUENCY,
            self::CATEGORY_MISCELLANY,
            self::CATEGORY_PRESSURE,
            self::CATEGORY_PROPORTION,
            self::CATEGORY_RATING,
            self::CATEGORY_TEMPERATURE,
            self::CATEGORY_VOLUME,
            self::CATEGORY_WEIGHT,
        ];
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
        $this->container['abbreviated_name'] = isset($data['abbreviated_name']) ? $data['abbreviated_name'] : null;
        $this->container['advanced'] = isset($data['advanced']) ? $data['advanced'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['category_name'] = isset($data['category_name']) ? $data['category_name'] : null;
        $this->container['conversion_steps'] = isset($data['conversion_steps']) ? $data['conversion_steps'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['manual_tracking'] = isset($data['manual_tracking']) ? $data['manual_tracking'] : null;
        $this->container['maximum_allowed_value'] = isset($data['maximum_allowed_value']) ? $data['maximum_allowed_value'] : null;
        $this->container['maximum_value'] = isset($data['maximum_value']) ? $data['maximum_value'] : null;
        $this->container['minimum_allowed_value'] = isset($data['minimum_allowed_value']) ? $data['minimum_allowed_value'] : null;
        $this->container['minimum_value'] = isset($data['minimum_value']) ? $data['minimum_value'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['unit_category'] = isset($data['unit_category']) ? $data['unit_category'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['abbreviated_name'] === null) {
            $invalid_properties[] = "'abbreviated_name' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalid_properties[] = "'category' can't be null";
        }
        $allowed_values = $this->getCategoryAllowableValues();
        if (!in_array($this->container['category'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['conversion_steps'] === null) {
            $invalid_properties[] = "'conversion_steps' can't be null";
        }
        if ($this->container['maximum_value'] === null) {
            $invalid_properties[] = "'maximum_value' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['unit_category'] === null) {
            $invalid_properties[] = "'unit_category' can't be null";
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

        if ($this->container['abbreviated_name'] === null) {
            return false;
        }
        if ($this->container['category'] === null) {
            return false;
        }
        $allowed_values = $this->getCategoryAllowableValues();
        if (!in_array($this->container['category'], $allowed_values)) {
            return false;
        }
        if ($this->container['conversion_steps'] === null) {
            return false;
        }
        if ($this->container['maximum_value'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['unit_category'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets abbreviated_name
     * @return string
     */
    public function getAbbreviatedName()
    {
        return $this->container['abbreviated_name'];
    }

    /**
     * Sets abbreviated_name
     * @param string $abbreviated_name Unit abbreviation
     * @return $this
     */
    public function setAbbreviatedName($abbreviated_name)
    {
        $this->container['abbreviated_name'] = $abbreviated_name;

        return $this;
    }

    /**
     * Gets advanced
     * @return int
     */
    public function getAdvanced()
    {
        return $this->container['advanced'];
    }

    /**
     * Sets advanced
     * @param int $advanced Example: 1
     * @return $this
     */
    public function setAdvanced($advanced)
    {
        $this->container['advanced'] = $advanced;

        return $this;
    }

    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param string $category Unit category
     * @return $this
     */
    public function setCategory($category)
    {
        $allowed_values = $this->getCategoryAllowableValues();
        if (!in_array($category, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'category', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets category_id
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     * @param int $category_id Example: 6
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets category_name
     * @return string
     */
    public function getCategoryName()
    {
        return $this->container['category_name'];
    }

    /**
     * Sets category_name
     * @param string $category_name Example: Miscellany
     * @return $this
     */
    public function setCategoryName($category_name)
    {
        $this->container['category_name'] = $category_name;

        return $this;
    }

    /**
     * Gets conversion_steps
     * @return \QuantiModo\Client\Model\ConversionStep[]
     */
    public function getConversionSteps()
    {
        return $this->container['conversion_steps'];
    }

    /**
     * Sets conversion_steps
     * @param \QuantiModo\Client\Model\ConversionStep[] $conversion_steps Conversion steps list
     * @return $this
     */
    public function setConversionSteps($conversion_steps)
    {
        $this->container['conversion_steps'] = $conversion_steps;

        return $this;
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
     * @param int $id Example: 29
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets manual_tracking
     * @return int
     */
    public function getManualTracking()
    {
        return $this->container['manual_tracking'];
    }

    /**
     * Sets manual_tracking
     * @param int $manual_tracking Example: 0
     * @return $this
     */
    public function setManualTracking($manual_tracking)
    {
        $this->container['manual_tracking'] = $manual_tracking;

        return $this;
    }

    /**
     * Gets maximum_allowed_value
     * @return double
     */
    public function getMaximumAllowedValue()
    {
        return $this->container['maximum_allowed_value'];
    }

    /**
     * Sets maximum_allowed_value
     * @param double $maximum_allowed_value The maximum allowed value for measurements. While you can record a value above this maximum, it will be excluded from the correlation analysis.
     * @return $this
     */
    public function setMaximumAllowedValue($maximum_allowed_value)
    {
        $this->container['maximum_allowed_value'] = $maximum_allowed_value;

        return $this;
    }

    /**
     * Gets maximum_value
     * @return int
     */
    public function getMaximumValue()
    {
        return $this->container['maximum_value'];
    }

    /**
     * Sets maximum_value
     * @param int $maximum_value Example: 4
     * @return $this
     */
    public function setMaximumValue($maximum_value)
    {
        $this->container['maximum_value'] = $maximum_value;

        return $this;
    }

    /**
     * Gets minimum_allowed_value
     * @return double
     */
    public function getMinimumAllowedValue()
    {
        return $this->container['minimum_allowed_value'];
    }

    /**
     * Sets minimum_allowed_value
     * @param double $minimum_allowed_value The minimum allowed value for measurements. While you can record a value below this minimum, it will be excluded from the correlation analysis.
     * @return $this
     */
    public function setMinimumAllowedValue($minimum_allowed_value)
    {
        $this->container['minimum_allowed_value'] = $minimum_allowed_value;

        return $this;
    }

    /**
     * Gets minimum_value
     * @return int
     */
    public function getMinimumValue()
    {
        return $this->container['minimum_value'];
    }

    /**
     * Sets minimum_value
     * @param int $minimum_value Example: 0
     * @return $this
     */
    public function setMinimumValue($minimum_value)
    {
        $this->container['minimum_value'] = $minimum_value;

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
     * @param string $name Unit name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets unit_category
     * @return \QuantiModo\Client\Model\UnitCategory
     */
    public function getUnitCategory()
    {
        return $this->container['unit_category'];
    }

    /**
     * Sets unit_category
     * @param \QuantiModo\Client\Model\UnitCategory $unit_category
     * @return $this
     */
    public function setUnitCategory($unit_category)
    {
        $this->container['unit_category'] = $unit_category;

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


