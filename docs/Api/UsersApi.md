# OpenAPI\Client\UsersApi

All URIs are relative to https://api.twitter.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**findMyUser()**](UsersApi.md#findMyUser) | **GET** /2/users/me | User lookup me
[**findUserById()**](UsersApi.md#findUserById) | **GET** /2/users/{id} | User lookup by ID
[**findUserByUsername()**](UsersApi.md#findUserByUsername) | **GET** /2/users/by/username/{username} | User lookup by username
[**findUsersById()**](UsersApi.md#findUsersById) | **GET** /2/users | User lookup by IDs
[**findUsersByUsername()**](UsersApi.md#findUsersByUsername) | **GET** /2/users/by | User lookup by usernames
[**listGetFollowers()**](UsersApi.md#listGetFollowers) | **GET** /2/lists/{id}/followers | Returns User objects that follow a List by the provided List ID
[**listGetMembers()**](UsersApi.md#listGetMembers) | **GET** /2/lists/{id}/members | Returns User objects that are members of a List by the provided List ID.
[**tweetsIdLikingUsers()**](UsersApi.md#tweetsIdLikingUsers) | **GET** /2/tweets/{id}/liking_users | Returns User objects that have liked the provided Tweet ID
[**tweetsIdRetweetingUsers()**](UsersApi.md#tweetsIdRetweetingUsers) | **GET** /2/tweets/{id}/retweeted_by | Returns User objects that have retweeted the provided Tweet ID
[**usersIdBlock()**](UsersApi.md#usersIdBlock) | **POST** /2/users/{id}/blocking | Block User by User ID
[**usersIdBlocking()**](UsersApi.md#usersIdBlocking) | **GET** /2/users/{id}/blocking | Returns User objects that are blocked by provided User ID
[**usersIdFollow()**](UsersApi.md#usersIdFollow) | **POST** /2/users/{id}/following | Follow User
[**usersIdFollowers()**](UsersApi.md#usersIdFollowers) | **GET** /2/users/{id}/followers | Returns User objects that follow a List by the provided User ID
[**usersIdFollowing()**](UsersApi.md#usersIdFollowing) | **GET** /2/users/{id}/following | Following by User ID
[**usersIdMute()**](UsersApi.md#usersIdMute) | **POST** /2/users/{id}/muting | Mute User by User ID.
[**usersIdMuting()**](UsersApi.md#usersIdMuting) | **GET** /2/users/{id}/muting | Returns User objects that are muted by the provided User ID
[**usersIdUnblock()**](UsersApi.md#usersIdUnblock) | **DELETE** /2/users/{source_user_id}/blocking/{target_user_id} | Unblock User by User ID
[**usersIdUnfollow()**](UsersApi.md#usersIdUnfollow) | **DELETE** /2/users/{source_user_id}/following/{target_user_id} | Unfollow User
[**usersIdUnmute()**](UsersApi.md#usersIdUnmute) | **DELETE** /2/users/{source_user_id}/muting/{target_user_id} | Unmute User by User ID


## `findMyUser()`

```php
findMyUser($user_fields, $expansions, $tweet_fields): \OpenAPI\Client\Model\Get2UsersMeResponse
```

User lookup me

This endpoint returns information about the requesting User.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$expansions = ["pinned_tweet_id"]; // string[] | A comma separated list of fields to expand.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->findMyUser($user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->findMyUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersMeResponse**](../Model/Get2UsersMeResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findUserById()`

```php
findUserById($id, $user_fields, $expansions, $tweet_fields): \OpenAPI\Client\Model\Get2UsersIdResponse
```

User lookup by ID

This endpoint returns information about a User. Specify User by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 2244994945; // string | The ID of the User to lookup.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$expansions = ["pinned_tweet_id"]; // string[] | A comma separated list of fields to expand.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->findUserById($id, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->findUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the User to lookup. |
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersIdResponse**](../Model/Get2UsersIdResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findUserByUsername()`

```php
findUserByUsername($username, $user_fields, $expansions, $tweet_fields): \OpenAPI\Client\Model\Get2UsersByUsernameUsernameResponse
```

User lookup by username

This endpoint returns information about a User. Specify User by username.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = TwitterDev; // string | A username.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$expansions = ["pinned_tweet_id"]; // string[] | A comma separated list of fields to expand.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->findUserByUsername($username, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->findUserByUsername: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| A username. |
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersByUsernameUsernameResponse**](../Model/Get2UsersByUsernameUsernameResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findUsersById()`

```php
findUsersById($ids, $user_fields, $expansions, $tweet_fields): \OpenAPI\Client\Model\Get2UsersResponse
```

User lookup by IDs

This endpoint returns information about Users. Specify Users by their ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = 2244994945,6253282,12; // string[] | A list of User IDs, comma-separated. You can specify up to 100 IDs.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$expansions = ["pinned_tweet_id"]; // string[] | A comma separated list of fields to expand.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->findUsersById($ids, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->findUsersById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| A list of User IDs, comma-separated. You can specify up to 100 IDs. |
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersResponse**](../Model/Get2UsersResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findUsersByUsername()`

```php
findUsersByUsername($usernames, $user_fields, $expansions, $tweet_fields): \OpenAPI\Client\Model\Get2UsersByResponse
```

User lookup by usernames

This endpoint returns information about Users. Specify Users by their username.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$usernames = TwitterDev,TwitterAPI; // string[] | A list of usernames, comma-separated.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$expansions = ["pinned_tweet_id"]; // string[] | A comma separated list of fields to expand.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->findUsersByUsername($usernames, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->findUsersByUsername: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **usernames** | [**string[]**](../Model/string.md)| A list of usernames, comma-separated. |
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersByResponse**](../Model/Get2UsersByResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGetFollowers()`

```php
listGetFollowers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields): \OpenAPI\Client\Model\Get2ListsIdFollowersResponse
```

Returns User objects that follow a List by the provided List ID

Returns a list of Users that follow a List by the provided List ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the List.
$max_results = 100; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get a specified 'page' of results.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$expansions = ["pinned_tweet_id"]; // string[] | A comma separated list of fields to expand.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->listGetFollowers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listGetFollowers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the List. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | **string**| This parameter is used to get a specified &#39;page&#39; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2ListsIdFollowersResponse**](../Model/Get2ListsIdFollowersResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGetMembers()`

```php
listGetMembers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields): \OpenAPI\Client\Model\Get2ListsIdMembersResponse
```

Returns User objects that are members of a List by the provided List ID.

Returns a list of Users that are members of a List by the provided List ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the List.
$max_results = 100; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get a specified 'page' of results.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$expansions = ["pinned_tweet_id"]; // string[] | A comma separated list of fields to expand.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->listGetMembers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listGetMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the List. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | **string**| This parameter is used to get a specified &#39;page&#39; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2ListsIdMembersResponse**](../Model/Get2ListsIdMembersResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tweetsIdLikingUsers()`

```php
tweetsIdLikingUsers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields): \OpenAPI\Client\Model\Get2TweetsIdLikingUsersResponse
```

Returns User objects that have liked the provided Tweet ID

Returns a list of Users that have liked the provided Tweet ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A single Tweet ID.
$max_results = 100; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get the next 'page' of results.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$expansions = ["pinned_tweet_id"]; // string[] | A comma separated list of fields to expand.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->tweetsIdLikingUsers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->tweetsIdLikingUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A single Tweet ID. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2TweetsIdLikingUsersResponse**](../Model/Get2TweetsIdLikingUsersResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tweetsIdRetweetingUsers()`

```php
tweetsIdRetweetingUsers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields): \OpenAPI\Client\Model\Get2TweetsIdRetweetedByResponse
```

Returns User objects that have retweeted the provided Tweet ID

Returns a list of Users that have retweeted the provided Tweet ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A single Tweet ID.
$max_results = 100; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get the next 'page' of results.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$expansions = ["pinned_tweet_id"]; // string[] | A comma separated list of fields to expand.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->tweetsIdRetweetingUsers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->tweetsIdRetweetingUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A single Tweet ID. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2TweetsIdRetweetedByResponse**](../Model/Get2TweetsIdRetweetedByResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdBlock()`

```php
usersIdBlock($id, $block_user_request): \OpenAPI\Client\Model\BlockUserMutationResponse
```

Block User by User ID

Causes the User (in the path) to block the target User. The User (in the path) must match the User context authorizing the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User that is requesting to block the target User.
$block_user_request = new \OpenAPI\Client\Model\BlockUserRequest(); // \OpenAPI\Client\Model\BlockUserRequest

try {
    $result = $apiInstance->usersIdBlock($id, $block_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdBlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User that is requesting to block the target User. |
 **block_user_request** | [**\OpenAPI\Client\Model\BlockUserRequest**](../Model/BlockUserRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\BlockUserMutationResponse**](../Model/BlockUserMutationResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdBlocking()`

```php
usersIdBlocking($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields): \OpenAPI\Client\Model\Get2UsersIdBlockingResponse
```

Returns User objects that are blocked by provided User ID

Returns a list of Users that are blocked by the provided User ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User for whom to return results.
$max_results = 56; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get a specified 'page' of results.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$expansions = ["pinned_tweet_id"]; // string[] | A comma separated list of fields to expand.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->usersIdBlocking($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdBlocking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User for whom to return results. |
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | **string**| This parameter is used to get a specified &#39;page&#39; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersIdBlockingResponse**](../Model/Get2UsersIdBlockingResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdFollow()`

```php
usersIdFollow($id, $users_following_create_request): \OpenAPI\Client\Model\UsersFollowingCreateResponse
```

Follow User

Causes the User(in the path) to follow, or “request to follow” for protected Users, the target User. The User(in the path) must match the User context authorizing the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User that is requesting to follow the target User.
$users_following_create_request = new \OpenAPI\Client\Model\UsersFollowingCreateRequest(); // \OpenAPI\Client\Model\UsersFollowingCreateRequest

try {
    $result = $apiInstance->usersIdFollow($id, $users_following_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdFollow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User that is requesting to follow the target User. |
 **users_following_create_request** | [**\OpenAPI\Client\Model\UsersFollowingCreateRequest**](../Model/UsersFollowingCreateRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UsersFollowingCreateResponse**](../Model/UsersFollowingCreateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdFollowers()`

```php
usersIdFollowers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields): \OpenAPI\Client\Model\Get2UsersIdFollowersResponse
```

Returns User objects that follow a List by the provided User ID

Returns a list of Users that follow the provided User ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 2244994945; // string | The ID of the User to lookup.
$max_results = 56; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get a specified 'page' of results.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$expansions = ["pinned_tweet_id"]; // string[] | A comma separated list of fields to expand.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->usersIdFollowers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdFollowers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the User to lookup. |
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | **string**| This parameter is used to get a specified &#39;page&#39; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersIdFollowersResponse**](../Model/Get2UsersIdFollowersResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdFollowing()`

```php
usersIdFollowing($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields): \OpenAPI\Client\Model\Get2UsersIdFollowingResponse
```

Following by User ID

Returns a list of Users that are being followed by the provided User ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 2244994945; // string | The ID of the User to lookup.
$max_results = 56; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get a specified 'page' of results.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$expansions = ["pinned_tweet_id"]; // string[] | A comma separated list of fields to expand.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->usersIdFollowing($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdFollowing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the User to lookup. |
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | **string**| This parameter is used to get a specified &#39;page&#39; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersIdFollowingResponse**](../Model/Get2UsersIdFollowingResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdMute()`

```php
usersIdMute($id, $mute_user_request): \OpenAPI\Client\Model\MuteUserMutationResponse
```

Mute User by User ID.

Causes the User (in the path) to mute the target User. The User (in the path) must match the User context authorizing the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User that is requesting to mute the target User.
$mute_user_request = new \OpenAPI\Client\Model\MuteUserRequest(); // \OpenAPI\Client\Model\MuteUserRequest

try {
    $result = $apiInstance->usersIdMute($id, $mute_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdMute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User that is requesting to mute the target User. |
 **mute_user_request** | [**\OpenAPI\Client\Model\MuteUserRequest**](../Model/MuteUserRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\MuteUserMutationResponse**](../Model/MuteUserMutationResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdMuting()`

```php
usersIdMuting($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields): \OpenAPI\Client\Model\Get2UsersIdMutingResponse
```

Returns User objects that are muted by the provided User ID

Returns a list of Users that are muted by the provided User ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User for whom to return results.
$max_results = 100; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get the next 'page' of results.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$expansions = ["pinned_tweet_id"]; // string[] | A comma separated list of fields to expand.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->usersIdMuting($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdMuting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User for whom to return results. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersIdMutingResponse**](../Model/Get2UsersIdMutingResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdUnblock()`

```php
usersIdUnblock($source_user_id, $target_user_id): \OpenAPI\Client\Model\BlockUserMutationResponse
```

Unblock User by User ID

Causes the source User to unblock the target User. The source User must match the User context authorizing the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_user_id = 'source_user_id_example'; // string | The ID of the authenticated source User that is requesting to unblock the target User.
$target_user_id = 'target_user_id_example'; // string | The ID of the User that the source User is requesting to unblock.

try {
    $result = $apiInstance->usersIdUnblock($source_user_id, $target_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdUnblock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_user_id** | **string**| The ID of the authenticated source User that is requesting to unblock the target User. |
 **target_user_id** | **string**| The ID of the User that the source User is requesting to unblock. |

### Return type

[**\OpenAPI\Client\Model\BlockUserMutationResponse**](../Model/BlockUserMutationResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdUnfollow()`

```php
usersIdUnfollow($source_user_id, $target_user_id): \OpenAPI\Client\Model\UsersFollowingDeleteResponse
```

Unfollow User

Causes the source User to unfollow the target User. The source User must match the User context authorizing the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_user_id = 'source_user_id_example'; // string | The ID of the authenticated source User that is requesting to unfollow the target User.
$target_user_id = 'target_user_id_example'; // string | The ID of the User that the source User is requesting to unfollow.

try {
    $result = $apiInstance->usersIdUnfollow($source_user_id, $target_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdUnfollow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_user_id** | **string**| The ID of the authenticated source User that is requesting to unfollow the target User. |
 **target_user_id** | **string**| The ID of the User that the source User is requesting to unfollow. |

### Return type

[**\OpenAPI\Client\Model\UsersFollowingDeleteResponse**](../Model/UsersFollowingDeleteResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdUnmute()`

```php
usersIdUnmute($source_user_id, $target_user_id): \OpenAPI\Client\Model\MuteUserMutationResponse
```

Unmute User by User ID

Causes the source User to unmute the target User. The source User must match the User context authorizing the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_user_id = 'source_user_id_example'; // string | The ID of the authenticated source User that is requesting to unmute the target User.
$target_user_id = 'target_user_id_example'; // string | The ID of the User that the source User is requesting to unmute.

try {
    $result = $apiInstance->usersIdUnmute($source_user_id, $target_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdUnmute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_user_id** | **string**| The ID of the authenticated source User that is requesting to unmute the target User. |
 **target_user_id** | **string**| The ID of the User that the source User is requesting to unmute. |

### Return type

[**\OpenAPI\Client\Model\MuteUserMutationResponse**](../Model/MuteUserMutationResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
