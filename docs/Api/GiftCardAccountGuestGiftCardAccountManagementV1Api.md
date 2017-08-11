# Swagger\Magento2Client\GiftCardAccountGuestGiftCardAccountManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost**](GiftCardAccountGuestGiftCardAccountManagementV1Api.md#giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost) | **POST** /V1/carts/guest-carts/{cartId}/giftCards | 
[**giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet**](GiftCardAccountGuestGiftCardAccountManagementV1Api.md#giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet) | **GET** /V1/carts/guest-carts/{cartId}/checkGiftCard/{giftCardCode} | 


# **giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost**
> bool giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost($cart_id, $body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\GiftCardAccountGuestGiftCardAccountManagementV1Api();
$cart_id = "cart_id_example"; // string | 
$body = new \Swagger\Magento2Client\Model\body_108(); // \Swagger\Magento2Client\Model\Body108 | 

try {
    $result = $api_instance->giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGuestGiftCardAccountManagementV1Api->giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |
 **body** | [**\Swagger\Magento2Client\Model\Body108**](../Model/body_108.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet**
> float giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet($cart_id, $gift_card_code)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\GiftCardAccountGuestGiftCardAccountManagementV1Api();
$cart_id = "cart_id_example"; // string | 
$gift_card_code = "gift_card_code_example"; // string | 

try {
    $result = $api_instance->giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet($cart_id, $gift_card_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGuestGiftCardAccountManagementV1Api->giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |
 **gift_card_code** | **string**|  |

### Return type

**float**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

