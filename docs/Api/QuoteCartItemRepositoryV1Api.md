# Swagger\Magento2Client\QuoteCartItemRepositoryV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteCartItemRepositoryV1DeleteByIdDelete**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1DeleteByIdDelete) | **DELETE** /V1/carts/{cartId}/items/{itemId} | 
[**quoteCartItemRepositoryV1DeleteByIdDelete_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1DeleteByIdDelete_0) | **DELETE** /V1/carts/mine/items/{itemId} | 
[**quoteCartItemRepositoryV1GetListGet**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1GetListGet) | **GET** /V1/carts/{cartId}/items | 
[**quoteCartItemRepositoryV1GetListGet_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1GetListGet_0) | **GET** /V1/carts/mine/items | 
[**quoteCartItemRepositoryV1SavePost**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePost) | **POST** /V1/carts/{cartId}/items | 
[**quoteCartItemRepositoryV1SavePost_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePost_0) | **POST** /V1/carts/mine/items | 
[**quoteCartItemRepositoryV1SavePut**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePut) | **PUT** /V1/carts/{cartId}/items/{itemId} | 
[**quoteCartItemRepositoryV1SavePut_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePut_0) | **PUT** /V1/carts/mine/items/{itemId} | 


# **quoteCartItemRepositoryV1DeleteByIdDelete**
> bool quoteCartItemRepositoryV1DeleteByIdDelete($cart_id, $item_id)



Removes the specified item from the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\QuoteCartItemRepositoryV1Api();
$cart_id = 56; // int | The cart ID.
$item_id = 56; // int | The item ID of the item to be removed.

try {
    $result = $api_instance->quoteCartItemRepositoryV1DeleteByIdDelete($cart_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The cart ID. |
 **item_id** | **int**| The item ID of the item to be removed. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1DeleteByIdDelete_0**
> bool quoteCartItemRepositoryV1DeleteByIdDelete_0($item_id)



Removes the specified item from the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\QuoteCartItemRepositoryV1Api();
$item_id = 56; // int | The item ID of the item to be removed.

try {
    $result = $api_instance->quoteCartItemRepositoryV1DeleteByIdDelete_0($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1DeleteByIdDelete_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| The item ID of the item to be removed. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1GetListGet**
> \Swagger\Magento2Client\Model\QuoteDataCartItemInterface[] quoteCartItemRepositoryV1GetListGet($cart_id)



Lists items that are assigned to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\QuoteCartItemRepositoryV1Api();
$cart_id = 56; // int | The cart ID.

try {
    $result = $api_instance->quoteCartItemRepositoryV1GetListGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The cart ID. |

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataCartItemInterface[]**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1GetListGet_0**
> \Swagger\Magento2Client\Model\QuoteDataCartItemInterface[] quoteCartItemRepositoryV1GetListGet_0()



Lists items that are assigned to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\QuoteCartItemRepositoryV1Api();

try {
    $result = $api_instance->quoteCartItemRepositoryV1GetListGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1GetListGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataCartItemInterface[]**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePost**
> \Swagger\Magento2Client\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePost($cart_id, $body)



Adds the specified item to the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\QuoteCartItemRepositoryV1Api();
$cart_id = "cart_id_example"; // string | 
$body = new \Swagger\Magento2Client\Model\body_51(); // \Swagger\Magento2Client\Model\Body51 | 

try {
    $result = $api_instance->quoteCartItemRepositoryV1SavePost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |
 **body** | [**\Swagger\Magento2Client\Model\Body51**](../Model/body_51.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePost_0**
> \Swagger\Magento2Client\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePost_0($body)



Adds the specified item to the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\QuoteCartItemRepositoryV1Api();
$body = new \Swagger\Magento2Client\Model\body_53(); // \Swagger\Magento2Client\Model\Body53 | 

try {
    $result = $api_instance->quoteCartItemRepositoryV1SavePost_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Magento2Client\Model\Body53**](../Model/body_53.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePut**
> \Swagger\Magento2Client\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePut($cart_id, $item_id, $body)



Adds the specified item to the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\QuoteCartItemRepositoryV1Api();
$cart_id = "cart_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$body = new \Swagger\Magento2Client\Model\body_52(); // \Swagger\Magento2Client\Model\Body52 | 

try {
    $result = $api_instance->quoteCartItemRepositoryV1SavePut($cart_id, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |
 **item_id** | **string**|  |
 **body** | [**\Swagger\Magento2Client\Model\Body52**](../Model/body_52.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePut_0**
> \Swagger\Magento2Client\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePut_0($item_id, $body)



Adds the specified item to the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Magento2Client\Api\QuoteCartItemRepositoryV1Api();
$item_id = "item_id_example"; // string | 
$body = new \Swagger\Magento2Client\Model\body_54(); // \Swagger\Magento2Client\Model\Body54 | 

try {
    $result = $api_instance->quoteCartItemRepositoryV1SavePut_0($item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePut_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**|  |
 **body** | [**\Swagger\Magento2Client\Model\Body54**](../Model/body_54.md)|  | [optional]

### Return type

[**\Swagger\Magento2Client\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

