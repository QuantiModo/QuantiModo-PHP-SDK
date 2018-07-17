<?php
/**
 * VariableCategory
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
 * VariableCategory Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VariableCategory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VariableCategory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'app_type' => 'string',
        'cause_only' => 'bool',
        'combination_operation' => 'string',
        'created_time' => 'string',
        'unit_abbreviated_name' => 'string',
        'unit_id' => 'int',
        'duration_of_action' => 'int',
        'filling_value' => 'int',
        'help_text' => 'string',
        'id' => 'int',
        'image_url' => 'string',
        'ion_icon' => 'string',
        'manual_tracking' => 'bool',
        'maximum_allowed_value' => 'string',
        'measurement_synonym_singular_lowercase' => 'string',
        'minimum_allowed_value' => 'string',
        'more_info' => 'string',
        'name' => 'string',
        'onset_delay' => 'int',
        'outcome' => 'bool',
        'png_path' => 'string',
        'png_url' => 'string',
        'public' => 'bool',
        'svg_path' => 'string',
        'svg_url' => 'string',
        'updated' => 'int',
        'updated_time' => 'string',
        'variable_category_name' => 'string',
        'variable_category_name_singular' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'app_type' => null,
        'cause_only' => null,
        'combination_operation' => null,
        'created_time' => null,
        'unit_abbreviated_name' => null,
        'unit_id' => null,
        'duration_of_action' => null,
        'filling_value' => null,
        'help_text' => null,
        'id' => null,
        'image_url' => null,
        'ion_icon' => null,
        'manual_tracking' => null,
        'maximum_allowed_value' => null,
        'measurement_synonym_singular_lowercase' => null,
        'minimum_allowed_value' => null,
        'more_info' => null,
        'name' => null,
        'onset_delay' => null,
        'outcome' => null,
        'png_path' => null,
        'png_url' => null,
        'public' => null,
        'svg_path' => null,
        'svg_url' => null,
        'updated' => null,
        'updated_time' => null,
        'variable_category_name' => null,
        'variable_category_name_singular' => null
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
        'app_type' => 'appType',
        'cause_only' => 'causeOnly',
        'combination_operation' => 'combinationOperation',
        'created_time' => 'createdTime',
        'unit_abbreviated_name' => 'unitAbbreviatedName',
        'unit_id' => 'unitId',
        'duration_of_action' => 'durationOfAction',
        'filling_value' => 'fillingValue',
        'help_text' => 'helpText',
        'id' => 'id',
        'image_url' => 'imageUrl',
        'ion_icon' => 'ionIcon',
        'manual_tracking' => 'manualTracking',
        'maximum_allowed_value' => 'maximumAllowedValue',
        'measurement_synonym_singular_lowercase' => 'measurementSynonymSingularLowercase',
        'minimum_allowed_value' => 'minimumAllowedValue',
        'more_info' => 'moreInfo',
        'name' => 'name',
        'onset_delay' => 'onsetDelay',
        'outcome' => 'outcome',
        'png_path' => 'pngPath',
        'png_url' => 'pngUrl',
        'public' => 'public',
        'svg_path' => 'svgPath',
        'svg_url' => 'svgUrl',
        'updated' => 'updated',
        'updated_time' => 'updatedTime',
        'variable_category_name' => 'variableCategoryName',
        'variable_category_name_singular' => 'variableCategoryNameSingular'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_type' => 'setAppType',
        'cause_only' => 'setCauseOnly',
        'combination_operation' => 'setCombinationOperation',
        'created_time' => 'setCreatedTime',
        'unit_abbreviated_name' => 'setUnitAbbreviatedName',
        'unit_id' => 'setUnitId',
        'duration_of_action' => 'setDurationOfAction',
        'filling_value' => 'setFillingValue',
        'help_text' => 'setHelpText',
        'id' => 'setId',
        'image_url' => 'setImageUrl',
        'ion_icon' => 'setIonIcon',
        'manual_tracking' => 'setManualTracking',
        'maximum_allowed_value' => 'setMaximumAllowedValue',
        'measurement_synonym_singular_lowercase' => 'setMeasurementSynonymSingularLowercase',
        'minimum_allowed_value' => 'setMinimumAllowedValue',
        'more_info' => 'setMoreInfo',
        'name' => 'setName',
        'onset_delay' => 'setOnsetDelay',
        'outcome' => 'setOutcome',
        'png_path' => 'setPngPath',
        'png_url' => 'setPngUrl',
        'public' => 'setPublic',
        'svg_path' => 'setSvgPath',
        'svg_url' => 'setSvgUrl',
        'updated' => 'setUpdated',
        'updated_time' => 'setUpdatedTime',
        'variable_category_name' => 'setVariableCategoryName',
        'variable_category_name_singular' => 'setVariableCategoryNameSingular'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_type' => 'getAppType',
        'cause_only' => 'getCauseOnly',
        'combination_operation' => 'getCombinationOperation',
        'created_time' => 'getCreatedTime',
        'unit_abbreviated_name' => 'getUnitAbbreviatedName',
        'unit_id' => 'getUnitId',
        'duration_of_action' => 'getDurationOfAction',
        'filling_value' => 'getFillingValue',
        'help_text' => 'getHelpText',
        'id' => 'getId',
        'image_url' => 'getImageUrl',
        'ion_icon' => 'getIonIcon',
        'manual_tracking' => 'getManualTracking',
        'maximum_allowed_value' => 'getMaximumAllowedValue',
        'measurement_synonym_singular_lowercase' => 'getMeasurementSynonymSingularLowercase',
        'minimum_allowed_value' => 'getMinimumAllowedValue',
        'more_info' => 'getMoreInfo',
        'name' => 'getName',
        'onset_delay' => 'getOnsetDelay',
        'outcome' => 'getOutcome',
        'png_path' => 'getPngPath',
        'png_url' => 'getPngUrl',
        'public' => 'getPublic',
        'svg_path' => 'getSvgPath',
        'svg_url' => 'getSvgUrl',
        'updated' => 'getUpdated',
        'updated_time' => 'getUpdatedTime',
        'variable_category_name' => 'getVariableCategoryName',
        'variable_category_name_singular' => 'getVariableCategoryNameSingular'
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
        $this->container['app_type'] = isset($data['app_type']) ? $data['app_type'] : null;
        $this->container['cause_only'] = isset($data['cause_only']) ? $data['cause_only'] : null;
        $this->container['combination_operation'] = isset($data['combination_operation']) ? $data['combination_operation'] : null;
        $this->container['created_time'] = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['unit_abbreviated_name'] = isset($data['unit_abbreviated_name']) ? $data['unit_abbreviated_name'] : null;
        $this->container['unit_id'] = isset($data['unit_id']) ? $data['unit_id'] : null;
        $this->container['duration_of_action'] = isset($data['duration_of_action']) ? $data['duration_of_action'] : null;
        $this->container['filling_value'] = isset($data['filling_value']) ? $data['filling_value'] : null;
        $this->container['help_text'] = isset($data['help_text']) ? $data['help_text'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['ion_icon'] = isset($data['ion_icon']) ? $data['ion_icon'] : null;
        $this->container['manual_tracking'] = isset($data['manual_tracking']) ? $data['manual_tracking'] : null;
        $this->container['maximum_allowed_value'] = isset($data['maximum_allowed_value']) ? $data['maximum_allowed_value'] : null;
        $this->container['measurement_synonym_singular_lowercase'] = isset($data['measurement_synonym_singular_lowercase']) ? $data['measurement_synonym_singular_lowercase'] : null;
        $this->container['minimum_allowed_value'] = isset($data['minimum_allowed_value']) ? $data['minimum_allowed_value'] : null;
        $this->container['more_info'] = isset($data['more_info']) ? $data['more_info'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['onset_delay'] = isset($data['onset_delay']) ? $data['onset_delay'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['png_path'] = isset($data['png_path']) ? $data['png_path'] : null;
        $this->container['png_url'] = isset($data['png_url']) ? $data['png_url'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['svg_path'] = isset($data['svg_path']) ? $data['svg_path'] : null;
        $this->container['svg_url'] = isset($data['svg_url']) ? $data['svg_url'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['updated_time'] = isset($data['updated_time']) ? $data['updated_time'] : null;
        $this->container['variable_category_name'] = isset($data['variable_category_name']) ? $data['variable_category_name'] : null;
        $this->container['variable_category_name_singular'] = isset($data['variable_category_name_singular']) ? $data['variable_category_name_singular'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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

        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets app_type
     *
     * @return string
     */
    public function getAppType()
    {
        return $this->container['app_type'];
    }

    /**
     * Sets app_type
     *
     * @param string $app_type Ex: mood
     *
     * @return $this
     */
    public function setAppType($app_type)
    {
        $this->container['app_type'] = $app_type;

        return $this;
    }

    /**
     * Gets cause_only
     *
     * @return bool
     */
    public function getCauseOnly()
    {
        return $this->container['cause_only'];
    }

    /**
     * Sets cause_only
     *
     * @param bool $cause_only Ex: false
     *
     * @return $this
     */
    public function setCauseOnly($cause_only)
    {
        $this->container['cause_only'] = $cause_only;

        return $this;
    }

    /**
     * Gets combination_operation
     *
     * @return string
     */
    public function getCombinationOperation()
    {
        return $this->container['combination_operation'];
    }

    /**
     * Sets combination_operation
     *
     * @param string $combination_operation Ex: MEAN
     *
     * @return $this
     */
    public function setCombinationOperation($combination_operation)
    {
        $this->container['combination_operation'] = $combination_operation;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return string
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param string $created_time UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets unit_abbreviated_name
     *
     * @return string
     */
    public function getUnitAbbreviatedName()
    {
        return $this->container['unit_abbreviated_name'];
    }

    /**
     * Sets unit_abbreviated_name
     *
     * @param string $unit_abbreviated_name Ex: /5
     *
     * @return $this
     */
    public function setUnitAbbreviatedName($unit_abbreviated_name)
    {
        $this->container['unit_abbreviated_name'] = $unit_abbreviated_name;

        return $this;
    }

    /**
     * Gets unit_id
     *
     * @return int
     */
    public function getUnitId()
    {
        return $this->container['unit_id'];
    }

    /**
     * Sets unit_id
     *
     * @param int $unit_id Ex: 10
     *
     * @return $this
     */
    public function setUnitId($unit_id)
    {
        $this->container['unit_id'] = $unit_id;

        return $this;
    }

    /**
     * Gets duration_of_action
     *
     * @return int
     */
    public function getDurationOfAction()
    {
        return $this->container['duration_of_action'];
    }

    /**
     * Sets duration_of_action
     *
     * @param int $duration_of_action Ex: 86400
     *
     * @return $this
     */
    public function setDurationOfAction($duration_of_action)
    {
        $this->container['duration_of_action'] = $duration_of_action;

        return $this;
    }

    /**
     * Gets filling_value
     *
     * @return int
     */
    public function getFillingValue()
    {
        return $this->container['filling_value'];
    }

    /**
     * Sets filling_value
     *
     * @param int $filling_value Ex: -1
     *
     * @return $this
     */
    public function setFillingValue($filling_value)
    {
        $this->container['filling_value'] = $filling_value;

        return $this;
    }

    /**
     * Gets help_text
     *
     * @return string
     */
    public function getHelpText()
    {
        return $this->container['help_text'];
    }

    /**
     * Sets help_text
     *
     * @param string $help_text Ex: What emotion do you want to rate?
     *
     * @return $this
     */
    public function setHelpText($help_text)
    {
        $this->container['help_text'] = $help_text;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Ex: 1
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url Ex: https://maxcdn.icons8.com/Color/PNG/96/Cinema/theatre_mask-96.png
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets ion_icon
     *
     * @return string
     */
    public function getIonIcon()
    {
        return $this->container['ion_icon'];
    }

    /**
     * Sets ion_icon
     *
     * @param string $ion_icon Ex: ion-happy-outline
     *
     * @return $this
     */
    public function setIonIcon($ion_icon)
    {
        $this->container['ion_icon'] = $ion_icon;

        return $this;
    }

    /**
     * Gets manual_tracking
     *
     * @return bool
     */
    public function getManualTracking()
    {
        return $this->container['manual_tracking'];
    }

    /**
     * Sets manual_tracking
     *
     * @param bool $manual_tracking Ex: true
     *
     * @return $this
     */
    public function setManualTracking($manual_tracking)
    {
        $this->container['manual_tracking'] = $manual_tracking;

        return $this;
    }

    /**
     * Gets maximum_allowed_value
     *
     * @return string
     */
    public function getMaximumAllowedValue()
    {
        return $this->container['maximum_allowed_value'];
    }

    /**
     * Sets maximum_allowed_value
     *
     * @param string $maximum_allowed_value Ex:
     *
     * @return $this
     */
    public function setMaximumAllowedValue($maximum_allowed_value)
    {
        $this->container['maximum_allowed_value'] = $maximum_allowed_value;

        return $this;
    }

    /**
     * Gets measurement_synonym_singular_lowercase
     *
     * @return string
     */
    public function getMeasurementSynonymSingularLowercase()
    {
        return $this->container['measurement_synonym_singular_lowercase'];
    }

    /**
     * Sets measurement_synonym_singular_lowercase
     *
     * @param string $measurement_synonym_singular_lowercase Ex: rating
     *
     * @return $this
     */
    public function setMeasurementSynonymSingularLowercase($measurement_synonym_singular_lowercase)
    {
        $this->container['measurement_synonym_singular_lowercase'] = $measurement_synonym_singular_lowercase;

        return $this;
    }

    /**
     * Gets minimum_allowed_value
     *
     * @return string
     */
    public function getMinimumAllowedValue()
    {
        return $this->container['minimum_allowed_value'];
    }

    /**
     * Sets minimum_allowed_value
     *
     * @param string $minimum_allowed_value Ex:
     *
     * @return $this
     */
    public function setMinimumAllowedValue($minimum_allowed_value)
    {
        $this->container['minimum_allowed_value'] = $minimum_allowed_value;

        return $this;
    }

    /**
     * Gets more_info
     *
     * @return string
     */
    public function getMoreInfo()
    {
        return $this->container['more_info'];
    }

    /**
     * Sets more_info
     *
     * @param string $more_info Ex: Do you have any emotions that fluctuate regularly?  If so, add them so I can try to determine which factors are influencing them.
     *
     * @return $this
     */
    public function setMoreInfo($more_info)
    {
        $this->container['more_info'] = $more_info;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Category name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets onset_delay
     *
     * @return int
     */
    public function getOnsetDelay()
    {
        return $this->container['onset_delay'];
    }

    /**
     * Sets onset_delay
     *
     * @param int $onset_delay Ex: 0
     *
     * @return $this
     */
    public function setOnsetDelay($onset_delay)
    {
        $this->container['onset_delay'] = $onset_delay;

        return $this;
    }

    /**
     * Gets outcome
     *
     * @return bool
     */
    public function getOutcome()
    {
        return $this->container['outcome'];
    }

    /**
     * Sets outcome
     *
     * @param bool $outcome Ex: true
     *
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->container['outcome'] = $outcome;

        return $this;
    }

    /**
     * Gets png_path
     *
     * @return string
     */
    public function getPngPath()
    {
        return $this->container['png_path'];
    }

    /**
     * Sets png_path
     *
     * @param string $png_path Ex: img/variable_categories/emotions.png
     *
     * @return $this
     */
    public function setPngPath($png_path)
    {
        $this->container['png_path'] = $png_path;

        return $this;
    }

    /**
     * Gets png_url
     *
     * @return string
     */
    public function getPngUrl()
    {
        return $this->container['png_url'];
    }

    /**
     * Sets png_url
     *
     * @param string $png_url Ex: https://quantimodo.quantimo.do/ionic/Modo/www/img/variable_categories/emotions.png
     *
     * @return $this
     */
    public function setPngUrl($png_url)
    {
        $this->container['png_url'] = $png_url;

        return $this;
    }

    /**
     * Gets public
     *
     * @return bool
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param bool $public Ex: true
     *
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets svg_path
     *
     * @return string
     */
    public function getSvgPath()
    {
        return $this->container['svg_path'];
    }

    /**
     * Sets svg_path
     *
     * @param string $svg_path Ex: img/variable_categories/emotions.svg
     *
     * @return $this
     */
    public function setSvgPath($svg_path)
    {
        $this->container['svg_path'] = $svg_path;

        return $this;
    }

    /**
     * Gets svg_url
     *
     * @return string
     */
    public function getSvgUrl()
    {
        return $this->container['svg_url'];
    }

    /**
     * Sets svg_url
     *
     * @param string $svg_url Ex: https://quantimodo.quantimo.do/ionic/Modo/www/img/variable_categories/emotions.svg
     *
     * @return $this
     */
    public function setSvgUrl($svg_url)
    {
        $this->container['svg_url'] = $svg_url;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return int
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param int $updated Ex: 1
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets updated_time
     *
     * @return string
     */
    public function getUpdatedTime()
    {
        return $this->container['updated_time'];
    }

    /**
     * Sets updated_time
     *
     * @param string $updated_time UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setUpdatedTime($updated_time)
    {
        $this->container['updated_time'] = $updated_time;

        return $this;
    }

    /**
     * Gets variable_category_name
     *
     * @return string
     */
    public function getVariableCategoryName()
    {
        return $this->container['variable_category_name'];
    }

    /**
     * Sets variable_category_name
     *
     * @param string $variable_category_name Ex: Emotions
     *
     * @return $this
     */
    public function setVariableCategoryName($variable_category_name)
    {
        $this->container['variable_category_name'] = $variable_category_name;

        return $this;
    }

    /**
     * Gets variable_category_name_singular
     *
     * @return string
     */
    public function getVariableCategoryNameSingular()
    {
        return $this->container['variable_category_name_singular'];
    }

    /**
     * Sets variable_category_name_singular
     *
     * @param string $variable_category_name_singular Ex: Emotion
     *
     * @return $this
     */
    public function setVariableCategoryNameSingular($variable_category_name_singular)
    {
        $this->container['variable_category_name_singular'] = $variable_category_name_singular;

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


