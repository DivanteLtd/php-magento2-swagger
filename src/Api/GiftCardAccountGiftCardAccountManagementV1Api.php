<?php
/**
 * GiftCardAccountGiftCardAccountManagementV1Api
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
 * GiftCardAccountGiftCardAccountManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Magento2Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GiftCardAccountGiftCardAccountManagementV1Api
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
     * @return GiftCardAccountGiftCardAccountManagementV1Api
     */
    public function setApiClient(\Swagger\Magento2Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet
     *
     * @param string $gift_card_code  (required)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return float
     */
    public function giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet($gift_card_code)
    {
        list($response) = $this->giftCardAccountGiftCardAccountManagementV1CheckGiftCardGetWithHttpInfo($gift_card_code);
        return $response;
    }

    /**
     * Operation giftCardAccountGiftCardAccountManagementV1CheckGiftCardGetWithHttpInfo
     *
     * @param string $gift_card_code  (required)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of float, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftCardAccountGiftCardAccountManagementV1CheckGiftCardGetWithHttpInfo($gift_card_code)
    {
        // verify the required parameter 'gift_card_code' is set
        if ($gift_card_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $gift_card_code when calling giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet');
        }
        // parse inputs
        $resourcePath = "/V1/carts/mine/checkGiftCard/{giftCardCode}";
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
        if ($gift_card_code !== null) {
            $resourcePath = str_replace(
                "{" . "giftCardCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($gift_card_code),
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
                'float',
                '/V1/carts/mine/checkGiftCard/{giftCardCode}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'float', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'float', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\ErrorResponse', $e->getResponseHeaders());
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
     * Operation giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete
     *
     * @param int $quote_id  (required)
     * @param string $gift_card_code  (required)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return bool
     */
    public function giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete($quote_id, $gift_card_code)
    {
        list($response) = $this->giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDeleteWithHttpInfo($quote_id, $gift_card_code);
        return $response;
    }

    /**
     * Operation giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDeleteWithHttpInfo
     *
     * @param int $quote_id  (required)
     * @param string $gift_card_code  (required)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDeleteWithHttpInfo($quote_id, $gift_card_code)
    {
        // verify the required parameter 'quote_id' is set
        if ($quote_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $quote_id when calling giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete');
        }
        // verify the required parameter 'gift_card_code' is set
        if ($gift_card_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $gift_card_code when calling giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete');
        }
        // parse inputs
        $resourcePath = "/V1/carts/{quoteId}/giftCards/{giftCardCode}";
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
        if ($quote_id !== null) {
            $resourcePath = str_replace(
                "{" . "quoteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($quote_id),
                $resourcePath
            );
        }
        // path params
        if ($gift_card_code !== null) {
            $resourcePath = str_replace(
                "{" . "giftCardCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($gift_card_code),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                'bool',
                '/V1/carts/{quoteId}/giftCards/{giftCardCode}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
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
     * Operation giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet
     *
     * @param int $quote_id  (required)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return \Swagger\Magento2Client\Model\GiftCardAccountDataGiftCardAccountInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet($quote_id)
    {
        list($response) = $this->giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGetWithHttpInfo($quote_id);
        return $response;
    }

    /**
     * Operation giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGetWithHttpInfo
     *
     * @param int $quote_id  (required)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of \Swagger\Magento2Client\Model\GiftCardAccountDataGiftCardAccountInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGetWithHttpInfo($quote_id)
    {
        // verify the required parameter 'quote_id' is set
        if ($quote_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $quote_id when calling giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet');
        }
        // parse inputs
        $resourcePath = "/V1/carts/{quoteId}/giftCards";
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
        if ($quote_id !== null) {
            $resourcePath = str_replace(
                "{" . "quoteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($quote_id),
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
                '\Swagger\Magento2Client\Model\GiftCardAccountDataGiftCardAccountInterface',
                '/V1/carts/{quoteId}/giftCards'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Magento2Client\Model\GiftCardAccountDataGiftCardAccountInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\GiftCardAccountDataGiftCardAccountInterface', $e->getResponseHeaders());
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
     * Operation giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost
     *
     * @param \Swagger\Magento2Client\Model\Body107 $body  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return bool
     */
    public function giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost($body = null)
    {
        list($response) = $this->giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostWithHttpInfo
     *
     * @param \Swagger\Magento2Client\Model\Body107 $body  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/V1/carts/mine/giftCards";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'bool',
                '/V1/carts/mine/giftCards'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
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
     * Operation giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut
     *
     * @param int $cart_id  (required)
     * @param \Swagger\Magento2Client\Model\Body106 $body  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return bool
     */
    public function giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut($cart_id, $body = null)
    {
        list($response) = $this->giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutWithHttpInfo($cart_id, $body);
        return $response;
    }

    /**
     * Operation giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutWithHttpInfo
     *
     * @param int $cart_id  (required)
     * @param \Swagger\Magento2Client\Model\Body106 $body  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutWithHttpInfo($cart_id, $body = null)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut');
        }
        // parse inputs
        $resourcePath = "/V1/carts/{cartId}/giftCards";
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
        if ($cart_id !== null) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
                $resourcePath
            );
        }
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                'bool',
                '/V1/carts/{cartId}/giftCards'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
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
