<?php
/**
 * Credential
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
 * Credential Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Credential implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'connector_id' => 'int',
        'attr_key' => 'string',
        'attr_value' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'connector_id' => 'connector_id',
        'attr_key' => 'attr_key',
        'attr_value' => 'attr_value',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'connector_id' => 'setConnectorId',
        'attr_key' => 'setAttrKey',
        'attr_value' => 'setAttrValue',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'connector_id' => 'getConnectorId',
        'attr_key' => 'getAttrKey',
        'attr_value' => 'getAttrValue',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
    );
  
    
    /**
      * $connector_id connector_id
      * @var int
      */
    protected $connector_id;
    
    /**
      * $attr_key attr_key
      * @var string
      */
    protected $attr_key;
    
    /**
      * $attr_value attr_value
      * @var string
      */
    protected $attr_value;
    
    /**
      * $created_at created_at
      * @var \DateTime
      */
    protected $created_at;
    
    /**
      * $updated_at updated_at
      * @var \DateTime
      */
    protected $updated_at;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->connector_id = $data["connector_id"];
            $this->attr_key = $data["attr_key"];
            $this->attr_value = $data["attr_value"];
            $this->created_at = $data["created_at"];
            $this->updated_at = $data["updated_at"];
        }
    }
    
    /**
     * Gets connector_id
     * @return int
     */
    public function getConnectorId()
    {
        return $this->connector_id;
    }
  
    /**
     * Sets connector_id
     * @param int $connector_id connector_id
     * @return $this
     */
    public function setConnectorId($connector_id)
    {
        
        $this->connector_id = $connector_id;
        return $this;
    }
    
    /**
     * Gets attr_key
     * @return string
     */
    public function getAttrKey()
    {
        return $this->attr_key;
    }
  
    /**
     * Sets attr_key
     * @param string $attr_key attr_key
     * @return $this
     */
    public function setAttrKey($attr_key)
    {
        
        $this->attr_key = $attr_key;
        return $this;
    }
    
    /**
     * Gets attr_value
     * @return string
     */
    public function getAttrValue()
    {
        return $this->attr_value;
    }
  
    /**
     * Sets attr_value
     * @param string $attr_value attr_value
     * @return $this
     */
    public function setAttrValue($attr_value)
    {
        
        $this->attr_value = $attr_value;
        return $this;
    }
    
    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
  
    /**
     * Sets created_at
     * @param \DateTime $created_at created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        
        $this->created_at = $created_at;
        return $this;
    }
    
    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
  
    /**
     * Sets updated_at
     * @param \DateTime $updated_at updated_at
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        
        $this->updated_at = $updated_at;
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
