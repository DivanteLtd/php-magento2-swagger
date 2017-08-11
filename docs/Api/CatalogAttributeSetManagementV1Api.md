# Swagger\Magento2Client\CatalogAttributeSetManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogAttributeSetManagementV1CreatePost**](CatalogAttributeSetManagementV1Api.md#catalogAttributeSetManagementV1CreatePost) | **POST** /V1/products/attribute-sets | 


# **catalogAttributeSetManagementV1CreatePost**
> \Swagger\Magento2Client\Model\EavDataAttributeSetInterface catalogAttributeSetManagementV1CreatePost($body)



Create attribute set from data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\CatalogAttributeSetManagementV1Api();
$body = new \Swagger\Magento2Client\Model\body_23(); // \Swagger\Magento2Client\Model\Body23 | 

try {
    $result = $api_instance->catalogAttributeSetManagementV1CreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogAttributeSetManagementV1Api->catalogAttributeSetManagementV1CreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Magento2Client\Model\Body23**](../Model/body_23.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\EavDataAttributeSetInterface**](../Model/EavDataAttributeSetInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

