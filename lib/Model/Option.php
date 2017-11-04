<?php
/**
 * Option
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
 * Option Class Doc Comment
 *
 * @category    Class
 * @package     QuantiModo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Option implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Option';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chart' => '\QuantiModo\Client\Model\Chart',
        'colors' => 'string[]',
        'credits' => '\QuantiModo\Client\Model\Credit',
        'lang' => '\QuantiModo\Client\Model\Lang',
        'legend' => '\QuantiModo\Client\Model\Legend',
        'loading' => '\QuantiModo\Client\Model\Loading',
        'plot_options' => '\QuantiModo\Client\Model\PlotOption',
        'title' => '\QuantiModo\Client\Model\Title',
        'x_axis' => '\QuantiModo\Client\Model\XAxi',
        'y_axis' => '\QuantiModo\Client\Model\YAxi[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chart' => null,
        'colors' => null,
        'credits' => null,
        'lang' => null,
        'legend' => null,
        'loading' => null,
        'plot_options' => null,
        'title' => null,
        'x_axis' => null,
        'y_axis' => null
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
        'chart' => 'chart',
        'colors' => 'colors',
        'credits' => 'credits',
        'lang' => 'lang',
        'legend' => 'legend',
        'loading' => 'loading',
        'plot_options' => 'plotOptions',
        'title' => 'title',
        'x_axis' => 'xAxis',
        'y_axis' => 'yAxis'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'chart' => 'setChart',
        'colors' => 'setColors',
        'credits' => 'setCredits',
        'lang' => 'setLang',
        'legend' => 'setLegend',
        'loading' => 'setLoading',
        'plot_options' => 'setPlotOptions',
        'title' => 'setTitle',
        'x_axis' => 'setXAxis',
        'y_axis' => 'setYAxis'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'chart' => 'getChart',
        'colors' => 'getColors',
        'credits' => 'getCredits',
        'lang' => 'getLang',
        'legend' => 'getLegend',
        'loading' => 'getLoading',
        'plot_options' => 'getPlotOptions',
        'title' => 'getTitle',
        'x_axis' => 'getXAxis',
        'y_axis' => 'getYAxis'
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
        $this->container['chart'] = isset($data['chart']) ? $data['chart'] : null;
        $this->container['colors'] = isset($data['colors']) ? $data['colors'] : null;
        $this->container['credits'] = isset($data['credits']) ? $data['credits'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['legend'] = isset($data['legend']) ? $data['legend'] : null;
        $this->container['loading'] = isset($data['loading']) ? $data['loading'] : null;
        $this->container['plot_options'] = isset($data['plot_options']) ? $data['plot_options'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['x_axis'] = isset($data['x_axis']) ? $data['x_axis'] : null;
        $this->container['y_axis'] = isset($data['y_axis']) ? $data['y_axis'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['chart'] === null) {
            $invalid_properties[] = "'chart' can't be null";
        }
        if ($this->container['colors'] === null) {
            $invalid_properties[] = "'colors' can't be null";
        }
        if ($this->container['credits'] === null) {
            $invalid_properties[] = "'credits' can't be null";
        }
        if ($this->container['lang'] === null) {
            $invalid_properties[] = "'lang' can't be null";
        }
        if ($this->container['legend'] === null) {
            $invalid_properties[] = "'legend' can't be null";
        }
        if ($this->container['loading'] === null) {
            $invalid_properties[] = "'loading' can't be null";
        }
        if ($this->container['plot_options'] === null) {
            $invalid_properties[] = "'plot_options' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['x_axis'] === null) {
            $invalid_properties[] = "'x_axis' can't be null";
        }
        if ($this->container['y_axis'] === null) {
            $invalid_properties[] = "'y_axis' can't be null";
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

        if ($this->container['chart'] === null) {
            return false;
        }
        if ($this->container['colors'] === null) {
            return false;
        }
        if ($this->container['credits'] === null) {
            return false;
        }
        if ($this->container['lang'] === null) {
            return false;
        }
        if ($this->container['legend'] === null) {
            return false;
        }
        if ($this->container['loading'] === null) {
            return false;
        }
        if ($this->container['plot_options'] === null) {
            return false;
        }
        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['x_axis'] === null) {
            return false;
        }
        if ($this->container['y_axis'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets chart
     * @return \QuantiModo\Client\Model\Chart
     */
    public function getChart()
    {
        return $this->container['chart'];
    }

    /**
     * Sets chart
     * @param \QuantiModo\Client\Model\Chart $chart
     * @return $this
     */
    public function setChart($chart)
    {
        $this->container['chart'] = $chart;

        return $this;
    }

    /**
     * Gets colors
     * @return string[]
     */
    public function getColors()
    {
        return $this->container['colors'];
    }

    /**
     * Sets colors
     * @param string[] $colors
     * @return $this
     */
    public function setColors($colors)
    {
        $this->container['colors'] = $colors;

        return $this;
    }

    /**
     * Gets credits
     * @return \QuantiModo\Client\Model\Credit
     */
    public function getCredits()
    {
        return $this->container['credits'];
    }

    /**
     * Sets credits
     * @param \QuantiModo\Client\Model\Credit $credits
     * @return $this
     */
    public function setCredits($credits)
    {
        $this->container['credits'] = $credits;

        return $this;
    }

    /**
     * Gets lang
     * @return \QuantiModo\Client\Model\Lang
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     * @param \QuantiModo\Client\Model\Lang $lang
     * @return $this
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

        return $this;
    }

    /**
     * Gets legend
     * @return \QuantiModo\Client\Model\Legend
     */
    public function getLegend()
    {
        return $this->container['legend'];
    }

    /**
     * Sets legend
     * @param \QuantiModo\Client\Model\Legend $legend
     * @return $this
     */
    public function setLegend($legend)
    {
        $this->container['legend'] = $legend;

        return $this;
    }

    /**
     * Gets loading
     * @return \QuantiModo\Client\Model\Loading
     */
    public function getLoading()
    {
        return $this->container['loading'];
    }

    /**
     * Sets loading
     * @param \QuantiModo\Client\Model\Loading $loading
     * @return $this
     */
    public function setLoading($loading)
    {
        $this->container['loading'] = $loading;

        return $this;
    }

    /**
     * Gets plot_options
     * @return \QuantiModo\Client\Model\PlotOption
     */
    public function getPlotOptions()
    {
        return $this->container['plot_options'];
    }

    /**
     * Sets plot_options
     * @param \QuantiModo\Client\Model\PlotOption $plot_options
     * @return $this
     */
    public function setPlotOptions($plot_options)
    {
        $this->container['plot_options'] = $plot_options;

        return $this;
    }

    /**
     * Gets title
     * @return \QuantiModo\Client\Model\Title
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param \QuantiModo\Client\Model\Title $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets x_axis
     * @return \QuantiModo\Client\Model\XAxi
     */
    public function getXAxis()
    {
        return $this->container['x_axis'];
    }

    /**
     * Sets x_axis
     * @param \QuantiModo\Client\Model\XAxi $x_axis
     * @return $this
     */
    public function setXAxis($x_axis)
    {
        $this->container['x_axis'] = $x_axis;

        return $this;
    }

    /**
     * Gets y_axis
     * @return \QuantiModo\Client\Model\YAxi[]
     */
    public function getYAxis()
    {
        return $this->container['y_axis'];
    }

    /**
     * Sets y_axis
     * @param \QuantiModo\Client\Model\YAxi[] $y_axis
     * @return $this
     */
    public function setYAxis($y_axis)
    {
        $this->container['y_axis'] = $y_axis;

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

