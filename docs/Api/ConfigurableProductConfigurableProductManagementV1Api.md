# Swagger\Magento2Client\ConfigurableProductConfigurableProductManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurableProductConfigurableProductManagementV1GenerateVariationPut**](ConfigurableProductConfigurableProductManagementV1Api.md#configurableProductConfigurableProductManagementV1GenerateVariationPut) | **PUT** /V1/configurable-products/variation | 


# **configurableProductConfigurableProductManagementV1GenerateVariationPut**
> \Swagger\Magento2Client\Model\CatalogDataProductInterface[] configurableProductConfigurableProductManagementV1GenerateVariationPut($body)



Generate variation based on same product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\ConfigurableProductConfigurableProductManagementV1Api();
$body = new \Swagger\Magento2Client\Model\body_110(); // \Swagger\Magento2Client\Model\Body110 | 

try {
    $result = $api_instance->configurableProductConfigurableProductManagementV1GenerateVariationPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductConfigurableProductManagementV1Api->configurableProductConfigurableProductManagementV1GenerateVariationPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Magento2Client\Model\Body110**](../Model/body_110.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\CatalogDataProductInterface[]**](../Model/CatalogDataProductInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

