# Swagger\Magento2Client\CheckoutTotalsInformationManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutTotalsInformationManagementV1CalculatePost**](CheckoutTotalsInformationManagementV1Api.md#checkoutTotalsInformationManagementV1CalculatePost) | **POST** /V1/carts/{cartId}/totals-information | 
[**checkoutTotalsInformationManagementV1CalculatePost_0**](CheckoutTotalsInformationManagementV1Api.md#checkoutTotalsInformationManagementV1CalculatePost_0) | **POST** /V1/carts/mine/totals-information | 


# **checkoutTotalsInformationManagementV1CalculatePost**
> \Swagger\Magento2Client\Model\QuoteDataTotalsInterface checkoutTotalsInformationManagementV1CalculatePost($cart_id, $body)



Calculate quote totals based on address and shipping method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\CheckoutTotalsInformationManagementV1Api();
$cart_id = 56; // int | 
$body = new \Swagger\Magento2Client\Model\body_86(); // \Swagger\Magento2Client\Model\Body86 | 

try {
    $result = $api_instance->checkoutTotalsInformationManagementV1CalculatePost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutTotalsInformationManagementV1Api->checkoutTotalsInformationManagementV1CalculatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**|  |
 **body** | [**\Swagger\Magento2Client\Model\Body86**](../Model/body_86.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutTotalsInformationManagementV1CalculatePost_0**
> \Swagger\Magento2Client\Model\QuoteDataTotalsInterface checkoutTotalsInformationManagementV1CalculatePost_0($body)



Calculate quote totals based on address and shipping method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\CheckoutTotalsInformationManagementV1Api();
$body = new \Swagger\Magento2Client\Model\body_87(); // \Swagger\Magento2Client\Model\Body87 | 

try {
    $result = $api_instance->checkoutTotalsInformationManagementV1CalculatePost_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutTotalsInformationManagementV1Api->checkoutTotalsInformationManagementV1CalculatePost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Magento2Client\Model\Body87**](../Model/body_87.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

