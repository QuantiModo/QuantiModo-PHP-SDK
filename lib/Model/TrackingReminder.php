<?php
/**
 * TrackingReminder
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
 * TrackingReminder Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TrackingReminder implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'client_id' => 'string',
        'user_id' => 'int',
        'variable_id' => 'int',
        'default_value' => 'float',
        'reminder_start_time' => 'string',
        'reminder_end_time' => 'string',
        'reminder_sound' => 'string',
        'reminder_frequency' => 'int',
        'pop_up' => 'bool',
        'sms' => 'bool',
        'email' => 'bool',
        'notification_bar' => 'bool',
        'last_reminded' => '\DateTime',
        'last_tracked' => '\DateTime',
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
        'variable_id' => 'variable_id',
        'default_value' => 'default_value',
        'reminder_start_time' => 'reminder_start_time',
        'reminder_end_time' => 'reminder_end_time',
        'reminder_sound' => 'reminder_sound',
        'reminder_frequency' => 'reminder_frequency',
        'pop_up' => 'pop_up',
        'sms' => 'sms',
        'email' => 'email',
        'notification_bar' => 'notification_bar',
        'last_reminded' => 'last_reminded',
        'last_tracked' => 'last_tracked',
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
        'variable_id' => 'setVariableId',
        'default_value' => 'setDefaultValue',
        'reminder_start_time' => 'setReminderStartTime',
        'reminder_end_time' => 'setReminderEndTime',
        'reminder_sound' => 'setReminderSound',
        'reminder_frequency' => 'setReminderFrequency',
        'pop_up' => 'setPopUp',
        'sms' => 'setSms',
        'email' => 'setEmail',
        'notification_bar' => 'setNotificationBar',
        'last_reminded' => 'setLastReminded',
        'last_tracked' => 'setLastTracked',
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
        'variable_id' => 'getVariableId',
        'default_value' => 'getDefaultValue',
        'reminder_start_time' => 'getReminderStartTime',
        'reminder_end_time' => 'getReminderEndTime',
        'reminder_sound' => 'getReminderSound',
        'reminder_frequency' => 'getReminderFrequency',
        'pop_up' => 'getPopUp',
        'sms' => 'getSms',
        'email' => 'getEmail',
        'notification_bar' => 'getNotificationBar',
        'last_reminded' => 'getLastReminded',
        'last_tracked' => 'getLastTracked',
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
      * $variable_id Id for the variable to be tracked
      * @var int
      */
    protected $variable_id;
    
    /**
      * $default_value Default value to use for the measurement when tracking
      * @var float
      */
    protected $default_value;
    
    /**
      * $reminder_start_time Earliest time of day at which reminders should appear
      * @var string
      */
    protected $reminder_start_time;
    
    /**
      * $reminder_end_time Latest time of day at which reminders should appear
      * @var string
      */
    protected $reminder_end_time;
    
    /**
      * $reminder_sound String identifier for the sound to accompany the reminder
      * @var string
      */
    protected $reminder_sound;
    
    /**
      * $reminder_frequency Number of seconds between one reminder and the next
      * @var int
      */
    protected $reminder_frequency;
    
    /**
      * $pop_up True if the reminders should appear as a popup notification
      * @var bool
      */
    protected $pop_up;
    
    /**
      * $sms True if the reminders should be delivered via SMS
      * @var bool
      */
    protected $sms;
    
    /**
      * $email True if the reminders should be delivered via email
      * @var bool
      */
    protected $email;
    
    /**
      * $notification_bar True if the reminders should appear in the notification bar
      * @var bool
      */
    protected $notification_bar;
    
    /**
      * $last_reminded ISO 8601 timestamp for the last time a reminder was sent
      * @var \DateTime
      */
    protected $last_reminded;
    
    /**
      * $last_tracked ISO 8601 timestamp for the last time a measurement was received for this user and variable
      * @var \DateTime
      */
    protected $last_tracked;
    
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
            $this->variable_id = $data["variable_id"];
            $this->default_value = $data["default_value"];
            $this->reminder_start_time = $data["reminder_start_time"];
            $this->reminder_end_time = $data["reminder_end_time"];
            $this->reminder_sound = $data["reminder_sound"];
            $this->reminder_frequency = $data["reminder_frequency"];
            $this->pop_up = $data["pop_up"];
            $this->sms = $data["sms"];
            $this->email = $data["email"];
            $this->notification_bar = $data["notification_bar"];
            $this->last_reminded = $data["last_reminded"];
            $this->last_tracked = $data["last_tracked"];
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
     * Gets variable_id
     * @return int
     */
    public function getVariableId()
    {
        return $this->variable_id;
    }
  
    /**
     * Sets variable_id
     * @param int $variable_id Id for the variable to be tracked
     * @return $this
     */
    public function setVariableId($variable_id)
    {
        
        $this->variable_id = $variable_id;
        return $this;
    }
    
    /**
     * Gets default_value
     * @return float
     */
    public function getDefaultValue()
    {
        return $this->default_value;
    }
  
    /**
     * Sets default_value
     * @param float $default_value Default value to use for the measurement when tracking
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        
        $this->default_value = $default_value;
        return $this;
    }
    
    /**
     * Gets reminder_start_time
     * @return string
     */
    public function getReminderStartTime()
    {
        return $this->reminder_start_time;
    }
  
    /**
     * Sets reminder_start_time
     * @param string $reminder_start_time Earliest time of day at which reminders should appear
     * @return $this
     */
    public function setReminderStartTime($reminder_start_time)
    {
        
        $this->reminder_start_time = $reminder_start_time;
        return $this;
    }
    
    /**
     * Gets reminder_end_time
     * @return string
     */
    public function getReminderEndTime()
    {
        return $this->reminder_end_time;
    }
  
    /**
     * Sets reminder_end_time
     * @param string $reminder_end_time Latest time of day at which reminders should appear
     * @return $this
     */
    public function setReminderEndTime($reminder_end_time)
    {
        
        $this->reminder_end_time = $reminder_end_time;
        return $this;
    }
    
    /**
     * Gets reminder_sound
     * @return string
     */
    public function getReminderSound()
    {
        return $this->reminder_sound;
    }
  
    /**
     * Sets reminder_sound
     * @param string $reminder_sound String identifier for the sound to accompany the reminder
     * @return $this
     */
    public function setReminderSound($reminder_sound)
    {
        
        $this->reminder_sound = $reminder_sound;
        return $this;
    }
    
    /**
     * Gets reminder_frequency
     * @return int
     */
    public function getReminderFrequency()
    {
        return $this->reminder_frequency;
    }
  
    /**
     * Sets reminder_frequency
     * @param int $reminder_frequency Number of seconds between one reminder and the next
     * @return $this
     */
    public function setReminderFrequency($reminder_frequency)
    {
        
        $this->reminder_frequency = $reminder_frequency;
        return $this;
    }
    
    /**
     * Gets pop_up
     * @return bool
     */
    public function getPopUp()
    {
        return $this->pop_up;
    }
  
    /**
     * Sets pop_up
     * @param bool $pop_up True if the reminders should appear as a popup notification
     * @return $this
     */
    public function setPopUp($pop_up)
    {
        
        $this->pop_up = $pop_up;
        return $this;
    }
    
    /**
     * Gets sms
     * @return bool
     */
    public function getSms()
    {
        return $this->sms;
    }
  
    /**
     * Sets sms
     * @param bool $sms True if the reminders should be delivered via SMS
     * @return $this
     */
    public function setSms($sms)
    {
        
        $this->sms = $sms;
        return $this;
    }
    
    /**
     * Gets email
     * @return bool
     */
    public function getEmail()
    {
        return $this->email;
    }
  
    /**
     * Sets email
     * @param bool $email True if the reminders should be delivered via email
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
        return $this;
    }
    
    /**
     * Gets notification_bar
     * @return bool
     */
    public function getNotificationBar()
    {
        return $this->notification_bar;
    }
  
    /**
     * Sets notification_bar
     * @param bool $notification_bar True if the reminders should appear in the notification bar
     * @return $this
     */
    public function setNotificationBar($notification_bar)
    {
        
        $this->notification_bar = $notification_bar;
        return $this;
    }
    
    /**
     * Gets last_reminded
     * @return \DateTime
     */
    public function getLastReminded()
    {
        return $this->last_reminded;
    }
  
    /**
     * Sets last_reminded
     * @param \DateTime $last_reminded ISO 8601 timestamp for the last time a reminder was sent
     * @return $this
     */
    public function setLastReminded($last_reminded)
    {
        
        $this->last_reminded = $last_reminded;
        return $this;
    }
    
    /**
     * Gets last_tracked
     * @return \DateTime
     */
    public function getLastTracked()
    {
        return $this->last_tracked;
    }
  
    /**
     * Sets last_tracked
     * @param \DateTime $last_tracked ISO 8601 timestamp for the last time a measurement was received for this user and variable
     * @return $this
     */
    public function setLastTracked($last_tracked)
    {
        
        $this->last_tracked = $last_tracked;
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
