# Swagger\Magento2Client\QuoteGuestCartTotalManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestCartTotalManagementV1CollectTotalsPut**](QuoteGuestCartTotalManagementV1Api.md#quoteGuestCartTotalManagementV1CollectTotalsPut) | **PUT** /V1/guest-carts/{cartId}/collect-totals | 


# **quoteGuestCartTotalManagementV1CollectTotalsPut**
> \Swagger\Magento2Client\Model\QuoteDataTotalsInterface quoteGuestCartTotalManagementV1CollectTotalsPut($cart_id, $body)



Set shipping/billing methods and additional data for cart and collect totals for guest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\QuoteGuestCartTotalManagementV1Api();
$cart_id = "cart_id_example"; // string | The cart ID.
$body = new \Swagger\Magento2Client\Model\body_63(); // \Swagger\Magento2Client\Model\Body63 | 

try {
    $result = $api_instance->quoteGuestCartTotalManagementV1CollectTotalsPut($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartTotalManagementV1Api->quoteGuestCartTotalManagementV1CollectTotalsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. |
 **body** | [**\Swagger\Magento2Client\Model\Body63**](../Model/body_63.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

