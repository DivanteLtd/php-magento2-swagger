# Swagger\Magento2Client\BundleProductOptionManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bundleProductOptionManagementV1SavePost**](BundleProductOptionManagementV1Api.md#bundleProductOptionManagementV1SavePost) | **POST** /V1/bundle-products/options/add | 
[**bundleProductOptionManagementV1SavePut**](BundleProductOptionManagementV1Api.md#bundleProductOptionManagementV1SavePut) | **PUT** /V1/bundle-products/options/{optionId} | 


# **bundleProductOptionManagementV1SavePost**
> int bundleProductOptionManagementV1SavePost($body)



Add new option for bundle product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\BundleProductOptionManagementV1Api();
$body = new \Swagger\Magento2Client\Model\body_127(); // \Swagger\Magento2Client\Model\Body127 | 

try {
    $result = $api_instance->bundleProductOptionManagementV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductOptionManagementV1Api->bundleProductOptionManagementV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Magento2Client\Model\Body127**](../Model/body_127.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bundleProductOptionManagementV1SavePut**
> int bundleProductOptionManagementV1SavePut($option_id, $body)



Add new option for bundle product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\BundleProductOptionManagementV1Api();
$option_id = "option_id_example"; // string | 
$body = new \Swagger\Magento2Client\Model\body_128(); // \Swagger\Magento2Client\Model\Body128 | 

try {
    $result = $api_instance->bundleProductOptionManagementV1SavePut($option_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductOptionManagementV1Api->bundleProductOptionManagementV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **option_id** | **string**|  |
 **body** | [**\Swagger\Magento2Client\Model\Body128**](../Model/body_128.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

