# Swagger\Magento2Client\QuoteShipmentEstimationV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteShipmentEstimationV1EstimateByExtendedAddressPost**](QuoteShipmentEstimationV1Api.md#quoteShipmentEstimationV1EstimateByExtendedAddressPost) | **POST** /V1/carts/{cartId}/estimate-shipping-methods | 
[**quoteShipmentEstimationV1EstimateByExtendedAddressPost_0**](QuoteShipmentEstimationV1Api.md#quoteShipmentEstimationV1EstimateByExtendedAddressPost_0) | **POST** /V1/carts/mine/estimate-shipping-methods | 


# **quoteShipmentEstimationV1EstimateByExtendedAddressPost**
> \Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[] quoteShipmentEstimationV1EstimateByExtendedAddressPost($cart_id, $body)



Estimate shipping by address and return list of available shipping methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\QuoteShipmentEstimationV1Api();
$cart_id = "cart_id_example"; // string | 
$body = new \Swagger\Magento2Client\Model\body_48(); // \Swagger\Magento2Client\Model\Body48 | 

try {
    $result = $api_instance->quoteShipmentEstimationV1EstimateByExtendedAddressPost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteShipmentEstimationV1Api->quoteShipmentEstimationV1EstimateByExtendedAddressPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |
 **body** | [**\Swagger\Magento2Client\Model\Body48**](../Model/body_48.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteShipmentEstimationV1EstimateByExtendedAddressPost_0**
> \Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[] quoteShipmentEstimationV1EstimateByExtendedAddressPost_0($body)



Estimate shipping by address and return list of available shipping methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\QuoteShipmentEstimationV1Api();
$body = new \Swagger\Magento2Client\Model\body_49(); // \Swagger\Magento2Client\Model\Body49 | 

try {
    $result = $api_instance->quoteShipmentEstimationV1EstimateByExtendedAddressPost_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteShipmentEstimationV1Api->quoteShipmentEstimationV1EstimateByExtendedAddressPost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Magento2Client\Model\Body49**](../Model/body_49.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

