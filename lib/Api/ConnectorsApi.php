<?php
/**
 * ConnectorsApi
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
 * ConnectorsApi Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectorsApi
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
     * @return ConnectorsApi
     */
    public function setApiClient(\QuantiModo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation connectConnector
     *
     * Obtain a token from 3rd party data source
     *
     * @param string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @param float $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return void
     */
    public function connectConnector($connector_name, $user_id = null)
    {
        list($response) = $this->connectConnectorWithHttpInfo($connector_name, $user_id);
        return $response;
    }

    /**
     * Operation connectConnectorWithHttpInfo
     *
     * Obtain a token from 3rd party data source
     *
     * @param string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @param float $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function connectConnectorWithHttpInfo($connector_name, $user_id = null)
    {
        // verify the required parameter 'connector_name' is set
        if ($connector_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $connector_name when calling connectConnector');
        }
        // parse inputs
        $resourcePath = "/v3/connectors/{connectorName}/connect";
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
        // path params
        if ($connector_name !== null) {
            $resourcePath = str_replace(
                "{" . "connectorName" . "}",
                $this->apiClient->getSerializer()->toPathValue($connector_name),
                $resourcePath
            );
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
                null,
                '/v3/connectors/{connectorName}/connect'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation disconnectConnector
     *
     * Delete stored connection info
     *
     * @param string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return void
     */
    public function disconnectConnector($connector_name)
    {
        list($response) = $this->disconnectConnectorWithHttpInfo($connector_name);
        return $response;
    }

    /**
     * Operation disconnectConnectorWithHttpInfo
     *
     * Delete stored connection info
     *
     * @param string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function disconnectConnectorWithHttpInfo($connector_name)
    {
        // verify the required parameter 'connector_name' is set
        if ($connector_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $connector_name when calling disconnectConnector');
        }
        // parse inputs
        $resourcePath = "/v3/connectors/{connectorName}/disconnect";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($connector_name !== null) {
            $resourcePath = str_replace(
                "{" . "connectorName" . "}",
                $this->apiClient->getSerializer()->toPathValue($connector_name),
                $resourcePath
            );
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
                null,
                '/v3/connectors/{connectorName}/disconnect'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getConnectors
     *
     * List of Connectors
     *
     * @param string $app_name Example: MoodiModo (optional)
     * @param string $client_id Example: oauth_test_client (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\GetConnectorsResponse
     */
    public function getConnectors($app_name = null, $client_id = null)
    {
        list($response) = $this->getConnectorsWithHttpInfo($app_name, $client_id);
        return $response;
    }

    /**
     * Operation getConnectorsWithHttpInfo
     *
     * List of Connectors
     *
     * @param string $app_name Example: MoodiModo (optional)
     * @param string $client_id Example: oauth_test_client (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\GetConnectorsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getConnectorsWithHttpInfo($app_name = null, $client_id = null)
    {
        // parse inputs
        $resourcePath = "/v3/connectors/list";
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
                '\QuantiModo\Client\Model\GetConnectorsResponse',
                '/v3/connectors/list'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\GetConnectorsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\GetConnectorsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getIntegrationJs
     *
     * Get embeddable connect javascript
     *
     * @param string $client_id Example: oauth_test_client (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return void
     */
    public function getIntegrationJs($client_id = null)
    {
        list($response) = $this->getIntegrationJsWithHttpInfo($client_id);
        return $response;
    }

    /**
     * Operation getIntegrationJsWithHttpInfo
     *
     * Get embeddable connect javascript
     *
     * @param string $client_id Example: oauth_test_client (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getIntegrationJsWithHttpInfo($client_id = null)
    {
        // parse inputs
        $resourcePath = "/v3/integration.js";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/x-javascript']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v3/integration.js'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getMobileConnectPage
     *
     * Mobile connect page
     *
     * @param float $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return void
     */
    public function getMobileConnectPage($user_id = null)
    {
        list($response) = $this->getMobileConnectPageWithHttpInfo($user_id);
        return $response;
    }

    /**
     * Operation getMobileConnectPageWithHttpInfo
     *
     * Mobile connect page
     *
     * @param float $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMobileConnectPageWithHttpInfo($user_id = null)
    {
        // parse inputs
        $resourcePath = "/v3/connect/mobile";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/html']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v3/connect/mobile'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation updateConnector
     *
     * Sync with data source
     *
     * @param string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @param float $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return void
     */
    public function updateConnector($connector_name, $user_id = null)
    {
        list($response) = $this->updateConnectorWithHttpInfo($connector_name, $user_id);
        return $response;
    }

    /**
     * Operation updateConnectorWithHttpInfo
     *
     * Sync with data source
     *
     * @param string $connector_name Lowercase system name of the source application or device. Get a list of available connectors from the /v3/connectors/list endpoint. (required)
     * @param float $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateConnectorWithHttpInfo($connector_name, $user_id = null)
    {
        // verify the required parameter 'connector_name' is set
        if ($connector_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $connector_name when calling updateConnector');
        }
        // parse inputs
        $resourcePath = "/v3/connectors/{connectorName}/update";
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
        // path params
        if ($connector_name !== null) {
            $resourcePath = str_replace(
                "{" . "connectorName" . "}",
                $this->apiClient->getSerializer()->toPathValue($connector_name),
                $resourcePath
            );
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
                null,
                '/v3/connectors/{connectorName}/update'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
