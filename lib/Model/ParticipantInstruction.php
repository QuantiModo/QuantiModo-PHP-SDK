<?php
/**
 * ParticipantInstruction
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
 * ParticipantInstruction Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ParticipantInstruction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ParticipantInstruction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'instructions_for_cause_variable' => 'string',
        'instructions_for_effect_variable' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'instructions_for_cause_variable' => null,
        'instructions_for_effect_variable' => null
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
        'instructions_for_cause_variable' => 'instructionsForCauseVariable',
        'instructions_for_effect_variable' => 'instructionsForEffectVariable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instructions_for_cause_variable' => 'setInstructionsForCauseVariable',
        'instructions_for_effect_variable' => 'setInstructionsForEffectVariable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instructions_for_cause_variable' => 'getInstructionsForCauseVariable',
        'instructions_for_effect_variable' => 'getInstructionsForEffectVariable'
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
        $this->container['instructions_for_cause_variable'] = isset($data['instructions_for_cause_variable']) ? $data['instructions_for_cause_variable'] : null;
        $this->container['instructions_for_effect_variable'] = isset($data['instructions_for_effect_variable']) ? $data['instructions_for_effect_variable'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets instructions_for_cause_variable
     *
     * @return string
     */
    public function getInstructionsForCauseVariable()
    {
        return $this->container['instructions_for_cause_variable'];
    }

    /**
     * Sets instructions_for_cause_variable
     *
     * @param string $instructions_for_cause_variable Ex: <a href=\"https://www.amazon.com/Fitbit-Charge-Heart-Fitness-Wristband/dp/B01K9S260E/ref=as_li_ss_tl?ie=UTF8&qid=1493518902&sr=8-3&keywords=fitbit&th=1&linkCode=ll1&tag=quant08-20&linkId=b357b0833de73b0c4e935fd7c13a079e\">Obtain Fitbit</a> and use it to record your Sleep Duration. Once you have a <a href=\"https://www.amazon.com/Fitbit-Charge-Heart-Fitness-Wristband/dp/B01K9S260E/ref=as_li_ss_tl?ie=UTF8&qid=1493518902&sr=8-3&keywords=fitbit&th=1&linkCode=ll1&tag=quant08-20&linkId=b357b0833de73b0c4e935fd7c13a079e\">Fitbit</a> account, <a href=\"https://quantimodo.quantimo.do/ionic/Modo/www/#/app/import\">connect your  Fitbit account at QuantiModo</a> to automatically import and analyze your data.
     *
     * @return $this
     */
    public function setInstructionsForCauseVariable($instructions_for_cause_variable)
    {
        $this->container['instructions_for_cause_variable'] = $instructions_for_cause_variable;

        return $this;
    }

    /**
     * Gets instructions_for_effect_variable
     *
     * @return string
     */
    public function getInstructionsForEffectVariable()
    {
        return $this->container['instructions_for_effect_variable'];
    }

    /**
     * Sets instructions_for_effect_variable
     *
     * @param string $instructions_for_effect_variable Ex: <a href=\"https://quantimo.do\">Obtain QuantiModo</a> and use it to record your Overall Mood. Once you have a <a href=\"https://quantimo.do\">QuantiModo</a> account, <a href=\"https://quantimodo.quantimo.do/ionic/Modo/www/#/app/import\">connect your  QuantiModo account at QuantiModo</a> to automatically import and analyze your data.
     *
     * @return $this
     */
    public function setInstructionsForEffectVariable($instructions_for_effect_variable)
    {
        $this->container['instructions_for_effect_variable'] = $instructions_for_effect_variable;

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


