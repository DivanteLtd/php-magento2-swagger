# Swagger\Magento2Client\SalesRuleCouponManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesRuleCouponManagementV1DeleteByCodesPost**](SalesRuleCouponManagementV1Api.md#salesRuleCouponManagementV1DeleteByCodesPost) | **POST** /V1/coupons/deleteByCodes | 
[**salesRuleCouponManagementV1DeleteByIdsPost**](SalesRuleCouponManagementV1Api.md#salesRuleCouponManagementV1DeleteByIdsPost) | **POST** /V1/coupons/deleteByIds | 
[**salesRuleCouponManagementV1GeneratePost**](SalesRuleCouponManagementV1Api.md#salesRuleCouponManagementV1GeneratePost) | **POST** /V1/coupons/generate | 


# **salesRuleCouponManagementV1DeleteByCodesPost**
> \Swagger\Magento2Client\Model\SalesRuleDataCouponMassDeleteResultInterface salesRuleCouponManagementV1DeleteByCodesPost($body)



Delete coupon by coupon codes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\SalesRuleCouponManagementV1Api();
$body = new \Swagger\Magento2Client\Model\body_105(); // \Swagger\Magento2Client\Model\Body105 | 

try {
    $result = $api_instance->salesRuleCouponManagementV1DeleteByCodesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponManagementV1Api->salesRuleCouponManagementV1DeleteByCodesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Magento2Client\Model\Body105**](../Model/body_105.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\SalesRuleDataCouponMassDeleteResultInterface**](../Model/SalesRuleDataCouponMassDeleteResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleCouponManagementV1DeleteByIdsPost**
> \Swagger\Magento2Client\Model\SalesRuleDataCouponMassDeleteResultInterface salesRuleCouponManagementV1DeleteByIdsPost($body)



Delete coupon by coupon ids.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\SalesRuleCouponManagementV1Api();
$body = new \Swagger\Magento2Client\Model\body_104(); // \Swagger\Magento2Client\Model\Body104 | 

try {
    $result = $api_instance->salesRuleCouponManagementV1DeleteByIdsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponManagementV1Api->salesRuleCouponManagementV1DeleteByIdsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Magento2Client\Model\Body104**](../Model/body_104.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\SalesRuleDataCouponMassDeleteResultInterface**](../Model/SalesRuleDataCouponMassDeleteResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleCouponManagementV1GeneratePost**
> string[] salesRuleCouponManagementV1GeneratePost($body)



Generate coupon for a rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\SalesRuleCouponManagementV1Api();
$body = new \Swagger\Magento2Client\Model\body_103(); // \Swagger\Magento2Client\Model\Body103 | 

try {
    $result = $api_instance->salesRuleCouponManagementV1GeneratePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponManagementV1Api->salesRuleCouponManagementV1GeneratePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Magento2Client\Model\Body103**](../Model/body_103.md)|  | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

