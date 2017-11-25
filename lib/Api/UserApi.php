<?php
/**
 * UserApi
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * quantimodo
 *
 * We make it easy to retrieve and analyze normalized user data from a wide array of devices and applications. Check out our [docs and sdk's](https://github.com/QuantiModo/docs) or [contact us](https://help.quantimo.do).
 *
 * OpenAPI spec version: 5.8.112511
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace QuantiModo\Client\Api;

use \QuantiModo\Client\ApiClient;
use \QuantiModo\Client\ApiException;
use \QuantiModo\Client\Configuration;
use \QuantiModo\Client\ObjectSerializer;

/**
 * UserApi Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserApi
{
    /**
     * API Client
     *
     * @var \QuantiModo\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \QuantiModo\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\QuantiModo\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \QuantiModo\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \QuantiModo\Client\ApiClient $apiClient set the API client
     *
     * @return UserApi
     */
    public function setApiClient(\QuantiModo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getUser
     *
     * Get user info
     *
     * @param float $user_id User&#39;s id (optional)
     * @param string $created_at When the record was first created. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. (optional)
     * @param string $updated_at When the record was last updated. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param string $client_id Example: oauth_test_client (optional)
     * @param string $app_name Example: MoodiModo (optional)
     * @param string $app_version Example: 2.1.1.0 (optional)
     * @param int $client_user_id Example: 74802 (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\User
     */
    public function getUser($user_id = null, $created_at = null, $updated_at = null, $limit = '100', $offset = null, $sort = null, $client_id = null, $app_name = null, $app_version = null, $client_user_id = null)
    {
        list($response) = $this->getUserWithHttpInfo($user_id, $created_at, $updated_at, $limit, $offset, $sort, $client_id, $app_name, $app_version, $client_user_id);
        return $response;
    }

    /**
     * Operation getUserWithHttpInfo
     *
     * Get user info
     *
     * @param float $user_id User&#39;s id (optional)
     * @param string $created_at When the record was first created. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. (optional)
     * @param string $updated_at When the record was last updated. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional, default to 100)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. (optional)
     * @param string $client_id Example: oauth_test_client (optional)
     * @param string $app_name Example: MoodiModo (optional)
     * @param string $app_version Example: 2.1.1.0 (optional)
     * @param int $client_user_id Example: 74802 (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\User, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserWithHttpInfo($user_id = null, $created_at = null, $updated_at = null, $limit = '100', $offset = null, $sort = null, $client_id = null, $app_name = null, $app_version = null, $client_user_id = null)
    {
        if (!is_null($offset) && ($offset < 0)) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling UserApi.getUser, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/v3/user";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // query params
        if ($created_at !== null) {
            $queryParams['createdAt'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updatedAt'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = $this->apiClient->getSerializer()->toQueryValue($client_id);
        }
        // query params
        if ($app_name !== null) {
            $queryParams['appName'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
        // query params
        if ($app_version !== null) {
            $queryParams['appVersion'] = $this->apiClient->getSerializer()->toQueryValue($app_version);
        }
        // query params
        if ($client_user_id !== null) {
            $queryParams['clientUserId'] = $this->apiClient->getSerializer()->toQueryValue($client_user_id);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\User',
                '/v3/user'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\User', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\User', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postUserSettings
     *
     * Post UserSettings
     *
     * @param string $app_name Example: MoodiModo (optional)
     * @param string $client_id Example: oauth_test_client (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\PostUserSettingsResponse
     */
    public function postUserSettings($app_name = null, $client_id = null)
    {
        list($response) = $this->postUserSettingsWithHttpInfo($app_name, $client_id);
        return $response;
    }

    /**
     * Operation postUserSettingsWithHttpInfo
     *
     * Post UserSettings
     *
     * @param string $app_name Example: MoodiModo (optional)
     * @param string $client_id Example: oauth_test_client (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\PostUserSettingsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postUserSettingsWithHttpInfo($app_name = null, $client_id = null)
    {
        // parse inputs
        $resourcePath = "/v3/userSettings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($app_name !== null) {
            $queryParams['appName'] = $this->apiClient->getSerializer()->toQueryValue($app_name);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = $this->apiClient->getSerializer()->toQueryValue($client_id);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\PostUserSettingsResponse',
                '/v3/userSettings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\PostUserSettingsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\PostUserSettingsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
