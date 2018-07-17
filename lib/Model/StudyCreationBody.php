<?php
/**
 * StudyCreationBody
 *
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
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
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace QuantiModo\Client\Model;

use \ArrayAccess;
use \QuantiModo\Client\ObjectSerializer;

/**
 * StudyCreationBody Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StudyCreationBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StudyCreationBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'predictor_variable_name' => 'string',
        'outcome_variable_name' => 'string',
        'study_title' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'predictor_variable_name' => null,
        'outcome_variable_name' => null,
        'study_title' => null,
        'type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'predictor_variable_name' => 'predictorVariableName',
        'outcome_variable_name' => 'outcomeVariableName',
        'study_title' => 'studyTitle',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'predictor_variable_name' => 'setPredictorVariableName',
        'outcome_variable_name' => 'setOutcomeVariableName',
        'study_title' => 'setStudyTitle',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'predictor_variable_name' => 'getPredictorVariableName',
        'outcome_variable_name' => 'getOutcomeVariableName',
        'study_title' => 'getStudyTitle',
        'type' => 'getType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const TYPE_INDIVIDUAL = 'individual';
    const TYPE_GROUP = 'group';
    const TYPE__GLOBAL = 'global';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INDIVIDUAL,
            self::TYPE_GROUP,
            self::TYPE__GLOBAL,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['predictor_variable_name'] = isset($data['predictor_variable_name']) ? $data['predictor_variable_name'] : null;
        $this->container['outcome_variable_name'] = isset($data['outcome_variable_name']) ? $data['outcome_variable_name'] : null;
        $this->container['study_title'] = isset($data['study_title']) ? $data['study_title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['predictor_variable_name'] === null) {
            $invalidProperties[] = "'predictor_variable_name' can't be null";
        }
        if ($this->container['outcome_variable_name'] === null) {
            $invalidProperties[] = "'outcome_variable_name' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['predictor_variable_name'] === null) {
            return false;
        }
        if ($this->container['outcome_variable_name'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets predictor_variable_name
     *
     * @return string
     */
    public function getPredictorVariableName()
    {
        return $this->container['predictor_variable_name'];
    }

    /**
     * Sets predictor_variable_name
     *
     * @param string $predictor_variable_name Name of predictor variable
     *
     * @return $this
     */
    public function setPredictorVariableName($predictor_variable_name)
    {
        $this->container['predictor_variable_name'] = $predictor_variable_name;

        return $this;
    }

    /**
     * Gets outcome_variable_name
     *
     * @return string
     */
    public function getOutcomeVariableName()
    {
        return $this->container['outcome_variable_name'];
    }

    /**
     * Sets outcome_variable_name
     *
     * @param string $outcome_variable_name Name of the outcome variable
     *
     * @return $this
     */
    public function setOutcomeVariableName($outcome_variable_name)
    {
        $this->container['outcome_variable_name'] = $outcome_variable_name;

        return $this;
    }

    /**
     * Gets study_title
     *
     * @return string
     */
    public function getStudyTitle()
    {
        return $this->container['study_title'];
    }

    /**
     * Sets study_title
     *
     * @param string $study_title Title of your study (optional)
     *
     * @return $this
     */
    public function setStudyTitle($study_title)
    {
        $this->container['study_title'] = $study_title;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Individual studies are based on data of a single user. Group studies are based on data from a specific group of individuals who have joined.  Global studies are based on aggregated and anonymously shared data from all users.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


