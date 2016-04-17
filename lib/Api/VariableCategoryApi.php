<?php
/**
 * VariableCategoryApi
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
 * VariableCategoryApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VariableCategoryApi
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
     * @return VariableCategoryApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * variableCategoriesGet
     *
     * Get all VariableCategories
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param string $name Name of the category (optional)
     * @param Number $filling_value Value for replacing null measurements (optional)
     * @param Number $maximum_allowed_value Maximum recorded value of this category (optional)
     * @param Number $minimum_allowed_value Minimum recorded value of this category (optional)
     * @param int $duration_of_action Estimated number of seconds following the onset delay in which a stimulus produces a perceivable effect (optional)
     * @param int $onset_delay Estimated number of seconds that pass before a stimulus produces a perceivable effect (optional)
     * @param string $combination_operation How to combine values of this variable (for instance, to see a summary of the values over a month) SUM or MEAN (optional)
     * @param int $updated updated (optional)
     * @param bool $cause_only A value of 1 indicates that this category is generally a cause in a causal relationship.  An example of a causeOnly category would be a category such as Work which would generally not be influenced by the behaviour of the user (optional)
     * @param int $public Is category public (optional)
     * @param bool $outcome outcome (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param string $image_url Image URL (optional)
     * @param int $default_unit_id ID of the default unit for the category (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @return \Swagger\Client\Model\InlineResponse20031
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variableCategoriesGet($access_token = null, $name = null, $filling_value = null, $maximum_allowed_value = null, $minimum_allowed_value = null, $duration_of_action = null, $onset_delay = null, $combination_operation = null, $updated = null, $cause_only = null, $public = null, $outcome = null, $created_at = null, $updated_at = null, $image_url = null, $default_unit_id = null, $limit = null, $offset = null, $sort = null)
    {
        list($response, $statusCode, $httpHeader) = $this->variableCategoriesGetWithHttpInfo ($access_token, $name, $filling_value, $maximum_allowed_value, $minimum_allowed_value, $duration_of_action, $onset_delay, $combination_operation, $updated, $cause_only, $public, $outcome, $created_at, $updated_at, $image_url, $default_unit_id, $limit, $offset, $sort);
        return $response; 
    }


    /**
     * variableCategoriesGetWithHttpInfo
     *
     * Get all VariableCategories
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param string $name Name of the category (optional)
     * @param Number $filling_value Value for replacing null measurements (optional)
     * @param Number $maximum_allowed_value Maximum recorded value of this category (optional)
     * @param Number $minimum_allowed_value Minimum recorded value of this category (optional)
     * @param int $duration_of_action Estimated number of seconds following the onset delay in which a stimulus produces a perceivable effect (optional)
     * @param int $onset_delay Estimated number of seconds that pass before a stimulus produces a perceivable effect (optional)
     * @param string $combination_operation How to combine values of this variable (for instance, to see a summary of the values over a month) SUM or MEAN (optional)
     * @param int $updated updated (optional)
     * @param bool $cause_only A value of 1 indicates that this category is generally a cause in a causal relationship.  An example of a causeOnly category would be a category such as Work which would generally not be influenced by the behaviour of the user (optional)
     * @param int $public Is category public (optional)
     * @param bool $outcome outcome (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param string $image_url Image URL (optional)
     * @param int $default_unit_id ID of the default unit for the category (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20031, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variableCategoriesGetWithHttpInfo($access_token = null, $name = null, $filling_value = null, $maximum_allowed_value = null, $minimum_allowed_value = null, $duration_of_action = null, $onset_delay = null, $combination_operation = null, $updated = null, $cause_only = null, $public = null, $outcome = null, $created_at = null, $updated_at = null, $image_url = null, $default_unit_id = null, $limit = null, $offset = null, $sort = null)
    {
        
  
        // parse inputs
        $resourcePath = "/variableCategories";
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
        
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
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
        
        if ($duration_of_action !== null) {
            $queryParams['duration_of_action'] = $this->apiClient->getSerializer()->toQueryValue($duration_of_action);
        }// query params
        
        if ($onset_delay !== null) {
            $queryParams['onset_delay'] = $this->apiClient->getSerializer()->toQueryValue($onset_delay);
        }// query params
        
        if ($combination_operation !== null) {
            $queryParams['combination_operation'] = $this->apiClient->getSerializer()->toQueryValue($combination_operation);
        }// query params
        
        if ($updated !== null) {
            $queryParams['updated'] = $this->apiClient->getSerializer()->toQueryValue($updated);
        }// query params
        
        if ($cause_only !== null) {
            $queryParams['cause_only'] = $this->apiClient->getSerializer()->toQueryValue($cause_only);
        }// query params
        
        if ($public !== null) {
            $queryParams['public'] = $this->apiClient->getSerializer()->toQueryValue($public);
        }// query params
        
        if ($outcome !== null) {
            $queryParams['outcome'] = $this->apiClient->getSerializer()->toQueryValue($outcome);
        }// query params
        
        if ($created_at !== null) {
            $queryParams['created_at'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }// query params
        
        if ($updated_at !== null) {
            $queryParams['updated_at'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }// query params
        
        if ($image_url !== null) {
            $queryParams['image_url'] = $this->apiClient->getSerializer()->toQueryValue($image_url);
        }// query params
        
        if ($default_unit_id !== null) {
            $queryParams['default_unit_id'] = $this->apiClient->getSerializer()->toQueryValue($default_unit_id);
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
                $headerParams, '\Swagger\Client\Model\InlineResponse20031'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20031', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20031', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * variableCategoriesPost
     *
     * Store VariableCategory
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\VariableCategory $body VariableCategory that should be stored (optional)
     * @return \Swagger\Client\Model\InlineResponse20032
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variableCategoriesPost($access_token = null, $body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->variableCategoriesPostWithHttpInfo ($access_token, $body);
        return $response; 
    }


    /**
     * variableCategoriesPostWithHttpInfo
     *
     * Store VariableCategory
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\VariableCategory $body VariableCategory that should be stored (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20032, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variableCategoriesPostWithHttpInfo($access_token = null, $body = null)
    {
        
  
        // parse inputs
        $resourcePath = "/variableCategories";
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
                $headerParams, '\Swagger\Client\Model\InlineResponse20032'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20032', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20032', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * variableCategoriesIdGet
     *
     * Get VariableCategory
     *
     * @param int $id id of VariableCategory (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return \Swagger\Client\Model\InlineResponse20032
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variableCategoriesIdGet($id, $access_token = null)
    {
        list($response, $statusCode, $httpHeader) = $this->variableCategoriesIdGetWithHttpInfo ($id, $access_token);
        return $response; 
    }


    /**
     * variableCategoriesIdGetWithHttpInfo
     *
     * Get VariableCategory
     *
     * @param int $id id of VariableCategory (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20032, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variableCategoriesIdGetWithHttpInfo($id, $access_token = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling variableCategoriesIdGet');
        }
  
        // parse inputs
        $resourcePath = "/variableCategories/{id}";
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
                $headerParams, '\Swagger\Client\Model\InlineResponse20032'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20032', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20032', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * variableCategoriesIdPut
     *
     * Update VariableCategory
     *
     * @param int $id id of VariableCategory (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\VariableCategory $body VariableCategory that should be updated (optional)
     * @return \Swagger\Client\Model\InlineResponse2002
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variableCategoriesIdPut($id, $access_token = null, $body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->variableCategoriesIdPutWithHttpInfo ($id, $access_token, $body);
        return $response; 
    }


    /**
     * variableCategoriesIdPutWithHttpInfo
     *
     * Update VariableCategory
     *
     * @param int $id id of VariableCategory (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\VariableCategory $body VariableCategory that should be updated (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variableCategoriesIdPutWithHttpInfo($id, $access_token = null, $body = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling variableCategoriesIdPut');
        }
  
        // parse inputs
        $resourcePath = "/variableCategories/{id}";
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
     * variableCategoriesIdDelete
     *
     * Delete VariableCategory
     *
     * @param int $id id of VariableCategory (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return \Swagger\Client\Model\InlineResponse2002
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variableCategoriesIdDelete($id, $access_token = null)
    {
        list($response, $statusCode, $httpHeader) = $this->variableCategoriesIdDeleteWithHttpInfo ($id, $access_token);
        return $response; 
    }


    /**
     * variableCategoriesIdDeleteWithHttpInfo
     *
     * Delete VariableCategory
     *
     * @param int $id id of VariableCategory (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function variableCategoriesIdDeleteWithHttpInfo($id, $access_token = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling variableCategoriesIdDelete');
        }
  
        // parse inputs
        $resourcePath = "/variableCategories/{id}";
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
