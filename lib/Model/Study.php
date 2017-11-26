<?php
/**
 * Study
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
 * Study Class Doc Comment
 *
 * @category    Class
 * @package     QuantiModo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Study implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Study';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cause_variable' => '\QuantiModo\Client\Model\UserVariable',
        'charts' => '\QuantiModo\Client\Model\Chart[]',
        'effect_variable' => '\QuantiModo\Client\Model\UserVariable',
        'participant_instructions' => '\QuantiModo\Client\Model\ParticipantInstruction',
        'statistics' => '\QuantiModo\Client\Model\Correlation',
        'study_html' => '\QuantiModo\Client\Model\StudyHtml',
        'study_images' => '\QuantiModo\Client\Model\StudyImages',
        'study_links' => '\QuantiModo\Client\Model\StudyLinks',
        'text' => '\QuantiModo\Client\Model\StudyText',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cause_variable' => null,
        'charts' => null,
        'effect_variable' => null,
        'participant_instructions' => null,
        'statistics' => null,
        'study_html' => null,
        'study_images' => null,
        'study_links' => null,
        'text' => null,
        'type' => null
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
        'cause_variable' => 'causeVariable',
        'charts' => 'charts',
        'effect_variable' => 'effectVariable',
        'participant_instructions' => 'participantInstructions',
        'statistics' => 'statistics',
        'study_html' => 'studyHtml',
        'study_images' => 'studyImages',
        'study_links' => 'studyLinks',
        'text' => 'text',
        'type' => 'type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'cause_variable' => 'setCauseVariable',
        'charts' => 'setCharts',
        'effect_variable' => 'setEffectVariable',
        'participant_instructions' => 'setParticipantInstructions',
        'statistics' => 'setStatistics',
        'study_html' => 'setStudyHtml',
        'study_images' => 'setStudyImages',
        'study_links' => 'setStudyLinks',
        'text' => 'setText',
        'type' => 'setType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'cause_variable' => 'getCauseVariable',
        'charts' => 'getCharts',
        'effect_variable' => 'getEffectVariable',
        'participant_instructions' => 'getParticipantInstructions',
        'statistics' => 'getStatistics',
        'study_html' => 'getStudyHtml',
        'study_images' => 'getStudyImages',
        'study_links' => 'getStudyLinks',
        'text' => 'getText',
        'type' => 'getType'
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
        $this->container['cause_variable'] = isset($data['cause_variable']) ? $data['cause_variable'] : null;
        $this->container['charts'] = isset($data['charts']) ? $data['charts'] : null;
        $this->container['effect_variable'] = isset($data['effect_variable']) ? $data['effect_variable'] : null;
        $this->container['participant_instructions'] = isset($data['participant_instructions']) ? $data['participant_instructions'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
        $this->container['study_html'] = isset($data['study_html']) ? $data['study_html'] : null;
        $this->container['study_images'] = isset($data['study_images']) ? $data['study_images'] : null;
        $this->container['study_links'] = isset($data['study_links']) ? $data['study_links'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
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

        if ($this->container['type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets cause_variable
     * @return \QuantiModo\Client\Model\UserVariable
     */
    public function getCauseVariable()
    {
        return $this->container['cause_variable'];
    }

    /**
     * Sets cause_variable
     * @param \QuantiModo\Client\Model\UserVariable $cause_variable
     * @return $this
     */
    public function setCauseVariable($cause_variable)
    {
        $this->container['cause_variable'] = $cause_variable;

        return $this;
    }

    /**
     * Gets charts
     * @return \QuantiModo\Client\Model\Chart[]
     */
    public function getCharts()
    {
        return $this->container['charts'];
    }

    /**
     * Sets charts
     * @param \QuantiModo\Client\Model\Chart[] $charts
     * @return $this
     */
    public function setCharts($charts)
    {
        $this->container['charts'] = $charts;

        return $this;
    }

    /**
     * Gets effect_variable
     * @return \QuantiModo\Client\Model\UserVariable
     */
    public function getEffectVariable()
    {
        return $this->container['effect_variable'];
    }

    /**
     * Sets effect_variable
     * @param \QuantiModo\Client\Model\UserVariable $effect_variable
     * @return $this
     */
    public function setEffectVariable($effect_variable)
    {
        $this->container['effect_variable'] = $effect_variable;

        return $this;
    }

    /**
     * Gets participant_instructions
     * @return \QuantiModo\Client\Model\ParticipantInstruction
     */
    public function getParticipantInstructions()
    {
        return $this->container['participant_instructions'];
    }

    /**
     * Sets participant_instructions
     * @param \QuantiModo\Client\Model\ParticipantInstruction $participant_instructions
     * @return $this
     */
    public function setParticipantInstructions($participant_instructions)
    {
        $this->container['participant_instructions'] = $participant_instructions;

        return $this;
    }

    /**
     * Gets statistics
     * @return \QuantiModo\Client\Model\Correlation
     */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
     * Sets statistics
     * @param \QuantiModo\Client\Model\Correlation $statistics
     * @return $this
     */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;

        return $this;
    }

    /**
     * Gets study_html
     * @return \QuantiModo\Client\Model\StudyHtml
     */
    public function getStudyHtml()
    {
        return $this->container['study_html'];
    }

    /**
     * Sets study_html
     * @param \QuantiModo\Client\Model\StudyHtml $study_html
     * @return $this
     */
    public function setStudyHtml($study_html)
    {
        $this->container['study_html'] = $study_html;

        return $this;
    }

    /**
     * Gets study_images
     * @return \QuantiModo\Client\Model\StudyImages
     */
    public function getStudyImages()
    {
        return $this->container['study_images'];
    }

    /**
     * Sets study_images
     * @param \QuantiModo\Client\Model\StudyImages $study_images
     * @return $this
     */
    public function setStudyImages($study_images)
    {
        $this->container['study_images'] = $study_images;

        return $this;
    }

    /**
     * Gets study_links
     * @return \QuantiModo\Client\Model\StudyLinks
     */
    public function getStudyLinks()
    {
        return $this->container['study_links'];
    }

    /**
     * Sets study_links
     * @param \QuantiModo\Client\Model\StudyLinks $study_links
     * @return $this
     */
    public function setStudyLinks($study_links)
    {
        $this->container['study_links'] = $study_links;

        return $this;
    }

    /**
     * Gets text
     * @return \QuantiModo\Client\Model\StudyText
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     * @param \QuantiModo\Client\Model\StudyText $text
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Example: population
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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

