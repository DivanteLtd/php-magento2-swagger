# Swagger\Magento2Client\GiftRegistryGuestCartShippingMethodManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost**](GiftRegistryGuestCartShippingMethodManagementV1Api.md#giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost) | **POST** /V1/guest-giftregistry/{cartId}/estimate-shipping-methods | 


# **giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost**
> \Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[] giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost($cart_id, $body)



Estimate shipping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\GiftRegistryGuestCartShippingMethodManagementV1Api();
$cart_id = "cart_id_example"; // string | The shopping cart ID.
$body = new \Swagger\Magento2Client\Model\body_120(); // \Swagger\Magento2Client\Model\Body120 | 

try {
    $result = $api_instance->giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftRegistryGuestCartShippingMethodManagementV1Api->giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The shopping cart ID. |
 **body** | [**\Swagger\Magento2Client\Model\Body120**](../Model/body_120.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

