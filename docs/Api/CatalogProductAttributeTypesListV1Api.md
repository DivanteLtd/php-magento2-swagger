# Swagger\Magento2Client\CatalogProductAttributeTypesListV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductAttributeTypesListV1GetItemsGet**](CatalogProductAttributeTypesListV1Api.md#catalogProductAttributeTypesListV1GetItemsGet) | **GET** /V1/products/attributes/types | 


# **catalogProductAttributeTypesListV1GetItemsGet**
> \Swagger\Magento2Client\Model\CatalogDataProductAttributeTypeInterface[] catalogProductAttributeTypesListV1GetItemsGet()



Retrieve list of product attribute types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\CatalogProductAttributeTypesListV1Api();

try {
    $result = $api_instance->catalogProductAttributeTypesListV1GetItemsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeTypesListV1Api->catalogProductAttributeTypesListV1GetItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Magento2Client\Model\CatalogDataProductAttributeTypeInterface[]**](../Model/CatalogDataProductAttributeTypeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

