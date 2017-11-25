<?php
/**
 * Vote
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
 * Vote Class Doc Comment
 *
 * @category    Class
 * @package     QuantiModo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Vote implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Vote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cause_variable_id' => 'int',
        'client_id' => 'string',
        'created_at' => '\DateTime',
        'effect_variable_id' => 'int',
        'id' => 'int',
        'updated_at' => '\DateTime',
        'user_id' => 'int',
        'value' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cause_variable_id' => null,
        'client_id' => null,
        'created_at' => 'date-time',
        'effect_variable_id' => null,
        'id' => 'int32',
        'updated_at' => 'date-time',
        'user_id' => 'int32',
        'value' => null
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
        'cause_variable_id' => 'causeVariableId',
        'client_id' => 'clientId',
        'created_at' => 'createdAt',
        'effect_variable_id' => 'effectVariableId',
        'id' => 'id',
        'updated_at' => 'updatedAt',
        'user_id' => 'userId',
        'value' => 'value'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'cause_variable_id' => 'setCauseVariableId',
        'client_id' => 'setClientId',
        'created_at' => 'setCreatedAt',
        'effect_variable_id' => 'setEffectVariableId',
        'id' => 'setId',
        'updated_at' => 'setUpdatedAt',
        'user_id' => 'setUserId',
        'value' => 'setValue'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'cause_variable_id' => 'getCauseVariableId',
        'client_id' => 'getClientId',
        'created_at' => 'getCreatedAt',
        'effect_variable_id' => 'getEffectVariableId',
        'id' => 'getId',
        'updated_at' => 'getUpdatedAt',
        'user_id' => 'getUserId',
        'value' => 'getValue'
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
        $this->container['cause_variable_id'] = isset($data['cause_variable_id']) ? $data['cause_variable_id'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['effect_variable_id'] = isset($data['effect_variable_id']) ? $data['effect_variable_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['cause_variable_id'] === null) {
            $invalid_properties[] = "'cause_variable_id' can't be null";
        }
        if ($this->container['client_id'] === null) {
            $invalid_properties[] = "'client_id' can't be null";
        }
        if ($this->container['effect_variable_id'] === null) {
            $invalid_properties[] = "'effect_variable_id' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalid_properties[] = "'value' can't be null";
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

        if ($this->container['cause_variable_id'] === null) {
            return false;
        }
        if ($this->container['client_id'] === null) {
            return false;
        }
        if ($this->container['effect_variable_id'] === null) {
            return false;
        }
        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['value'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets cause_variable_id
     * @return int
     */
    public function getCauseVariableId()
    {
        return $this->container['cause_variable_id'];
    }

    /**
     * Sets cause_variable_id
     * @param int $cause_variable_id Cause variable id
     * @return $this
     */
    public function setCauseVariableId($cause_variable_id)
    {
        $this->container['cause_variable_id'] = $cause_variable_id;

        return $this;
    }

    /**
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     * @param string $client_id clientId
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at When the record was first created. Use UTC ISO 8601 `YYYY-MM-DDThh:mm:ss`  datetime format
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets effect_variable_id
     * @return int
     */
    public function getEffectVariableId()
    {
        return $this->container['effect_variable_id'];
    }

    /**
     * Sets effect_variable_id
     * @param int $effect_variable_id Effect variable id
     * @return $this
     */
    public function setEffectVariableId($effect_variable_id)
    {
        $this->container['effect_variable_id'] = $effect_variable_id;

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
     * @param int $id id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime $updated_at When the record in the database was last updated. Use UTC ISO 8601 `YYYY-MM-DDThh:mm:ss`  datetime format
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param int $user_id ID of User
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets value
     * @return bool
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param bool $value Vote: 0 (for implausible) or 1 (for plausible)
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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


