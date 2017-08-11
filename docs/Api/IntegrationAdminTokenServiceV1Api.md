# Swagger\Magento2Client\IntegrationAdminTokenServiceV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**integrationAdminTokenServiceV1CreateAdminAccessTokenPost**](IntegrationAdminTokenServiceV1Api.md#integrationAdminTokenServiceV1CreateAdminAccessTokenPost) | **POST** /V1/integration/admin/token | 


# **integrationAdminTokenServiceV1CreateAdminAccessTokenPost**
> string integrationAdminTokenServiceV1CreateAdminAccessTokenPost($body)



Create access token for admin given the admin credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\IntegrationAdminTokenServiceV1Api();
$body = new \Swagger\Magento2Client\Model\body_123(); // \Swagger\Magento2Client\Model\Body123 | 

try {
    $result = $api_instance->integrationAdminTokenServiceV1CreateAdminAccessTokenPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationAdminTokenServiceV1Api->integrationAdminTokenServiceV1CreateAdminAccessTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Magento2Client\Model\Body123**](../Model/body_123.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

