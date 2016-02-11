<?php
/**
 * Vote
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
 *  Copyright 2016 SmartBear Software
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
 * Vote Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Vote implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'client_id' => 'string',
        'user_id' => 'int',
        'cause_id' => 'int',
        'effect_id' => 'int',
        'value' => 'int',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'client_id' => 'client_id',
        'user_id' => 'user_id',
        'cause_id' => 'cause_id',
        'effect_id' => 'effect_id',
        'value' => 'value',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'client_id' => 'setClientId',
        'user_id' => 'setUserId',
        'cause_id' => 'setCauseId',
        'effect_id' => 'setEffectId',
        'value' => 'setValue',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'client_id' => 'getClientId',
        'user_id' => 'getUserId',
        'cause_id' => 'getCauseId',
        'effect_id' => 'getEffectId',
        'value' => 'getValue',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
    );
  
    
    /**
      * $id id
      * @var int
      */
    protected $id;
    
    /**
      * $client_id client_id
      * @var string
      */
    protected $client_id;
    
    /**
      * $user_id ID of User
      * @var int
      */
    protected $user_id;
    
    /**
      * $cause_id ID of the predictor variable
      * @var int
      */
    protected $cause_id;
    
    /**
      * $effect_id ID of effect variable
      * @var int
      */
    protected $effect_id;
    
    /**
      * $value Value of Vote
      * @var int
      */
    protected $value;
    
    /**
      * $created_at When the record was first created. Use ISO 8601 datetime format
      * @var \DateTime
      */
    protected $created_at;
    
    /**
      * $updated_at When the record in the database was last updated. Use ISO 8601 datetime format
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
            $this->id = $data["id"];
            $this->client_id = $data["client_id"];
            $this->user_id = $data["user_id"];
            $this->cause_id = $data["cause_id"];
            $this->effect_id = $data["effect_id"];
            $this->value = $data["value"];
            $this->created_at = $data["created_at"];
            $this->updated_at = $data["updated_at"];
        }
    }
    
    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param int $id id
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }
  
    /**
     * Sets client_id
     * @param string $client_id client_id
     * @return $this
     */
    public function setClientId($client_id)
    {
        
        $this->client_id = $client_id;
        return $this;
    }
    
    /**
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }
  
    /**
     * Sets user_id
     * @param int $user_id ID of User
     * @return $this
     */
    public function setUserId($user_id)
    {
        
        $this->user_id = $user_id;
        return $this;
    }
    
    /**
     * Gets cause_id
     * @return int
     */
    public function getCauseId()
    {
        return $this->cause_id;
    }
  
    /**
     * Sets cause_id
     * @param int $cause_id ID of the predictor variable
     * @return $this
     */
    public function setCauseId($cause_id)
    {
        
        $this->cause_id = $cause_id;
        return $this;
    }
    
    /**
     * Gets effect_id
     * @return int
     */
    public function getEffectId()
    {
        return $this->effect_id;
    }
  
    /**
     * Sets effect_id
     * @param int $effect_id ID of effect variable
     * @return $this
     */
    public function setEffectId($effect_id)
    {
        
        $this->effect_id = $effect_id;
        return $this;
    }
    
    /**
     * Gets value
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }
  
    /**
     * Sets value
     * @param int $value Value of Vote
     * @return $this
     */
    public function setValue($value)
    {
        
        $this->value = $value;
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
     * @param \DateTime $created_at When the record was first created. Use ISO 8601 datetime format
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
     * @param \DateTime $updated_at When the record in the database was last updated. Use ISO 8601 datetime format
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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
