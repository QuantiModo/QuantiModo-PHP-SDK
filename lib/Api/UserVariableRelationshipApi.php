<?php
/**
 * UserVariableRelationshipApi
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
 * UserVariableRelationshipApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserVariableRelationshipApi
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
     * @return UserVariableRelationshipApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * userVariableRelationshipsGet
     *
     * Get all UserVariableRelationships
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $id id (optional)
     * @param string $confidence_level Our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors (optional)
     * @param Number $confidence_score A quantitative representation of our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors (optional)
     * @param string $direction Direction is positive if higher predictor values generally precede higher outcome values. Direction is negative if higher predictor values generally precede lower outcome values. (optional)
     * @param int $duration_of_action Estimated number of seconds following the onset delay in which a stimulus produces a perceivable effect (optional)
     * @param string $error_message error_message (optional)
     * @param int $onset_delay Estimated number of seconds that pass before a stimulus produces a perceivable effect (optional)
     * @param int $outcome_variable_id Variable ID for the outcome variable (optional)
     * @param int $predictor_variable_id Variable ID for the predictor variable (optional)
     * @param int $predictor_unit_id ID for default unit of the predictor variable (optional)
     * @param Number $sinn_rank A value representative of the relevance of this predictor relative to other predictors of this outcome.  Usually used for relevancy sorting. (optional)
     * @param string $strength_level Can be weak, medium, or strong based on the size of the effect which the predictor appears to have on the outcome relative to other variable relationship strength scores. (optional)
     * @param Number $strength_score A value represented to the size of the effect which the predictor appears to have on the outcome. (optional)
     * @param int $user_id user_id (optional)
     * @param string $vote vote (optional)
     * @param Number $value_predicting_high_outcome Value for the predictor variable (in it&#39;s default unit) which typically precedes an above average outcome value (optional)
     * @param Number $value_predicting_low_outcome Value for the predictor variable (in it&#39;s default unit) which typically precedes a below average outcome value (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @return \Swagger\Client\Model\InlineResponse2008
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function userVariableRelationshipsGet($access_token = null, $id = null, $confidence_level = null, $confidence_score = null, $direction = null, $duration_of_action = null, $error_message = null, $onset_delay = null, $outcome_variable_id = null, $predictor_variable_id = null, $predictor_unit_id = null, $sinn_rank = null, $strength_level = null, $strength_score = null, $user_id = null, $vote = null, $value_predicting_high_outcome = null, $value_predicting_low_outcome = null, $limit = null, $offset = null, $sort = null)
    {
        list($response, $statusCode, $httpHeader) = $this->userVariableRelationshipsGetWithHttpInfo ($access_token, $id, $confidence_level, $confidence_score, $direction, $duration_of_action, $error_message, $onset_delay, $outcome_variable_id, $predictor_variable_id, $predictor_unit_id, $sinn_rank, $strength_level, $strength_score, $user_id, $vote, $value_predicting_high_outcome, $value_predicting_low_outcome, $limit, $offset, $sort);
        return $response; 
    }


    /**
     * userVariableRelationshipsGetWithHttpInfo
     *
     * Get all UserVariableRelationships
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $id id (optional)
     * @param string $confidence_level Our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors (optional)
     * @param Number $confidence_score A quantitative representation of our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors (optional)
     * @param string $direction Direction is positive if higher predictor values generally precede higher outcome values. Direction is negative if higher predictor values generally precede lower outcome values. (optional)
     * @param int $duration_of_action Estimated number of seconds following the onset delay in which a stimulus produces a perceivable effect (optional)
     * @param string $error_message error_message (optional)
     * @param int $onset_delay Estimated number of seconds that pass before a stimulus produces a perceivable effect (optional)
     * @param int $outcome_variable_id Variable ID for the outcome variable (optional)
     * @param int $predictor_variable_id Variable ID for the predictor variable (optional)
     * @param int $predictor_unit_id ID for default unit of the predictor variable (optional)
     * @param Number $sinn_rank A value representative of the relevance of this predictor relative to other predictors of this outcome.  Usually used for relevancy sorting. (optional)
     * @param string $strength_level Can be weak, medium, or strong based on the size of the effect which the predictor appears to have on the outcome relative to other variable relationship strength scores. (optional)
     * @param Number $strength_score A value represented to the size of the effect which the predictor appears to have on the outcome. (optional)
     * @param int $user_id user_id (optional)
     * @param string $vote vote (optional)
     * @param Number $value_predicting_high_outcome Value for the predictor variable (in it&#39;s default unit) which typically precedes an above average outcome value (optional)
     * @param Number $value_predicting_low_outcome Value for the predictor variable (in it&#39;s default unit) which typically precedes a below average outcome value (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2008, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function userVariableRelationshipsGetWithHttpInfo($access_token = null, $id = null, $confidence_level = null, $confidence_score = null, $direction = null, $duration_of_action = null, $error_message = null, $onset_delay = null, $outcome_variable_id = null, $predictor_variable_id = null, $predictor_unit_id = null, $sinn_rank = null, $strength_level = null, $strength_score = null, $user_id = null, $vote = null, $value_predicting_high_outcome = null, $value_predicting_low_outcome = null, $limit = null, $offset = null, $sort = null)
    {
        
  
        // parse inputs
        $resourcePath = "/userVariableRelationships";
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
        
        if ($confidence_level !== null) {
            $queryParams['confidence_level'] = $this->apiClient->getSerializer()->toQueryValue($confidence_level);
        }// query params
        
        if ($confidence_score !== null) {
            $queryParams['confidence_score'] = $this->apiClient->getSerializer()->toQueryValue($confidence_score);
        }// query params
        
        if ($direction !== null) {
            $queryParams['direction'] = $this->apiClient->getSerializer()->toQueryValue($direction);
        }// query params
        
        if ($duration_of_action !== null) {
            $queryParams['duration_of_action'] = $this->apiClient->getSerializer()->toQueryValue($duration_of_action);
        }// query params
        
        if ($error_message !== null) {
            $queryParams['error_message'] = $this->apiClient->getSerializer()->toQueryValue($error_message);
        }// query params
        
        if ($onset_delay !== null) {
            $queryParams['onset_delay'] = $this->apiClient->getSerializer()->toQueryValue($onset_delay);
        }// query params
        
        if ($outcome_variable_id !== null) {
            $queryParams['outcome_variable_id'] = $this->apiClient->getSerializer()->toQueryValue($outcome_variable_id);
        }// query params
        
        if ($predictor_variable_id !== null) {
            $queryParams['predictor_variable_id'] = $this->apiClient->getSerializer()->toQueryValue($predictor_variable_id);
        }// query params
        
        if ($predictor_unit_id !== null) {
            $queryParams['predictor_unit_id'] = $this->apiClient->getSerializer()->toQueryValue($predictor_unit_id);
        }// query params
        
        if ($sinn_rank !== null) {
            $queryParams['sinn_rank'] = $this->apiClient->getSerializer()->toQueryValue($sinn_rank);
        }// query params
        
        if ($strength_level !== null) {
            $queryParams['strength_level'] = $this->apiClient->getSerializer()->toQueryValue($strength_level);
        }// query params
        
        if ($strength_score !== null) {
            $queryParams['strength_score'] = $this->apiClient->getSerializer()->toQueryValue($strength_score);
        }// query params
        
        if ($user_id !== null) {
            $queryParams['user_id'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }// query params
        
        if ($vote !== null) {
            $queryParams['vote'] = $this->apiClient->getSerializer()->toQueryValue($vote);
        }// query params
        
        if ($value_predicting_high_outcome !== null) {
            $queryParams['value_predicting_high_outcome'] = $this->apiClient->getSerializer()->toQueryValue($value_predicting_high_outcome);
        }// query params
        
        if ($value_predicting_low_outcome !== null) {
            $queryParams['value_predicting_low_outcome'] = $this->apiClient->getSerializer()->toQueryValue($value_predicting_low_outcome);
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
                $headerParams, '\Swagger\Client\Model\InlineResponse2008'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse2008', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2008', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * userVariableRelationshipsPost
     *
     * Store UserVariableRelationship
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\UserVariableRelationship $body UserVariableRelationship that should be stored (optional)
     * @return \Swagger\Client\Model\InlineResponse20029
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function userVariableRelationshipsPost($access_token = null, $body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->userVariableRelationshipsPostWithHttpInfo ($access_token, $body);
        return $response; 
    }


    /**
     * userVariableRelationshipsPostWithHttpInfo
     *
     * Store UserVariableRelationship
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\UserVariableRelationship $body UserVariableRelationship that should be stored (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20029, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function userVariableRelationshipsPostWithHttpInfo($access_token = null, $body = null)
    {
        
  
        // parse inputs
        $resourcePath = "/userVariableRelationships";
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
                $headerParams, '\Swagger\Client\Model\InlineResponse20029'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20029', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20029', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * userVariableRelationshipsIdGet
     *
     * Get UserVariableRelationship
     *
     * @param int $id id of UserVariableRelationship (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return \Swagger\Client\Model\InlineResponse20029
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function userVariableRelationshipsIdGet($id, $access_token = null)
    {
        list($response, $statusCode, $httpHeader) = $this->userVariableRelationshipsIdGetWithHttpInfo ($id, $access_token);
        return $response; 
    }


    /**
     * userVariableRelationshipsIdGetWithHttpInfo
     *
     * Get UserVariableRelationship
     *
     * @param int $id id of UserVariableRelationship (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20029, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function userVariableRelationshipsIdGetWithHttpInfo($id, $access_token = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling userVariableRelationshipsIdGet');
        }
  
        // parse inputs
        $resourcePath = "/userVariableRelationships/{id}";
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
                $headerParams, '\Swagger\Client\Model\InlineResponse20029'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20029', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20029', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * userVariableRelationshipsIdPut
     *
     * Update UserVariableRelationship
     *
     * @param int $id id of UserVariableRelationship (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\UserVariableRelationship $body UserVariableRelationship that should be updated (optional)
     * @return \Swagger\Client\Model\InlineResponse2002
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function userVariableRelationshipsIdPut($id, $access_token = null, $body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->userVariableRelationshipsIdPutWithHttpInfo ($id, $access_token, $body);
        return $response; 
    }


    /**
     * userVariableRelationshipsIdPutWithHttpInfo
     *
     * Update UserVariableRelationship
     *
     * @param int $id id of UserVariableRelationship (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\UserVariableRelationship $body UserVariableRelationship that should be updated (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function userVariableRelationshipsIdPutWithHttpInfo($id, $access_token = null, $body = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling userVariableRelationshipsIdPut');
        }
  
        // parse inputs
        $resourcePath = "/userVariableRelationships/{id}";
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
     * userVariableRelationshipsIdDelete
     *
     * Delete UserVariableRelationship
     *
     * @param int $id id of UserVariableRelationship (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return \Swagger\Client\Model\InlineResponse2002
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function userVariableRelationshipsIdDelete($id, $access_token = null)
    {
        list($response, $statusCode, $httpHeader) = $this->userVariableRelationshipsIdDeleteWithHttpInfo ($id, $access_token);
        return $response; 
    }


    /**
     * userVariableRelationshipsIdDeleteWithHttpInfo
     *
     * Delete UserVariableRelationship
     *
     * @param int $id id of UserVariableRelationship (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function userVariableRelationshipsIdDeleteWithHttpInfo($id, $access_token = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling userVariableRelationshipsIdDelete');
        }
  
        // parse inputs
        $resourcePath = "/userVariableRelationships/{id}";
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
