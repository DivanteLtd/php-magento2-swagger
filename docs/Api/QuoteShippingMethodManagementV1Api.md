# Swagger\Magento2Client\QuoteShippingMethodManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteShippingMethodManagementV1EstimateByAddressIdPost**](QuoteShippingMethodManagementV1Api.md#quoteShippingMethodManagementV1EstimateByAddressIdPost) | **POST** /V1/carts/{cartId}/estimate-shipping-methods-by-address-id | 
[**quoteShippingMethodManagementV1EstimateByAddressIdPost_0**](QuoteShippingMethodManagementV1Api.md#quoteShippingMethodManagementV1EstimateByAddressIdPost_0) | **POST** /V1/carts/mine/estimate-shipping-methods-by-address-id | 
[**quoteShippingMethodManagementV1GetListGet**](QuoteShippingMethodManagementV1Api.md#quoteShippingMethodManagementV1GetListGet) | **GET** /V1/carts/{cartId}/shipping-methods | 
[**quoteShippingMethodManagementV1GetListGet_0**](QuoteShippingMethodManagementV1Api.md#quoteShippingMethodManagementV1GetListGet_0) | **GET** /V1/carts/mine/shipping-methods | 


# **quoteShippingMethodManagementV1EstimateByAddressIdPost**
> \Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[] quoteShippingMethodManagementV1EstimateByAddressIdPost($cart_id, $body)



Estimate shipping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\QuoteShippingMethodManagementV1Api();
$cart_id = 56; // int | The shopping cart ID.
$body = new \Swagger\Magento2Client\Model\body_46(); // \Swagger\Magento2Client\Model\Body46 | 

try {
    $result = $api_instance->quoteShippingMethodManagementV1EstimateByAddressIdPost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteShippingMethodManagementV1Api->quoteShippingMethodManagementV1EstimateByAddressIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The shopping cart ID. |
 **body** | [**\Swagger\Magento2Client\Model\Body46**](../Model/body_46.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteShippingMethodManagementV1EstimateByAddressIdPost_0**
> \Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[] quoteShippingMethodManagementV1EstimateByAddressIdPost_0($body)



Estimate shipping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\QuoteShippingMethodManagementV1Api();
$body = new \Swagger\Magento2Client\Model\body_47(); // \Swagger\Magento2Client\Model\Body47 | 

try {
    $result = $api_instance->quoteShippingMethodManagementV1EstimateByAddressIdPost_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteShippingMethodManagementV1Api->quoteShippingMethodManagementV1EstimateByAddressIdPost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Magento2Client\Model\Body47**](../Model/body_47.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteShippingMethodManagementV1GetListGet**
> \Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[] quoteShippingMethodManagementV1GetListGet($cart_id)



Lists applicable shipping methods for a specified quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\QuoteShippingMethodManagementV1Api();
$cart_id = 56; // int | The shopping cart ID.

try {
    $result = $api_instance->quoteShippingMethodManagementV1GetListGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteShippingMethodManagementV1Api->quoteShippingMethodManagementV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The shopping cart ID. |

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteShippingMethodManagementV1GetListGet_0**
> \Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[] quoteShippingMethodManagementV1GetListGet_0()



Lists applicable shipping methods for a specified quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\QuoteShippingMethodManagementV1Api();

try {
    $result = $api_instance->quoteShippingMethodManagementV1GetListGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteShippingMethodManagementV1Api->quoteShippingMethodManagementV1GetListGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

