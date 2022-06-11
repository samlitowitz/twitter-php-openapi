# OpenAPI\Client\BookmarksApi

All URIs are relative to https://api.twitter.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUsersIdBookmarks()**](BookmarksApi.md#getUsersIdBookmarks) | **GET** /2/users/{id}/bookmarks | Bookmarks by User
[**postUsersIdBookmarks()**](BookmarksApi.md#postUsersIdBookmarks) | **POST** /2/users/{id}/bookmarks | Add Tweet to Bookmarks
[**usersIdBookmarksDelete()**](BookmarksApi.md#usersIdBookmarksDelete) | **DELETE** /2/users/{id}/bookmarks/{tweet_id} | Remove a bookmarked Tweet


## `getUsersIdBookmarks()`

```php
getUsersIdBookmarks($id, $max_results, $pagination_token, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields): \OpenAPI\Client\Model\Get2UsersIdBookmarksResponse
```

Bookmarks by User

Returns Tweet objects that have been bookmarked by the requesting User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BookmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User for whom to return results.
$max_results = 56; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get the next 'page' of results.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.
$expansions = ["attachments.media_keys","attachments.poll_ids","author_id","entities.mentions.username","geo.place_id","in_reply_to_user_id","referenced_tweets.id","referenced_tweets.id.author_id"]; // string[] | A comma separated list of fields to expand.
$media_fields = ["alt_text","duration_ms","height","media_key","non_public_metrics","organic_metrics","preview_image_url","promoted_metrics","public_metrics","type","url","variants","width"]; // string[] | A comma separated list of Media fields to display.
$poll_fields = ["duration_minutes","end_datetime","id","options","voting_status"]; // string[] | A comma separated list of Poll fields to display.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$place_fields = ["contained_within","country","country_code","full_name","geo","id","name","place_type"]; // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->getUsersIdBookmarks($id, $max_results, $pagination_token, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->getUsersIdBookmarks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User for whom to return results. |
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersIdBookmarksResponse**](../Model/Get2UsersIdBookmarksResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersIdBookmarks()`

```php
postUsersIdBookmarks($id, $bookmark_add_request): \OpenAPI\Client\Model\BookmarkMutationResponse
```

Add Tweet to Bookmarks

Adds a Tweet (ID in the body) to the requesting User's (in the path) bookmarks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BookmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User for whom to add bookmarks.
$bookmark_add_request = new \OpenAPI\Client\Model\BookmarkAddRequest(); // \OpenAPI\Client\Model\BookmarkAddRequest

try {
    $result = $apiInstance->postUsersIdBookmarks($id, $bookmark_add_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->postUsersIdBookmarks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User for whom to add bookmarks. |
 **bookmark_add_request** | [**\OpenAPI\Client\Model\BookmarkAddRequest**](../Model/BookmarkAddRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\BookmarkMutationResponse**](../Model/BookmarkMutationResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdBookmarksDelete()`

```php
usersIdBookmarksDelete($id, $tweet_id): \OpenAPI\Client\Model\BookmarkMutationResponse
```

Remove a bookmarked Tweet

Removes a Tweet from the requesting User's bookmarked Tweets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BookmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User whose bookmark is to be removed.
$tweet_id = 'tweet_id_example'; // string | The ID of the Tweet that the source User is removing from bookmarks.

try {
    $result = $apiInstance->usersIdBookmarksDelete($id, $tweet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->usersIdBookmarksDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User whose bookmark is to be removed. |
 **tweet_id** | **string**| The ID of the Tweet that the source User is removing from bookmarks. |

### Return type

[**\OpenAPI\Client\Model\BookmarkMutationResponse**](../Model/BookmarkMutationResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
