# OpenAPI\Client\SpacesApi

All URIs are relative to https://api.twitter.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**findSpaceById()**](SpacesApi.md#findSpaceById) | **GET** /2/spaces/{id} | Space lookup by Space ID
[**findSpacesByCreatorIds()**](SpacesApi.md#findSpacesByCreatorIds) | **GET** /2/spaces/by/creator_ids | Space lookup by their creators
[**findSpacesByIds()**](SpacesApi.md#findSpacesByIds) | **GET** /2/spaces | Space lookup up Space IDs
[**searchSpaces()**](SpacesApi.md#searchSpaces) | **GET** /2/spaces/search | Search for Spaces
[**spaceBuyers()**](SpacesApi.md#spaceBuyers) | **GET** /2/spaces/{id}/buyers | Retrieve the list of Users who purchased a ticket to the given space
[**spaceTweets()**](SpacesApi.md#spaceTweets) | **GET** /2/spaces/{id}/tweets | Retrieve Tweets from a Space.


## `findSpaceById()`

```php
findSpaceById($id, $space_fields, $expansions, $user_fields, $topic_fields): \OpenAPI\Client\Model\Get2SpacesIdResponse
```

Space lookup by Space ID

Returns a variety of information about the Space specified by the requested ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1YqKDqWqdPLsV; // string | The ID of the Space to be retrieved.
$space_fields = ["created_at","creator_id","ended_at","host_ids","id","invited_user_ids","is_ticketed","lang","participant_count","scheduled_start","speaker_ids","started_at","state","subscriber_count","title","topic_ids","updated_at"]; // string[] | A comma separated list of Space fields to display.
$expansions = ["creator_id","host_ids","invited_user_ids","speaker_ids","topic_ids"]; // string[] | A comma separated list of fields to expand.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$topic_fields = ["description","id","name"]; // string[] | A comma separated list of Topic fields to display.

try {
    $result = $apiInstance->findSpaceById($id, $space_fields, $expansions, $user_fields, $topic_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->findSpaceById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Space to be retrieved. |
 **space_fields** | [**string[]**](../Model/string.md)| A comma separated list of Space fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **topic_fields** | [**string[]**](../Model/string.md)| A comma separated list of Topic fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2SpacesIdResponse**](../Model/Get2SpacesIdResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findSpacesByCreatorIds()`

```php
findSpacesByCreatorIds($user_ids, $space_fields, $expansions, $user_fields, $topic_fields): \OpenAPI\Client\Model\Get2SpacesByCreatorIdsResponse
```

Space lookup by their creators

Returns a variety of information about the Spaces created by the provided User IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_ids = array('user_ids_example'); // string[] | The IDs of Users to search through.
$space_fields = ["created_at","creator_id","ended_at","host_ids","id","invited_user_ids","is_ticketed","lang","participant_count","scheduled_start","speaker_ids","started_at","state","subscriber_count","title","topic_ids","updated_at"]; // string[] | A comma separated list of Space fields to display.
$expansions = ["creator_id","host_ids","invited_user_ids","speaker_ids","topic_ids"]; // string[] | A comma separated list of fields to expand.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$topic_fields = ["description","id","name"]; // string[] | A comma separated list of Topic fields to display.

try {
    $result = $apiInstance->findSpacesByCreatorIds($user_ids, $space_fields, $expansions, $user_fields, $topic_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->findSpacesByCreatorIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_ids** | [**string[]**](../Model/string.md)| The IDs of Users to search through. |
 **space_fields** | [**string[]**](../Model/string.md)| A comma separated list of Space fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **topic_fields** | [**string[]**](../Model/string.md)| A comma separated list of Topic fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2SpacesByCreatorIdsResponse**](../Model/Get2SpacesByCreatorIdsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findSpacesByIds()`

```php
findSpacesByIds($ids, $space_fields, $expansions, $user_fields, $topic_fields): \OpenAPI\Client\Model\Get2SpacesResponse
```

Space lookup up Space IDs

Returns a variety of information about the Spaces specified by the requested IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The list of Space IDs to return.
$space_fields = ["created_at","creator_id","ended_at","host_ids","id","invited_user_ids","is_ticketed","lang","participant_count","scheduled_start","speaker_ids","started_at","state","subscriber_count","title","topic_ids","updated_at"]; // string[] | A comma separated list of Space fields to display.
$expansions = ["creator_id","host_ids","invited_user_ids","speaker_ids","topic_ids"]; // string[] | A comma separated list of fields to expand.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$topic_fields = ["description","id","name"]; // string[] | A comma separated list of Topic fields to display.

try {
    $result = $apiInstance->findSpacesByIds($ids, $space_fields, $expansions, $user_fields, $topic_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->findSpacesByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The list of Space IDs to return. |
 **space_fields** | [**string[]**](../Model/string.md)| A comma separated list of Space fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **topic_fields** | [**string[]**](../Model/string.md)| A comma separated list of Topic fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2SpacesResponse**](../Model/Get2SpacesResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchSpaces()`

```php
searchSpaces($query, $state, $max_results, $space_fields, $expansions, $user_fields, $topic_fields): \OpenAPI\Client\Model\Get2SpacesSearchResponse
```

Search for Spaces

Returns Spaces that match the provided query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = crypto; // string | The search query.
$state = 'all'; // string | The state of Spaces to search for.
$max_results = 100; // int | The number of results to return.
$space_fields = ["created_at","creator_id","ended_at","host_ids","id","invited_user_ids","is_ticketed","lang","participant_count","scheduled_start","speaker_ids","started_at","state","subscriber_count","title","topic_ids","updated_at"]; // string[] | A comma separated list of Space fields to display.
$expansions = ["creator_id","host_ids","invited_user_ids","speaker_ids","topic_ids"]; // string[] | A comma separated list of fields to expand.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$topic_fields = ["description","id","name"]; // string[] | A comma separated list of Topic fields to display.

try {
    $result = $apiInstance->searchSpaces($query, $state, $max_results, $space_fields, $expansions, $user_fields, $topic_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->searchSpaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| The search query. |
 **state** | **string**| The state of Spaces to search for. | [optional] [default to &#39;all&#39;]
 **max_results** | **int**| The number of results to return. | [optional] [default to 100]
 **space_fields** | [**string[]**](../Model/string.md)| A comma separated list of Space fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **topic_fields** | [**string[]**](../Model/string.md)| A comma separated list of Topic fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2SpacesSearchResponse**](../Model/Get2SpacesSearchResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `spaceBuyers()`

```php
spaceBuyers($id, $pagination_token, $max_results, $user_fields, $expansions, $tweet_fields): \OpenAPI\Client\Model\Get2SpacesIdBuyersResponse
```

Retrieve the list of Users who purchased a ticket to the given space

Retrieves the list of Users who purchased a ticket to the given space

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1YqKDqWqdPLsV; // string | The ID of the Space to be retrieved.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get a specified 'page' of results.
$max_results = 100; // int | The maximum number of results.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$expansions = ["pinned_tweet_id"]; // string[] | A comma separated list of fields to expand.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->spaceBuyers($id, $pagination_token, $max_results, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->spaceBuyers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Space to be retrieved. |
 **pagination_token** | **string**| This parameter is used to get a specified &#39;page&#39; of results. | [optional]
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2SpacesIdBuyersResponse**](../Model/Get2SpacesIdBuyersResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `spaceTweets()`

```php
spaceTweets($id, $max_results, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields): \OpenAPI\Client\Model\Get2SpacesIdTweetsResponse
```

Retrieve Tweets from a Space.

Retrieves Tweets shared in the specified Space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1YqKDqWqdPLsV; // string | The ID of the Space to be retrieved.
$max_results = 25; // int | The number of Tweets to fetch from the provided space. If not provided, the value will default to the maximum of 100.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.
$expansions = ["attachments.media_keys","attachments.poll_ids","author_id","entities.mentions.username","geo.place_id","in_reply_to_user_id","referenced_tweets.id","referenced_tweets.id.author_id"]; // string[] | A comma separated list of fields to expand.
$media_fields = ["alt_text","duration_ms","height","media_key","non_public_metrics","organic_metrics","preview_image_url","promoted_metrics","public_metrics","type","url","variants","width"]; // string[] | A comma separated list of Media fields to display.
$poll_fields = ["duration_minutes","end_datetime","id","options","voting_status"]; // string[] | A comma separated list of Poll fields to display.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$place_fields = ["contained_within","country","country_code","full_name","geo","id","name","place_type"]; // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->spaceTweets($id, $max_results, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->spaceTweets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Space to be retrieved. |
 **max_results** | **int**| The number of Tweets to fetch from the provided space. If not provided, the value will default to the maximum of 100. | [optional] [default to 100]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2SpacesIdTweetsResponse**](../Model/Get2SpacesIdTweetsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
