# OpenAPI\Client\ComplianceApi

All URIs are relative to https://api.twitter.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBatchComplianceJob()**](ComplianceApi.md#createBatchComplianceJob) | **POST** /2/compliance/jobs | Create compliance job
[**getBatchComplianceJob()**](ComplianceApi.md#getBatchComplianceJob) | **GET** /2/compliance/jobs/{id} | Get Compliance Job
[**listBatchComplianceJobs()**](ComplianceApi.md#listBatchComplianceJobs) | **GET** /2/compliance/jobs | List Compliance Jobs


## `createBatchComplianceJob()`

```php
createBatchComplianceJob($create_compliance_job_request): \OpenAPI\Client\Model\CreateComplianceJobResponse
```

Create compliance job

Creates a compliance for the given job type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ComplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_compliance_job_request = new \OpenAPI\Client\Model\CreateComplianceJobRequest(); // \OpenAPI\Client\Model\CreateComplianceJobRequest

try {
    $result = $apiInstance->createBatchComplianceJob($create_compliance_job_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplianceApi->createBatchComplianceJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_compliance_job_request** | [**\OpenAPI\Client\Model\CreateComplianceJobRequest**](../Model/CreateComplianceJobRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\CreateComplianceJobResponse**](../Model/CreateComplianceJobResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBatchComplianceJob()`

```php
getBatchComplianceJob($id, $compliance_job_fields): \OpenAPI\Client\Model\Get2ComplianceJobsIdResponse
```

Get Compliance Job

Returns a single Compliance Job by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ComplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the Compliance Job to retrieve.
$compliance_job_fields = ["created_at","download_expires_at","download_url","id","name","resumable","status","type","upload_expires_at","upload_url"]; // string[] | A comma separated list of ComplianceJob fields to display.

try {
    $result = $apiInstance->getBatchComplianceJob($id, $compliance_job_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplianceApi->getBatchComplianceJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Compliance Job to retrieve. |
 **compliance_job_fields** | [**string[]**](../Model/string.md)| A comma separated list of ComplianceJob fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2ComplianceJobsIdResponse**](../Model/Get2ComplianceJobsIdResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBatchComplianceJobs()`

```php
listBatchComplianceJobs($type, $status, $compliance_job_fields): \OpenAPI\Client\Model\Get2ComplianceJobsResponse
```

List Compliance Jobs

Returns recent Compliance Jobs for a given job type and optional job status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ComplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Type of Compliance Job to list.
$status = 'status_example'; // string | Status of Compliance Job to list.
$compliance_job_fields = ["created_at","download_expires_at","download_url","id","name","resumable","status","type","upload_expires_at","upload_url"]; // string[] | A comma separated list of ComplianceJob fields to display.

try {
    $result = $apiInstance->listBatchComplianceJobs($type, $status, $compliance_job_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplianceApi->listBatchComplianceJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Type of Compliance Job to list. |
 **status** | **string**| Status of Compliance Job to list. | [optional]
 **compliance_job_fields** | [**string[]**](../Model/string.md)| A comma separated list of ComplianceJob fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2ComplianceJobsResponse**](../Model/Get2ComplianceJobsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
