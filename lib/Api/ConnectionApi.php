<?php
/**
 * ConnectionApi
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
 * ConnectionApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectionApi
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
     * @return ConnectionApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * connectionsGet
     *
     * Get all Connections
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id ID of user that owns this correlation (optional)
     * @param int $connector_id The id for the connector data source for which the connection is connected (optional)
     * @param string $connect_status Indicates whether a connector is currently connected to a service for a user. (optional)
     * @param string $connect_error Error message if there is a problem with authorizing this connection. (optional)
     * @param string $update_requested_at Time at which an update was requested by a user. (optional)
     * @param string $update_status Indicates whether a connector is currently updated. (optional)
     * @param string $update_error Indicates if there was an error during the update. (optional)
     * @param string $last_successful_updated_at The time at which the connector was last successfully updated. (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @return \Swagger\Client\Model\InlineResponse2003
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectionsGet($access_token = null, $user_id = null, $connector_id = null, $connect_status = null, $connect_error = null, $update_requested_at = null, $update_status = null, $update_error = null, $last_successful_updated_at = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        list($response, $statusCode, $httpHeader) = $this->connectionsGetWithHttpInfo ($access_token, $user_id, $connector_id, $connect_status, $connect_error, $update_requested_at, $update_status, $update_error, $last_successful_updated_at, $created_at, $updated_at, $limit, $offset, $sort);
        return $response; 
    }


    /**
     * connectionsGetWithHttpInfo
     *
     * Get all Connections
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id ID of user that owns this correlation (optional)
     * @param int $connector_id The id for the connector data source for which the connection is connected (optional)
     * @param string $connect_status Indicates whether a connector is currently connected to a service for a user. (optional)
     * @param string $connect_error Error message if there is a problem with authorizing this connection. (optional)
     * @param string $update_requested_at Time at which an update was requested by a user. (optional)
     * @param string $update_status Indicates whether a connector is currently updated. (optional)
     * @param string $update_error Indicates if there was an error during the update. (optional)
     * @param string $last_successful_updated_at The time at which the connector was last successfully updated. (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectionsGetWithHttpInfo($access_token = null, $user_id = null, $connector_id = null, $connect_status = null, $connect_error = null, $update_requested_at = null, $update_status = null, $update_error = null, $last_successful_updated_at = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        
  
        // parse inputs
        $resourcePath = "/connections";
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
        
        if ($user_id !== null) {
            $queryParams['user_id'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }// query params
        
        if ($connector_id !== null) {
            $queryParams['connector_id'] = $this->apiClient->getSerializer()->toQueryValue($connector_id);
        }// query params
        
        if ($connect_status !== null) {
            $queryParams['connect_status'] = $this->apiClient->getSerializer()->toQueryValue($connect_status);
        }// query params
        
        if ($connect_error !== null) {
            $queryParams['connect_error'] = $this->apiClient->getSerializer()->toQueryValue($connect_error);
        }// query params
        
        if ($update_requested_at !== null) {
            $queryParams['update_requested_at'] = $this->apiClient->getSerializer()->toQueryValue($update_requested_at);
        }// query params
        
        if ($update_status !== null) {
            $queryParams['update_status'] = $this->apiClient->getSerializer()->toQueryValue($update_status);
        }// query params
        
        if ($update_error !== null) {
            $queryParams['update_error'] = $this->apiClient->getSerializer()->toQueryValue($update_error);
        }// query params
        
        if ($last_successful_updated_at !== null) {
            $queryParams['last_successful_updated_at'] = $this->apiClient->getSerializer()->toQueryValue($last_successful_updated_at);
        }// query params
        
        if ($created_at !== null) {
            $queryParams['created_at'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }// query params
        
        if ($updated_at !== null) {
            $queryParams['updated_at'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
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
                $headerParams, '\Swagger\Client\Model\InlineResponse2003'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse2003', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2003', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * connectionsPost
     *
     * Store Connection
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Connection $body Connection that should be stored (optional)
     * @return \Swagger\Client\Model\InlineResponse20014
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectionsPost($access_token = null, $body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->connectionsPostWithHttpInfo ($access_token, $body);
        return $response; 
    }


    /**
     * connectionsPostWithHttpInfo
     *
     * Store Connection
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Connection $body Connection that should be stored (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20014, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectionsPostWithHttpInfo($access_token = null, $body = null)
    {
        
  
        // parse inputs
        $resourcePath = "/connections";
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
                $headerParams, '\Swagger\Client\Model\InlineResponse20014'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20014', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20014', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * connectionsIdGet
     *
     * Get Connection
     *
     * @param int $id id of Connection (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return \Swagger\Client\Model\InlineResponse20014
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectionsIdGet($id, $access_token = null)
    {
        list($response, $statusCode, $httpHeader) = $this->connectionsIdGetWithHttpInfo ($id, $access_token);
        return $response; 
    }


    /**
     * connectionsIdGetWithHttpInfo
     *
     * Get Connection
     *
     * @param int $id id of Connection (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20014, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectionsIdGetWithHttpInfo($id, $access_token = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling connectionsIdGet');
        }
  
        // parse inputs
        $resourcePath = "/connections/{id}";
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
                $headerParams, '\Swagger\Client\Model\InlineResponse20014'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20014', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20014', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * connectionsIdPut
     *
     * Update Connection
     *
     * @param int $id id of Connection (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Connection $body Connection that should be updated (optional)
     * @return \Swagger\Client\Model\InlineResponse2002
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectionsIdPut($id, $access_token = null, $body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->connectionsIdPutWithHttpInfo ($id, $access_token, $body);
        return $response; 
    }


    /**
     * connectionsIdPutWithHttpInfo
     *
     * Update Connection
     *
     * @param int $id id of Connection (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Connection $body Connection that should be updated (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectionsIdPutWithHttpInfo($id, $access_token = null, $body = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling connectionsIdPut');
        }
  
        // parse inputs
        $resourcePath = "/connections/{id}";
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
     * connectionsIdDelete
     *
     * Delete Connection
     *
     * @param int $id id of Connection (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return \Swagger\Client\Model\InlineResponse2002
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectionsIdDelete($id, $access_token = null)
    {
        list($response, $statusCode, $httpHeader) = $this->connectionsIdDeleteWithHttpInfo ($id, $access_token);
        return $response; 
    }


    /**
     * connectionsIdDeleteWithHttpInfo
     *
     * Delete Connection
     *
     * @param int $id id of Connection (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectionsIdDeleteWithHttpInfo($id, $access_token = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling connectionsIdDelete');
        }
  
        // parse inputs
        $resourcePath = "/connections/{id}";
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
