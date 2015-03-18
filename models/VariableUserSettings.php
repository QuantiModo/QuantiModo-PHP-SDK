<?php
/**
 *  Copyright 2015 Reverb Technologies, Inc.
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
 * $model.description$
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

class VariableUserSettings {
  static $swaggerTypes = array(
      'user' => 'int',
      'variable' => 'string',
      'durationOfAction' => 'int',
      'fillingValue' => 'int',
      'joinWith' => 'string',
      'maximumValue' => 'float',
      'minimumValue' => 'float',
      'name' => 'string',
      'onsetDelay' => 'int',
      'unit' => 'string'
    );

  
  /**
  * User ID
  */
  public $user; /* int */
  /**
  * Variable DISPLAY name
  */
  public $variable; /* string */
  /**
  * Estimated duration of time following the onset delay in which a stimulus produces a perceivable effect
  */
  public $durationOfAction; /* int */
  /**
  * fillingValue
  */
  public $fillingValue; /* int */
  /**
  * joinWith
  */
  public $joinWith; /* string */
  /**
  * maximumValue
  */
  public $maximumValue; /* float */
  /**
  * minimumValue
  */
  public $minimumValue; /* float */
  /**
  * name
  */
  public $name; /* string */
  /**
  * onsetDelay
  */
  public $onsetDelay; /* int */
  /**
  * unit
  */
  public $unit; /* string */
}
