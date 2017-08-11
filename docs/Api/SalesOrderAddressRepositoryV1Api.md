# Swagger\Magento2Client\SalesOrderAddressRepositoryV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOrderAddressRepositoryV1SavePut**](SalesOrderAddressRepositoryV1Api.md#salesOrderAddressRepositoryV1SavePut) | **PUT** /V1/orders/{parent_id} | 


# **salesOrderAddressRepositoryV1SavePut**
> \Swagger\Magento2Client\Model\SalesDataOrderAddressInterface salesOrderAddressRepositoryV1SavePut($parent_id, $body)



Performs persist operations for a specified order address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\SalesOrderAddressRepositoryV1Api();
$parent_id = "parent_id_example"; // string | 
$body = new \Swagger\Magento2Client\Model\body_66(); // \Swagger\Magento2Client\Model\Body66 | 

try {
    $result = $api_instance->salesOrderAddressRepositoryV1SavePut($parent_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderAddressRepositoryV1Api->salesOrderAddressRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**|  |
 **body** | [**\Swagger\Magento2Client\Model\Body66**](../Model/body_66.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\SalesDataOrderAddressInterface**](../Model/SalesDataOrderAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

