# OpenAPI\Client\GeneralApi

All URIs are relative to https://api.twitter.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOpenApiSpec()**](GeneralApi.md#getOpenApiSpec) | **GET** /2/openapi.json | Returns the OpenAPI Specification document.


## `getOpenApiSpec()`

```php
getOpenApiSpec(): object
```

Returns the OpenAPI Specification document.

Full OpenAPI Specification in JSON format. (See https://github.com/OAI/OpenAPI-Specification/blob/master/README.md)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getOpenApiSpec();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getOpenApiSpec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
