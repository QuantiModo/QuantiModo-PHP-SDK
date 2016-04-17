<?php
/**
 * VariableApi
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

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * VariableApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VariableApi
{

    /**
     * API Client
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://app.quantimo.do/api/v2');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return VariableApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * variablesGet
     *
     * Get all Variables
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $id id (optional)
     * @param string $client_id The ID of the client application which last created or updated this common variable (optional)
     * @param int $parent_id ID of the parent variable if this variable has any parent (optional)
     * @param string $name User-defined variable display name (optional)
     * @param int $variable_category_id Variable category ID (optional)
     * @param int $default_unit_id ID of the default unit for the variable (optional)
     * @param string $combination_operation How to combine values of this variable (for instance, to see a summary of the values over a month) SUM or MEAN (optional)
     * @param Number $filling_value Value for replacing null measurements (optional)
     * @param Number $maximum_allowed_value Maximum reasonable value for this variable (uses default unit) (optional)
     * @param Number $minimum_allowed_value Minimum reasonable value for this variable (uses default unit) (optional)
     * @param int $onset_delay Estimated number of seconds that pass before a stimulus produces a perceivable effect (optional)
     * @param int $duration_of_action Estimated number of seconds following the onset delay in which a stimulus produces a perceivable effect (optional)
     * @param int $public Is variable public (optional)
     * @param bool $cause_only A value of 1 indicates that this variable is generally a cause in a causal relationship.  An example of a causeOnly variable would be a variable such as Cloud Cover which would generally not be influenced by the behaviour of the user (optional)
     * @param Number $most_common_value Most common value (optional)
     * @param int $most_common_unit_id Most common Unit (optional)
     * @param Number $standard_deviation Standard Deviation (optional)
     * @param Number $variance Average variance for this variable based on all user data (optional)
     * @param Number $mean Mean for this variable based on all user data (optional)
     * @param Number $median Median for this variable based on all user data (optional)
     * @param Number $number_of_measurements Number of measurements for this variable based on all user data (optional)
     * @param Number $number_of_unique_values Number of unique values for this variable based on all user data (optional)
     * @param Number $skewness Skewness for this variable based on all user data (optional)
     * @param Number $kurtosis Kurtosis for this variable based on all user data (optional)
     * @param string $status status (optional)
     * @param string $error_message error_message (optional)
     * @param string $last_successful_update_time When this variable or its settings were last updated (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param string $product_url Product URL (optional)
     * @param string $image_url Image URL (optional)
     * @param Number $price Price (optional)
     * @param int $number_of_user_variables Number of users who have data for this variable (optional)
     * @param bool $outcome Outcome variables (those with `outcome` == 1) are variables for which a human would generally want to identify the influencing factors.  These include symptoms of illness, physique, mood, cognitive performance, etc.  Generally correlation calculations are only performed on outcome variables. (optional)
     * @param Number $minimum_recorded_value Minimum recorded value of this variable based on all user data (optional)
     * @param Number $maximum_recorded_value Maximum recorded value of this variable based on all user data (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort records by a given field name. If the field name is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @return \Swagger\Client\Model\InlineResponse20034
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variablesGet($access_token = null, $id = null, $client_id = null, $parent_id = null, $name = null, $variable_category_id = null, $default_unit_id = null, $combination_operation = null, $filling_value = null, $maximum_allowed_value = null, $minimum_allowed_value = null, $onset_delay = null, $duration_of_action = null, $public = null, $cause_only = null, $most_common_value = null, $most_common_unit_id = null, $standard_deviation = null, $variance = null, $mean = null, $median = null, $number_of_measurements = null, $number_of_unique_values = null, $skewness = null, $kurtosis = null, $status = null, $error_message = null, $last_successful_update_time = null, $created_at = null, $updated_at = null, $product_url = null, $image_url = null, $price = null, $number_of_user_variables = null, $outcome = null, $minimum_recorded_value = null, $maximum_recorded_value = null, $limit = null, $offset = null, $sort = null)
    {
        list($response, $statusCode, $httpHeader) = $this->variablesGetWithHttpInfo ($access_token, $id, $client_id, $parent_id, $name, $variable_category_id, $default_unit_id, $combination_operation, $filling_value, $maximum_allowed_value, $minimum_allowed_value, $onset_delay, $duration_of_action, $public, $cause_only, $most_common_value, $most_common_unit_id, $standard_deviation, $variance, $mean, $median, $number_of_measurements, $number_of_unique_values, $skewness, $kurtosis, $status, $error_message, $last_successful_update_time, $created_at, $updated_at, $product_url, $image_url, $price, $number_of_user_variables, $outcome, $minimum_recorded_value, $maximum_recorded_value, $limit, $offset, $sort);
        return $response; 
    }


    /**
     * variablesGetWithHttpInfo
     *
     * Get all Variables
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $id id (optional)
     * @param string $client_id The ID of the client application which last created or updated this common variable (optional)
     * @param int $parent_id ID of the parent variable if this variable has any parent (optional)
     * @param string $name User-defined variable display name (optional)
     * @param int $variable_category_id Variable category ID (optional)
     * @param int $default_unit_id ID of the default unit for the variable (optional)
     * @param string $combination_operation How to combine values of this variable (for instance, to see a summary of the values over a month) SUM or MEAN (optional)
     * @param Number $filling_value Value for replacing null measurements (optional)
     * @param Number $maximum_allowed_value Maximum reasonable value for this variable (uses default unit) (optional)
     * @param Number $minimum_allowed_value Minimum reasonable value for this variable (uses default unit) (optional)
     * @param int $onset_delay Estimated number of seconds that pass before a stimulus produces a perceivable effect (optional)
     * @param int $duration_of_action Estimated number of seconds following the onset delay in which a stimulus produces a perceivable effect (optional)
     * @param int $public Is variable public (optional)
     * @param bool $cause_only A value of 1 indicates that this variable is generally a cause in a causal relationship.  An example of a causeOnly variable would be a variable such as Cloud Cover which would generally not be influenced by the behaviour of the user (optional)
     * @param Number $most_common_value Most common value (optional)
     * @param int $most_common_unit_id Most common Unit (optional)
     * @param Number $standard_deviation Standard Deviation (optional)
     * @param Number $variance Average variance for this variable based on all user data (optional)
     * @param Number $mean Mean for this variable based on all user data (optional)
     * @param Number $median Median for this variable based on all user data (optional)
     * @param Number $number_of_measurements Number of measurements for this variable based on all user data (optional)
     * @param Number $number_of_unique_values Number of unique values for this variable based on all user data (optional)
     * @param Number $skewness Skewness for this variable based on all user data (optional)
     * @param Number $kurtosis Kurtosis for this variable based on all user data (optional)
     * @param string $status status (optional)
     * @param string $error_message error_message (optional)
     * @param string $last_successful_update_time When this variable or its settings were last updated (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param string $product_url Product URL (optional)
     * @param string $image_url Image URL (optional)
     * @param Number $price Price (optional)
     * @param int $number_of_user_variables Number of users who have data for this variable (optional)
     * @param bool $outcome Outcome variables (those with `outcome` == 1) are variables for which a human would generally want to identify the influencing factors.  These include symptoms of illness, physique, mood, cognitive performance, etc.  Generally correlation calculations are only performed on outcome variables. (optional)
     * @param Number $minimum_recorded_value Minimum recorded value of this variable based on all user data (optional)
     * @param Number $maximum_recorded_value Maximum recorded value of this variable based on all user data (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort records by a given field name. If the field name is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20034, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variablesGetWithHttpInfo($access_token = null, $id = null, $client_id = null, $parent_id = null, $name = null, $variable_category_id = null, $default_unit_id = null, $combination_operation = null, $filling_value = null, $maximum_allowed_value = null, $minimum_allowed_value = null, $onset_delay = null, $duration_of_action = null, $public = null, $cause_only = null, $most_common_value = null, $most_common_unit_id = null, $standard_deviation = null, $variance = null, $mean = null, $median = null, $number_of_measurements = null, $number_of_unique_values = null, $skewness = null, $kurtosis = null, $status = null, $error_message = null, $last_successful_update_time = null, $created_at = null, $updated_at = null, $product_url = null, $image_url = null, $price = null, $number_of_user_variables = null, $outcome = null, $minimum_recorded_value = null, $maximum_recorded_value = null, $limit = null, $offset = null, $sort = null)
    {
        
  
        // parse inputs
        $resourcePath = "/variables";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }// query params
        
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }// query params
        
        if ($client_id !== null) {
            $queryParams['client_id'] = $this->apiClient->getSerializer()->toQueryValue($client_id);
        }// query params
        
        if ($parent_id !== null) {
            $queryParams['parent_id'] = $this->apiClient->getSerializer()->toQueryValue($parent_id);
        }// query params
        
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }// query params
        
        if ($variable_category_id !== null) {
            $queryParams['variable_category_id'] = $this->apiClient->getSerializer()->toQueryValue($variable_category_id);
        }// query params
        
        if ($default_unit_id !== null) {
            $queryParams['default_unit_id'] = $this->apiClient->getSerializer()->toQueryValue($default_unit_id);
        }// query params
        
        if ($combination_operation !== null) {
            $queryParams['combination_operation'] = $this->apiClient->getSerializer()->toQueryValue($combination_operation);
        }// query params
        
        if ($filling_value !== null) {
            $queryParams['filling_value'] = $this->apiClient->getSerializer()->toQueryValue($filling_value);
        }// query params
        
        if ($maximum_allowed_value !== null) {
            $queryParams['maximum_allowed_value'] = $this->apiClient->getSerializer()->toQueryValue($maximum_allowed_value);
        }// query params
        
        if ($minimum_allowed_value !== null) {
            $queryParams['minimum_allowed_value'] = $this->apiClient->getSerializer()->toQueryValue($minimum_allowed_value);
        }// query params
        
        if ($onset_delay !== null) {
            $queryParams['onset_delay'] = $this->apiClient->getSerializer()->toQueryValue($onset_delay);
        }// query params
        
        if ($duration_of_action !== null) {
            $queryParams['duration_of_action'] = $this->apiClient->getSerializer()->toQueryValue($duration_of_action);
        }// query params
        
        if ($public !== null) {
            $queryParams['public'] = $this->apiClient->getSerializer()->toQueryValue($public);
        }// query params
        
        if ($cause_only !== null) {
            $queryParams['cause_only'] = $this->apiClient->getSerializer()->toQueryValue($cause_only);
        }// query params
        
        if ($most_common_value !== null) {
            $queryParams['most_common_value'] = $this->apiClient->getSerializer()->toQueryValue($most_common_value);
        }// query params
        
        if ($most_common_unit_id !== null) {
            $queryParams['most_common_unit_id'] = $this->apiClient->getSerializer()->toQueryValue($most_common_unit_id);
        }// query params
        
        if ($standard_deviation !== null) {
            $queryParams['standard_deviation'] = $this->apiClient->getSerializer()->toQueryValue($standard_deviation);
        }// query params
        
        if ($variance !== null) {
            $queryParams['variance'] = $this->apiClient->getSerializer()->toQueryValue($variance);
        }// query params
        
        if ($mean !== null) {
            $queryParams['mean'] = $this->apiClient->getSerializer()->toQueryValue($mean);
        }// query params
        
        if ($median !== null) {
            $queryParams['median'] = $this->apiClient->getSerializer()->toQueryValue($median);
        }// query params
        
        if ($number_of_measurements !== null) {
            $queryParams['number_of_measurements'] = $this->apiClient->getSerializer()->toQueryValue($number_of_measurements);
        }// query params
        
        if ($number_of_unique_values !== null) {
            $queryParams['number_of_unique_values'] = $this->apiClient->getSerializer()->toQueryValue($number_of_unique_values);
        }// query params
        
        if ($skewness !== null) {
            $queryParams['skewness'] = $this->apiClient->getSerializer()->toQueryValue($skewness);
        }// query params
        
        if ($kurtosis !== null) {
            $queryParams['kurtosis'] = $this->apiClient->getSerializer()->toQueryValue($kurtosis);
        }// query params
        
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }// query params
        
        if ($error_message !== null) {
            $queryParams['error_message'] = $this->apiClient->getSerializer()->toQueryValue($error_message);
        }// query params
        
        if ($last_successful_update_time !== null) {
            $queryParams['last_successful_update_time'] = $this->apiClient->getSerializer()->toQueryValue($last_successful_update_time);
        }// query params
        
        if ($created_at !== null) {
            $queryParams['created_at'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }// query params
        
        if ($updated_at !== null) {
            $queryParams['updated_at'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }// query params
        
        if ($product_url !== null) {
            $queryParams['product_url'] = $this->apiClient->getSerializer()->toQueryValue($product_url);
        }// query params
        
        if ($image_url !== null) {
            $queryParams['image_url'] = $this->apiClient->getSerializer()->toQueryValue($image_url);
        }// query params
        
        if ($price !== null) {
            $queryParams['price'] = $this->apiClient->getSerializer()->toQueryValue($price);
        }// query params
        
        if ($number_of_user_variables !== null) {
            $queryParams['number_of_user_variables'] = $this->apiClient->getSerializer()->toQueryValue($number_of_user_variables);
        }// query params
        
        if ($outcome !== null) {
            $queryParams['outcome'] = $this->apiClient->getSerializer()->toQueryValue($outcome);
        }// query params
        
        if ($minimum_recorded_value !== null) {
            $queryParams['minimum_recorded_value'] = $this->apiClient->getSerializer()->toQueryValue($minimum_recorded_value);
        }// query params
        
        if ($maximum_recorded_value !== null) {
            $queryParams['maximum_recorded_value'] = $this->apiClient->getSerializer()->toQueryValue($maximum_recorded_value);
        }// query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }// query params
        
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse20034'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20034', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20034', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * variablesPost
     *
     * Store Variable
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Variable $body Variable that should be stored (optional)
     * @return \Swagger\Client\Model\InlineResponse20035
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variablesPost($access_token = null, $body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->variablesPostWithHttpInfo ($access_token, $body);
        return $response; 
    }


    /**
     * variablesPostWithHttpInfo
     *
     * Store Variable
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Variable $body Variable that should be stored (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20035, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variablesPostWithHttpInfo($access_token = null, $body = null)
    {
        
  
        // parse inputs
        $resourcePath = "/variables";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse20035'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20035', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20035', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * variablesIdGet
     *
     * Get Variable
     *
     * @param int $id id of Variable (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return \Swagger\Client\Model\InlineResponse20035
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variablesIdGet($id, $access_token = null)
    {
        list($response, $statusCode, $httpHeader) = $this->variablesIdGetWithHttpInfo ($id, $access_token);
        return $response; 
    }


    /**
     * variablesIdGetWithHttpInfo
     *
     * Get Variable
     *
     * @param int $id id of Variable (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20035, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variablesIdGetWithHttpInfo($id, $access_token = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling variablesIdGet');
        }
  
        // parse inputs
        $resourcePath = "/variables/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse20035'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20035', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20035', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * variablesIdPut
     *
     * Update Variable
     *
     * @param int $id id of Variable (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Variable $body Variable that should be updated (optional)
     * @return \Swagger\Client\Model\InlineResponse2002
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variablesIdPut($id, $access_token = null, $body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->variablesIdPutWithHttpInfo ($id, $access_token, $body);
        return $response; 
    }


    /**
     * variablesIdPutWithHttpInfo
     *
     * Update Variable
     *
     * @param int $id id of Variable (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Variable $body Variable that should be updated (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variablesIdPutWithHttpInfo($id, $access_token = null, $body = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling variablesIdPut');
        }
  
        // parse inputs
        $resourcePath = "/variables/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse2002'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse2002', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2002', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * variablesIdDelete
     *
     * Delete Variable
     *
     * @param int $id id of Variable (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return \Swagger\Client\Model\InlineResponse2002
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variablesIdDelete($id, $access_token = null)
    {
        list($response, $statusCode, $httpHeader) = $this->variablesIdDeleteWithHttpInfo ($id, $access_token);
        return $response; 
    }


    /**
     * variablesIdDeleteWithHttpInfo
     *
     * Delete Variable
     *
     * @param int $id id of Variable (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variablesIdDeleteWithHttpInfo($id, $access_token = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling variablesIdDelete');
        }
  
        // parse inputs
        $resourcePath = "/variables/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'DELETE',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse2002'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse2002', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2002', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
