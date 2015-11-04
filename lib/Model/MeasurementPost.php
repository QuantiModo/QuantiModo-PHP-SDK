<?php
/**
 * MeasurementPost
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * MeasurementPost Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MeasurementPost implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'variable_id' => 'int',
        'source_id' => 'int',
        'unit_id' => 'int',
        'measurements' => '\Swagger\Client\Model\MeasurementValue[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'variable_id' => 'variable_id',
        'source_id' => 'source_id',
        'unit_id' => 'unit_id',
        'measurements' => 'measurements'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'variable_id' => 'setVariableId',
        'source_id' => 'setSourceId',
        'unit_id' => 'setUnitId',
        'measurements' => 'setMeasurements'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'variable_id' => 'getVariableId',
        'source_id' => 'getSourceId',
        'unit_id' => 'getUnitId',
        'measurements' => 'getMeasurements'
    );
  
    
    /**
      * $variable_id variable_id
      * @var int
      */
    protected $variable_id;
    
    /**
      * $source_id source_id
      * @var int
      */
    protected $source_id;
    
    /**
      * $unit_id unit_id
      * @var int
      */
    protected $unit_id;
    
    /**
      * $measurements measurements
      * @var \Swagger\Client\Model\MeasurementValue[]
      */
    protected $measurements;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->variable_id = $data["variable_id"];
            $this->source_id = $data["source_id"];
            $this->unit_id = $data["unit_id"];
            $this->measurements = $data["measurements"];
        }
    }
    
    /**
     * Gets variable_id
     * @return int
     */
    public function getVariableId()
    {
        return $this->variable_id;
    }
  
    /**
     * Sets variable_id
     * @param int $variable_id variable_id
     * @return $this
     */
    public function setVariableId($variable_id)
    {
        
        $this->variable_id = $variable_id;
        return $this;
    }
    
    /**
     * Gets source_id
     * @return int
     */
    public function getSourceId()
    {
        return $this->source_id;
    }
  
    /**
     * Sets source_id
     * @param int $source_id source_id
     * @return $this
     */
    public function setSourceId($source_id)
    {
        
        $this->source_id = $source_id;
        return $this;
    }
    
    /**
     * Gets unit_id
     * @return int
     */
    public function getUnitId()
    {
        return $this->unit_id;
    }
  
    /**
     * Sets unit_id
     * @param int $unit_id unit_id
     * @return $this
     */
    public function setUnitId($unit_id)
    {
        
        $this->unit_id = $unit_id;
        return $this;
    }
    
    /**
     * Gets measurements
     * @return \Swagger\Client\Model\MeasurementValue[]
     */
    public function getMeasurements()
    {
        return $this->measurements;
    }
  
    /**
     * Sets measurements
     * @param \Swagger\Client\Model\MeasurementValue[] $measurements measurements
     * @return $this
     */
    public function setMeasurements($measurements)
    {
        
        $this->measurements = $measurements;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
