<?php
/**
 * CatalogProductLinkTypeListV1Api
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Magento2Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Magento2Client\Api;

use \Swagger\Magento2Client\ApiClient;
use \Swagger\Magento2Client\ApiException;
use \Swagger\Magento2Client\Configuration;
use \Swagger\Magento2Client\ObjectSerializer;

/**
 * CatalogProductLinkTypeListV1Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Magento2Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogProductLinkTypeListV1Api
{
    /**
     * API Client
     *
     * @var \Swagger\Magento2Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Magento2Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Magento2Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Magento2Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Magento2Client\ApiClient $apiClient set the API client
     *
     * @return CatalogProductLinkTypeListV1Api
     */
    public function setApiClient(\Swagger\Magento2Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation catalogProductLinkTypeListV1GetItemAttributesGet
     *
     * @param string $type  (required)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return \Swagger\Magento2Client\Model\CatalogDataProductLinkAttributeInterface[]
     */
    public function catalogProductLinkTypeListV1GetItemAttributesGet($type)
    {
        list($response) = $this->catalogProductLinkTypeListV1GetItemAttributesGetWithHttpInfo($type);
        return $response;
    }

    /**
     * Operation catalogProductLinkTypeListV1GetItemAttributesGetWithHttpInfo
     *
     * @param string $type  (required)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of \Swagger\Magento2Client\Model\CatalogDataProductLinkAttributeInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogProductLinkTypeListV1GetItemAttributesGetWithHttpInfo($type)
    {
        // verify the required parameter 'type' is set
        if ($type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type when calling catalogProductLinkTypeListV1GetItemAttributesGet');
        }
        // parse inputs
        $resourcePath = "/V1/products/links/{type}/attributes";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($type !== null) {
            $resourcePath = str_replace(
                "{" . "type" . "}",
                $this->apiClient->getSerializer()->toPathValue($type),
                $resourcePath
            );
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
                '\Swagger\Magento2Client\Model\CatalogDataProductLinkAttributeInterface[]',
                '/V1/products/links/{type}/attributes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Magento2Client\Model\CatalogDataProductLinkAttributeInterface[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\CatalogDataProductLinkAttributeInterface[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation catalogProductLinkTypeListV1GetItemsGet
     *
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return \Swagger\Magento2Client\Model\CatalogDataProductLinkTypeInterface[]
     */
    public function catalogProductLinkTypeListV1GetItemsGet()
    {
        list($response) = $this->catalogProductLinkTypeListV1GetItemsGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation catalogProductLinkTypeListV1GetItemsGetWithHttpInfo
     *
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of \Swagger\Magento2Client\Model\CatalogDataProductLinkTypeInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogProductLinkTypeListV1GetItemsGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/V1/products/links/types";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


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
                '\Swagger\Magento2Client\Model\CatalogDataProductLinkTypeInterface[]',
                '/V1/products/links/types'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Magento2Client\Model\CatalogDataProductLinkTypeInterface[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\CatalogDataProductLinkTypeInterface[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}