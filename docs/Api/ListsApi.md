# OpenAPI\Client\ListsApi

All URIs are relative to https://api.twitter.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserListMemberships()**](ListsApi.md#getUserListMemberships) | **GET** /2/users/{id}/list_memberships | Get a User&#39;s List Memberships
[**listAddMember()**](ListsApi.md#listAddMember) | **POST** /2/lists/{id}/members | Add a List member
[**listIdCreate()**](ListsApi.md#listIdCreate) | **POST** /2/lists | Create List
[**listIdDelete()**](ListsApi.md#listIdDelete) | **DELETE** /2/lists/{id} | Delete List
[**listIdGet()**](ListsApi.md#listIdGet) | **GET** /2/lists/{id} | List lookup by List ID.
[**listIdUpdate()**](ListsApi.md#listIdUpdate) | **PUT** /2/lists/{id} | Update List.
[**listRemoveMember()**](ListsApi.md#listRemoveMember) | **DELETE** /2/lists/{id}/members/{user_id} | Remove a List member
[**listUserFollow()**](ListsApi.md#listUserFollow) | **POST** /2/users/{id}/followed_lists | Follow a List
[**listUserOwnedLists()**](ListsApi.md#listUserOwnedLists) | **GET** /2/users/{id}/owned_lists | Get a User&#39;s Owned Lists.
[**listUserPin()**](ListsApi.md#listUserPin) | **POST** /2/users/{id}/pinned_lists | Pin a List
[**listUserPinnedLists()**](ListsApi.md#listUserPinnedLists) | **GET** /2/users/{id}/pinned_lists | Get a User&#39;s Pinned Lists
[**listUserUnfollow()**](ListsApi.md#listUserUnfollow) | **DELETE** /2/users/{id}/followed_lists/{list_id} | Unfollow a List
[**listUserUnpin()**](ListsApi.md#listUserUnpin) | **DELETE** /2/users/{id}/pinned_lists/{list_id} | Unpin a List
[**userFollowedLists()**](ListsApi.md#userFollowedLists) | **GET** /2/users/{id}/followed_lists | Get User&#39;s Followed Lists


## `getUserListMemberships()`

```php
getUserListMemberships($id, $max_results, $pagination_token, $list_fields, $expansions, $user_fields): \OpenAPI\Client\Model\Get2UsersIdListMembershipsResponse
```

Get a User's List Memberships

Get a User's List Memberships.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 2244994945; // string | The ID of the User to lookup.
$max_results = 100; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get a specified 'page' of results.
$list_fields = ["created_at","description","follower_count","id","member_count","name","owner_id","private"]; // string[] | A comma separated list of List fields to display.
$expansions = ["owner_id"]; // string[] | A comma separated list of fields to expand.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.

try {
    $result = $apiInstance->getUserListMemberships($id, $max_results, $pagination_token, $list_fields, $expansions, $user_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->getUserListMemberships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the User to lookup. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | **string**| This parameter is used to get a specified &#39;page&#39; of results. | [optional]
 **list_fields** | [**string[]**](../Model/string.md)| A comma separated list of List fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersIdListMembershipsResponse**](../Model/Get2UsersIdListMembershipsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAddMember()`

```php
listAddMember($id, $list_add_user_request): \OpenAPI\Client\Model\ListMutateResponse
```

Add a List member

Causes a User to become a member of a List.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the List for which to add a member.
$list_add_user_request = new \OpenAPI\Client\Model\ListAddUserRequest(); // \OpenAPI\Client\Model\ListAddUserRequest

try {
    $result = $apiInstance->listAddMember($id, $list_add_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listAddMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the List for which to add a member. |
 **list_add_user_request** | [**\OpenAPI\Client\Model\ListAddUserRequest**](../Model/ListAddUserRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ListMutateResponse**](../Model/ListMutateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIdCreate()`

```php
listIdCreate($list_create_request): \OpenAPI\Client\Model\ListCreateResponse
```

Create List

Creates a new List.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_create_request = new \OpenAPI\Client\Model\ListCreateRequest(); // \OpenAPI\Client\Model\ListCreateRequest

try {
    $result = $apiInstance->listIdCreate($list_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listIdCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_create_request** | [**\OpenAPI\Client\Model\ListCreateRequest**](../Model/ListCreateRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ListCreateResponse**](../Model/ListCreateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIdDelete()`

```php
listIdDelete($id): \OpenAPI\Client\Model\ListDeleteResponse
```

Delete List

Delete a List that you own.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the List to delete.

try {
    $result = $apiInstance->listIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the List to delete. |

### Return type

[**\OpenAPI\Client\Model\ListDeleteResponse**](../Model/ListDeleteResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIdGet()`

```php
listIdGet($id, $list_fields, $expansions, $user_fields): \OpenAPI\Client\Model\Get2ListsIdResponse
```

List lookup by List ID.

Returns a List.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the List.
$list_fields = ["created_at","description","follower_count","id","member_count","name","owner_id","private"]; // string[] | A comma separated list of List fields to display.
$expansions = ["owner_id"]; // string[] | A comma separated list of fields to expand.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.

try {
    $result = $apiInstance->listIdGet($id, $list_fields, $expansions, $user_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the List. |
 **list_fields** | [**string[]**](../Model/string.md)| A comma separated list of List fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2ListsIdResponse**](../Model/Get2ListsIdResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIdUpdate()`

```php
listIdUpdate($id, $list_update_request): \OpenAPI\Client\Model\ListUpdateResponse
```

Update List.

Update a List that you own.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the List to modify.
$list_update_request = new \OpenAPI\Client\Model\ListUpdateRequest(); // \OpenAPI\Client\Model\ListUpdateRequest

try {
    $result = $apiInstance->listIdUpdate($id, $list_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listIdUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the List to modify. |
 **list_update_request** | [**\OpenAPI\Client\Model\ListUpdateRequest**](../Model/ListUpdateRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ListUpdateResponse**](../Model/ListUpdateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRemoveMember()`

```php
listRemoveMember($id, $user_id): \OpenAPI\Client\Model\ListMutateResponse
```

Remove a List member

Causes a User to be removed from the members of a List.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the List to remove a member.
$user_id = 'user_id_example'; // string | The ID of User that will be removed from the List.

try {
    $result = $apiInstance->listRemoveMember($id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listRemoveMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the List to remove a member. |
 **user_id** | **string**| The ID of User that will be removed from the List. |

### Return type

[**\OpenAPI\Client\Model\ListMutateResponse**](../Model/ListMutateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserFollow()`

```php
listUserFollow($id, $list_followed_request): \OpenAPI\Client\Model\ListFollowedResponse
```

Follow a List

Causes a User to follow a List.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User that will follow the List.
$list_followed_request = new \OpenAPI\Client\Model\ListFollowedRequest(); // \OpenAPI\Client\Model\ListFollowedRequest

try {
    $result = $apiInstance->listUserFollow($id, $list_followed_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listUserFollow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User that will follow the List. |
 **list_followed_request** | [**\OpenAPI\Client\Model\ListFollowedRequest**](../Model/ListFollowedRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ListFollowedResponse**](../Model/ListFollowedResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserOwnedLists()`

```php
listUserOwnedLists($id, $max_results, $pagination_token, $list_fields, $expansions, $user_fields): \OpenAPI\Client\Model\Get2UsersIdOwnedListsResponse
```

Get a User's Owned Lists.

Get a User's Owned Lists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 2244994945; // string | The ID of the User to lookup.
$max_results = 100; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get a specified 'page' of results.
$list_fields = ["created_at","description","follower_count","id","member_count","name","owner_id","private"]; // string[] | A comma separated list of List fields to display.
$expansions = ["owner_id"]; // string[] | A comma separated list of fields to expand.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.

try {
    $result = $apiInstance->listUserOwnedLists($id, $max_results, $pagination_token, $list_fields, $expansions, $user_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listUserOwnedLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the User to lookup. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | **string**| This parameter is used to get a specified &#39;page&#39; of results. | [optional]
 **list_fields** | [**string[]**](../Model/string.md)| A comma separated list of List fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersIdOwnedListsResponse**](../Model/Get2UsersIdOwnedListsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserPin()`

```php
listUserPin($id, $list_pinned_request): \OpenAPI\Client\Model\ListPinnedResponse
```

Pin a List

Causes a User to pin a List.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User that will pin the List.
$list_pinned_request = new \OpenAPI\Client\Model\ListPinnedRequest(); // \OpenAPI\Client\Model\ListPinnedRequest

try {
    $result = $apiInstance->listUserPin($id, $list_pinned_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listUserPin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User that will pin the List. |
 **list_pinned_request** | [**\OpenAPI\Client\Model\ListPinnedRequest**](../Model/ListPinnedRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ListPinnedResponse**](../Model/ListPinnedResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserPinnedLists()`

```php
listUserPinnedLists($id, $list_fields, $expansions, $user_fields): \OpenAPI\Client\Model\Get2UsersIdPinnedListsResponse
```

Get a User's Pinned Lists

Get a User's Pinned Lists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User for whom to return results.
$list_fields = ["created_at","description","follower_count","id","member_count","name","owner_id","private"]; // string[] | A comma separated list of List fields to display.
$expansions = ["owner_id"]; // string[] | A comma separated list of fields to expand.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.

try {
    $result = $apiInstance->listUserPinnedLists($id, $list_fields, $expansions, $user_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listUserPinnedLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User for whom to return results. |
 **list_fields** | [**string[]**](../Model/string.md)| A comma separated list of List fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersIdPinnedListsResponse**](../Model/Get2UsersIdPinnedListsResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserUnfollow()`

```php
listUserUnfollow($id, $list_id): \OpenAPI\Client\Model\ListFollowedResponse
```

Unfollow a List

Causes a User to unfollow a List.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User that will unfollow the List.
$list_id = 'list_id_example'; // string | The ID of the List to unfollow.

try {
    $result = $apiInstance->listUserUnfollow($id, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listUserUnfollow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User that will unfollow the List. |
 **list_id** | **string**| The ID of the List to unfollow. |

### Return type

[**\OpenAPI\Client\Model\ListFollowedResponse**](../Model/ListFollowedResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserUnpin()`

```php
listUserUnpin($id, $list_id): \OpenAPI\Client\Model\ListUnpinResponse
```

Unpin a List

Causes a User to remove a pinned List.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User for whom to return results.
$list_id = 'list_id_example'; // string | The ID of the List to unpin.

try {
    $result = $apiInstance->listUserUnpin($id, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listUserUnpin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User for whom to return results. |
 **list_id** | **string**| The ID of the List to unpin. |

### Return type

[**\OpenAPI\Client\Model\ListUnpinResponse**](../Model/ListUnpinResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userFollowedLists()`

```php
userFollowedLists($id, $max_results, $pagination_token, $list_fields, $expansions, $user_fields): \OpenAPI\Client\Model\Get2UsersIdFollowedListsResponse
```

Get User's Followed Lists

Returns a User's followed Lists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 2244994945; // string | The ID of the User to lookup.
$max_results = 100; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get a specified 'page' of results.
$list_fields = ["created_at","description","follower_count","id","member_count","name","owner_id","private"]; // string[] | A comma separated list of List fields to display.
$expansions = ["owner_id"]; // string[] | A comma separated list of fields to expand.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.

try {
    $result = $apiInstance->userFollowedLists($id, $max_results, $pagination_token, $list_fields, $expansions, $user_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->userFollowedLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the User to lookup. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | **string**| This parameter is used to get a specified &#39;page&#39; of results. | [optional]
 **list_fields** | [**string[]**](../Model/string.md)| A comma separated list of List fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersIdFollowedListsResponse**](../Model/Get2UsersIdFollowedListsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
