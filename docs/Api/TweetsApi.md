# OpenAPI\Client\TweetsApi

All URIs are relative to https://api.twitter.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrDeleteRules()**](TweetsApi.md#addOrDeleteRules) | **POST** /2/tweets/search/stream/rules | Add/Delete rules
[**createTweet()**](TweetsApi.md#createTweet) | **POST** /2/tweets | Creation of a Tweet
[**deleteTweetById()**](TweetsApi.md#deleteTweetById) | **DELETE** /2/tweets/{id} | Tweet delete by Tweet ID
[**findTweetById()**](TweetsApi.md#findTweetById) | **GET** /2/tweets/{id} | Tweet lookup by Tweet ID
[**findTweetsById()**](TweetsApi.md#findTweetsById) | **GET** /2/tweets | Tweet lookup by Tweet IDs
[**findTweetsThatQuoteATweet()**](TweetsApi.md#findTweetsThatQuoteATweet) | **GET** /2/tweets/{id}/quote_tweets | Retrieve Tweets that quote a Tweet.
[**getRules()**](TweetsApi.md#getRules) | **GET** /2/tweets/search/stream/rules | Rules lookup
[**hideReplyById()**](TweetsApi.md#hideReplyById) | **PUT** /2/tweets/{tweet_id}/hidden | Hide replies
[**listsIdTweets()**](TweetsApi.md#listsIdTweets) | **GET** /2/lists/{id}/tweets | List Tweets timeline by List ID.
[**sampleStream()**](TweetsApi.md#sampleStream) | **GET** /2/tweets/sample/stream | Sample stream
[**searchStream()**](TweetsApi.md#searchStream) | **GET** /2/tweets/search/stream | Filtered stream
[**spaceBuyers()**](TweetsApi.md#spaceBuyers) | **GET** /2/spaces/{id}/buyers | Retrieve the list of Users who purchased a ticket to the given space
[**spaceTweets()**](TweetsApi.md#spaceTweets) | **GET** /2/spaces/{id}/tweets | Retrieve Tweets from a Space.
[**tweetCountsFullArchiveSearch()**](TweetsApi.md#tweetCountsFullArchiveSearch) | **GET** /2/tweets/counts/all | Full archive search counts
[**tweetCountsRecentSearch()**](TweetsApi.md#tweetCountsRecentSearch) | **GET** /2/tweets/counts/recent | Recent search counts
[**tweetsFullarchiveSearch()**](TweetsApi.md#tweetsFullarchiveSearch) | **GET** /2/tweets/search/all | Full-archive search
[**tweetsRecentSearch()**](TweetsApi.md#tweetsRecentSearch) | **GET** /2/tweets/search/recent | Recent search
[**usersIdLike()**](TweetsApi.md#usersIdLike) | **POST** /2/users/{id}/likes | Causes the User (in the path) to like the specified Tweet
[**usersIdLikedTweets()**](TweetsApi.md#usersIdLikedTweets) | **GET** /2/users/{id}/liked_tweets | Returns Tweet objects liked by the provided User ID
[**usersIdMentions()**](TweetsApi.md#usersIdMentions) | **GET** /2/users/{id}/mentions | User mention timeline by User ID
[**usersIdRetweets()**](TweetsApi.md#usersIdRetweets) | **POST** /2/users/{id}/retweets | Causes the User (in the path) to retweet the specified Tweet.
[**usersIdTimeline()**](TweetsApi.md#usersIdTimeline) | **GET** /2/users/{id}/timelines/reverse_chronological | User home timeline by User ID
[**usersIdTweets()**](TweetsApi.md#usersIdTweets) | **GET** /2/users/{id}/tweets | User Tweets timeline by User ID
[**usersIdUnlike()**](TweetsApi.md#usersIdUnlike) | **DELETE** /2/users/{id}/likes/{tweet_id} | Causes the User (in the path) to unlike the specified Tweet
[**usersIdUnretweets()**](TweetsApi.md#usersIdUnretweets) | **DELETE** /2/users/{id}/retweets/{source_tweet_id} | Causes the User (in the path) to unretweet the specified Tweet


## `addOrDeleteRules()`

```php
addOrDeleteRules($add_or_delete_rules_request, $dry_run): \OpenAPI\Client\Model\AddOrDeleteRulesResponse
```

Add/Delete rules

Add or delete rules from a User's active rule set. Users can provide unique, optionally tagged rules to add. Users can delete their entire rule set or a subset specified by rule ids or values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_or_delete_rules_request = new \OpenAPI\Client\Model\AddOrDeleteRulesRequest(); // \OpenAPI\Client\Model\AddOrDeleteRulesRequest
$dry_run = True; // bool | Dry Run can be used with both the add and delete action, with the expected result given, but without actually taking any action in the system (meaning the end state will always be as it was when the request was submitted). This is particularly useful to validate rule changes.

try {
    $result = $apiInstance->addOrDeleteRules($add_or_delete_rules_request, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->addOrDeleteRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **add_or_delete_rules_request** | [**\OpenAPI\Client\Model\AddOrDeleteRulesRequest**](../Model/AddOrDeleteRulesRequest.md)|  |
 **dry_run** | **bool**| Dry Run can be used with both the add and delete action, with the expected result given, but without actually taking any action in the system (meaning the end state will always be as it was when the request was submitted). This is particularly useful to validate rule changes. | [optional]

### Return type

[**\OpenAPI\Client\Model\AddOrDeleteRulesResponse**](../Model/AddOrDeleteRulesResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTweet()`

```php
createTweet($tweet_create_request): \OpenAPI\Client\Model\TweetCreateResponse
```

Creation of a Tweet

Causes the User to create a Tweet under the authorized account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tweet_create_request = new \OpenAPI\Client\Model\TweetCreateRequest(); // \OpenAPI\Client\Model\TweetCreateRequest

try {
    $result = $apiInstance->createTweet($tweet_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->createTweet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tweet_create_request** | [**\OpenAPI\Client\Model\TweetCreateRequest**](../Model/TweetCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TweetCreateResponse**](../Model/TweetCreateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTweetById()`

```php
deleteTweetById($id): \OpenAPI\Client\Model\TweetDeleteResponse
```

Tweet delete by Tweet ID

Delete specified Tweet (in the path) by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the Tweet to be deleted.

try {
    $result = $apiInstance->deleteTweetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->deleteTweetById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Tweet to be deleted. |

### Return type

[**\OpenAPI\Client\Model\TweetDeleteResponse**](../Model/TweetDeleteResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findTweetById()`

```php
findTweetById($id, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields): \OpenAPI\Client\Model\Get2TweetsIdResponse
```

Tweet lookup by Tweet ID

Returns a variety of information about the Tweet specified by the requested ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A single Tweet ID.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.
$expansions = ["attachments.media_keys","attachments.poll_ids","author_id","entities.mentions.username","geo.place_id","in_reply_to_user_id","referenced_tweets.id","referenced_tweets.id.author_id"]; // string[] | A comma separated list of fields to expand.
$media_fields = ["alt_text","duration_ms","height","media_key","non_public_metrics","organic_metrics","preview_image_url","promoted_metrics","public_metrics","type","url","variants","width"]; // string[] | A comma separated list of Media fields to display.
$poll_fields = ["duration_minutes","end_datetime","id","options","voting_status"]; // string[] | A comma separated list of Poll fields to display.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$place_fields = ["contained_within","country","country_code","full_name","geo","id","name","place_type"]; // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->findTweetById($id, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->findTweetById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A single Tweet ID. |
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2TweetsIdResponse**](../Model/Get2TweetsIdResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findTweetsById()`

```php
findTweetsById($ids, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields): \OpenAPI\Client\Model\Get2TweetsResponse
```

Tweet lookup by Tweet IDs

Returns a variety of information about the Tweet specified by the requested ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | A comma separated list of Tweet IDs. Up to 100 are allowed in a single request.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.
$expansions = ["attachments.media_keys","attachments.poll_ids","author_id","entities.mentions.username","geo.place_id","in_reply_to_user_id","referenced_tweets.id","referenced_tweets.id.author_id"]; // string[] | A comma separated list of fields to expand.
$media_fields = ["alt_text","duration_ms","height","media_key","non_public_metrics","organic_metrics","preview_image_url","promoted_metrics","public_metrics","type","url","variants","width"]; // string[] | A comma separated list of Media fields to display.
$poll_fields = ["duration_minutes","end_datetime","id","options","voting_status"]; // string[] | A comma separated list of Poll fields to display.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$place_fields = ["contained_within","country","country_code","full_name","geo","id","name","place_type"]; // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->findTweetsById($ids, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->findTweetsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| A comma separated list of Tweet IDs. Up to 100 are allowed in a single request. |
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2TweetsResponse**](../Model/Get2TweetsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findTweetsThatQuoteATweet()`

```php
findTweetsThatQuoteATweet($id, $max_results, $pagination_token, $exclude, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields): \OpenAPI\Client\Model\Get2TweetsIdQuoteTweetsResponse
```

Retrieve Tweets that quote a Tweet.

Returns a variety of information about each Tweet that quotes the Tweet specified by the requested ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A single Tweet ID.
$max_results = 10; // int | The maximum number of results to be returned.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get a specified 'page' of results.
$exclude = ["replies","retweets"]; // string[] | The set of entities to exclude (e.g. 'replies' or 'retweets').
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.
$expansions = ["attachments.media_keys","attachments.poll_ids","author_id","entities.mentions.username","geo.place_id","in_reply_to_user_id","referenced_tweets.id","referenced_tweets.id.author_id"]; // string[] | A comma separated list of fields to expand.
$media_fields = ["alt_text","duration_ms","height","media_key","non_public_metrics","organic_metrics","preview_image_url","promoted_metrics","public_metrics","type","url","variants","width"]; // string[] | A comma separated list of Media fields to display.
$poll_fields = ["duration_minutes","end_datetime","id","options","voting_status"]; // string[] | A comma separated list of Poll fields to display.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$place_fields = ["contained_within","country","country_code","full_name","geo","id","name","place_type"]; // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->findTweetsThatQuoteATweet($id, $max_results, $pagination_token, $exclude, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->findTweetsThatQuoteATweet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A single Tweet ID. |
 **max_results** | **int**| The maximum number of results to be returned. | [optional] [default to 10]
 **pagination_token** | **string**| This parameter is used to get a specified &#39;page&#39; of results. | [optional]
 **exclude** | [**string[]**](../Model/string.md)| The set of entities to exclude (e.g. &#39;replies&#39; or &#39;retweets&#39;). | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2TweetsIdQuoteTweetsResponse**](../Model/Get2TweetsIdQuoteTweetsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRules()`

```php
getRules($ids, $max_results, $pagination_token): \OpenAPI\Client\Model\RulesLookupResponse
```

Rules lookup

Returns rules from a User's active rule set. Users can fetch all of their rules or a subset, specified by the provided rule ids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | A comma-separated list of Rule IDs.
$max_results = 1000; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This value is populated by passing the 'next_token' returned in a request to paginate through results.

try {
    $result = $apiInstance->getRules($ids, $max_results, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->getRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| A comma-separated list of Rule IDs. | [optional]
 **max_results** | **int**| The maximum number of results. | [optional] [default to 1000]
 **pagination_token** | **string**| This value is populated by passing the &#39;next_token&#39; returned in a request to paginate through results. | [optional]

### Return type

[**\OpenAPI\Client\Model\RulesLookupResponse**](../Model/RulesLookupResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hideReplyById()`

```php
hideReplyById($tweet_id, $tweet_hide_request): \OpenAPI\Client\Model\TweetHideResponse
```

Hide replies

Hides or unhides a reply to an owned conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tweet_id = 'tweet_id_example'; // string | The ID of the reply that you want to hide or unhide.
$tweet_hide_request = new \OpenAPI\Client\Model\TweetHideRequest(); // \OpenAPI\Client\Model\TweetHideRequest

try {
    $result = $apiInstance->hideReplyById($tweet_id, $tweet_hide_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->hideReplyById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tweet_id** | **string**| The ID of the reply that you want to hide or unhide. |
 **tweet_hide_request** | [**\OpenAPI\Client\Model\TweetHideRequest**](../Model/TweetHideRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\TweetHideResponse**](../Model/TweetHideResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listsIdTweets()`

```php
listsIdTweets($id, $max_results, $pagination_token, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields): \OpenAPI\Client\Model\Get2ListsIdTweetsResponse
```

List Tweets timeline by List ID.

Returns a list of Tweets associated with the provided List ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the List.
$max_results = 100; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get the next 'page' of results.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.
$expansions = ["attachments.media_keys","attachments.poll_ids","author_id","entities.mentions.username","geo.place_id","in_reply_to_user_id","referenced_tweets.id","referenced_tweets.id.author_id"]; // string[] | A comma separated list of fields to expand.
$media_fields = ["alt_text","duration_ms","height","media_key","non_public_metrics","organic_metrics","preview_image_url","promoted_metrics","public_metrics","type","url","variants","width"]; // string[] | A comma separated list of Media fields to display.
$poll_fields = ["duration_minutes","end_datetime","id","options","voting_status"]; // string[] | A comma separated list of Poll fields to display.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$place_fields = ["contained_within","country","country_code","full_name","geo","id","name","place_type"]; // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->listsIdTweets($id, $max_results, $pagination_token, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->listsIdTweets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the List. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2ListsIdTweetsResponse**](../Model/Get2ListsIdTweetsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sampleStream()`

```php
sampleStream($backfill_minutes, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields): \OpenAPI\Client\Model\StreamingTweetResponse
```

Sample stream

Streams a deterministic 1% of public Tweets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$backfill_minutes = 56; // int | The number of minutes of backfill requested.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.
$expansions = ["attachments.media_keys","attachments.poll_ids","author_id","entities.mentions.username","geo.place_id","in_reply_to_user_id","referenced_tweets.id","referenced_tweets.id.author_id"]; // string[] | A comma separated list of fields to expand.
$media_fields = ["alt_text","duration_ms","height","media_key","non_public_metrics","organic_metrics","preview_image_url","promoted_metrics","public_metrics","type","url","variants","width"]; // string[] | A comma separated list of Media fields to display.
$poll_fields = ["duration_minutes","end_datetime","id","options","voting_status"]; // string[] | A comma separated list of Poll fields to display.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$place_fields = ["contained_within","country","country_code","full_name","geo","id","name","place_type"]; // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->sampleStream($backfill_minutes, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->sampleStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **backfill_minutes** | **int**| The number of minutes of backfill requested. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\StreamingTweetResponse**](../Model/StreamingTweetResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchStream()`

```php
searchStream($backfill_minutes, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields): \OpenAPI\Client\Model\FilteredStreamingTweetResponse
```

Filtered stream

Streams Tweets matching the stream's active rule set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$backfill_minutes = 56; // int | The number of minutes of backfill requested.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.
$expansions = ["attachments.media_keys","attachments.poll_ids","author_id","entities.mentions.username","geo.place_id","in_reply_to_user_id","referenced_tweets.id","referenced_tweets.id.author_id"]; // string[] | A comma separated list of fields to expand.
$media_fields = ["alt_text","duration_ms","height","media_key","non_public_metrics","organic_metrics","preview_image_url","promoted_metrics","public_metrics","type","url","variants","width"]; // string[] | A comma separated list of Media fields to display.
$poll_fields = ["duration_minutes","end_datetime","id","options","voting_status"]; // string[] | A comma separated list of Poll fields to display.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$place_fields = ["contained_within","country","country_code","full_name","geo","id","name","place_type"]; // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->searchStream($backfill_minutes, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->searchStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **backfill_minutes** | **int**| The number of minutes of backfill requested. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\FilteredStreamingTweetResponse**](../Model/FilteredStreamingTweetResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

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


$apiInstance = new OpenAPI\Client\Api\TweetsApi(
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
    echo 'Exception when calling TweetsApi->spaceBuyers: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\TweetsApi(
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
    echo 'Exception when calling TweetsApi->spaceTweets: ', $e->getMessage(), PHP_EOL;
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

## `tweetCountsFullArchiveSearch()`

```php
tweetCountsFullArchiveSearch($query, $start_time, $end_time, $since_id, $until_id, $next_token, $pagination_token, $granularity, $search_count_fields): \OpenAPI\Client\Model\Get2TweetsCountsAllResponse
```

Full archive search counts

Returns Tweet Counts that match a search query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = (from:TwitterDev OR from:TwitterAPI) has:media -is:retweet; // string | One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp (from most recent 7 days) from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute).
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute).
$since_id = 'since_id_example'; // string | Returns results with a Tweet ID greater than (that is, more recent than) the specified ID.
$until_id = 'until_id_example'; // string | Returns results with a Tweet ID less than (that is, older than) the specified ID.
$next_token = 'next_token_example'; // string | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$granularity = 'hour'; // string | The granularity for the search counts results.
$search_count_fields = ["end","start","tweet_count"]; // string[] | A comma separated list of SearchCount fields to display.

try {
    $result = $apiInstance->tweetCountsFullArchiveSearch($query, $start_time, $end_time, $since_id, $until_id, $next_token, $pagination_token, $granularity, $search_count_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->tweetCountsFullArchiveSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length. |
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp (from most recent 7 days) from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute). | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute). | [optional]
 **since_id** | **string**| Returns results with a Tweet ID greater than (that is, more recent than) the specified ID. | [optional]
 **until_id** | **string**| Returns results with a Tweet ID less than (that is, older than) the specified ID. | [optional]
 **next_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **pagination_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **granularity** | **string**| The granularity for the search counts results. | [optional] [default to &#39;hour&#39;]
 **search_count_fields** | [**string[]**](../Model/string.md)| A comma separated list of SearchCount fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2TweetsCountsAllResponse**](../Model/Get2TweetsCountsAllResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tweetCountsRecentSearch()`

```php
tweetCountsRecentSearch($query, $start_time, $end_time, $since_id, $until_id, $next_token, $pagination_token, $granularity, $search_count_fields): \OpenAPI\Client\Model\Get2TweetsCountsRecentResponse
```

Recent search counts

Returns Tweet Counts from the last 7 days that match a search query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = (from:TwitterDev OR from:TwitterAPI) has:media -is:retweet; // string | One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp (from most recent 7 days) from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute).
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute).
$since_id = 'since_id_example'; // string | Returns results with a Tweet ID greater than (that is, more recent than) the specified ID.
$until_id = 'until_id_example'; // string | Returns results with a Tweet ID less than (that is, older than) the specified ID.
$next_token = 'next_token_example'; // string | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$granularity = 'hour'; // string | The granularity for the search counts results.
$search_count_fields = ["end","start","tweet_count"]; // string[] | A comma separated list of SearchCount fields to display.

try {
    $result = $apiInstance->tweetCountsRecentSearch($query, $start_time, $end_time, $since_id, $until_id, $next_token, $pagination_token, $granularity, $search_count_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->tweetCountsRecentSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length. |
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp (from most recent 7 days) from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute). | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute). | [optional]
 **since_id** | **string**| Returns results with a Tweet ID greater than (that is, more recent than) the specified ID. | [optional]
 **until_id** | **string**| Returns results with a Tweet ID less than (that is, older than) the specified ID. | [optional]
 **next_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **pagination_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **granularity** | **string**| The granularity for the search counts results. | [optional] [default to &#39;hour&#39;]
 **search_count_fields** | [**string[]**](../Model/string.md)| A comma separated list of SearchCount fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2TweetsCountsRecentResponse**](../Model/Get2TweetsCountsRecentResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tweetsFullarchiveSearch()`

```php
tweetsFullarchiveSearch($query, $start_time, $end_time, $since_id, $until_id, $max_results, $next_token, $pagination_token, $sort_order, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields): \OpenAPI\Client\Model\Get2TweetsSearchAllResponse
```

Full-archive search

Returns Tweets that match a search query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = (from:TwitterDev OR from:TwitterAPI) has:media -is:retweet; // string | One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute).
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute).
$since_id = 'since_id_example'; // string | Returns results with a Tweet ID greater than (that is, more recent than) the specified ID.
$until_id = 'until_id_example'; // string | Returns results with a Tweet ID less than (that is, older than) the specified ID.
$max_results = 10; // int | The maximum number of search results to be returned by a request.
$next_token = 'next_token_example'; // string | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$sort_order = 'sort_order_example'; // string | This order in which to return results.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.
$expansions = ["attachments.media_keys","attachments.poll_ids","author_id","entities.mentions.username","geo.place_id","in_reply_to_user_id","referenced_tweets.id","referenced_tweets.id.author_id"]; // string[] | A comma separated list of fields to expand.
$media_fields = ["alt_text","duration_ms","height","media_key","non_public_metrics","organic_metrics","preview_image_url","promoted_metrics","public_metrics","type","url","variants","width"]; // string[] | A comma separated list of Media fields to display.
$poll_fields = ["duration_minutes","end_datetime","id","options","voting_status"]; // string[] | A comma separated list of Poll fields to display.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$place_fields = ["contained_within","country","country_code","full_name","geo","id","name","place_type"]; // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->tweetsFullarchiveSearch($query, $start_time, $end_time, $since_id, $until_id, $max_results, $next_token, $pagination_token, $sort_order, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->tweetsFullarchiveSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length. |
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute). | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute). | [optional]
 **since_id** | **string**| Returns results with a Tweet ID greater than (that is, more recent than) the specified ID. | [optional]
 **until_id** | **string**| Returns results with a Tweet ID less than (that is, older than) the specified ID. | [optional]
 **max_results** | **int**| The maximum number of search results to be returned by a request. | [optional] [default to 10]
 **next_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **pagination_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **sort_order** | **string**| This order in which to return results. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2TweetsSearchAllResponse**](../Model/Get2TweetsSearchAllResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tweetsRecentSearch()`

```php
tweetsRecentSearch($query, $start_time, $end_time, $since_id, $until_id, $max_results, $next_token, $pagination_token, $sort_order, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields): \OpenAPI\Client\Model\Get2TweetsSearchRecentResponse
```

Recent search

Returns Tweets from the last 7 days that match a search query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = (from:TwitterDev OR from:TwitterAPI) has:media -is:retweet; // string | One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute).
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute).
$since_id = 'since_id_example'; // string | Returns results with a Tweet ID greater than (that is, more recent than) the specified ID.
$until_id = 'until_id_example'; // string | Returns results with a Tweet ID less than (that is, older than) the specified ID.
$max_results = 10; // int | The maximum number of search results to be returned by a request.
$next_token = 'next_token_example'; // string | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$sort_order = 'sort_order_example'; // string | This order in which to return results.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.
$expansions = ["attachments.media_keys","attachments.poll_ids","author_id","entities.mentions.username","geo.place_id","in_reply_to_user_id","referenced_tweets.id","referenced_tweets.id.author_id"]; // string[] | A comma separated list of fields to expand.
$media_fields = ["alt_text","duration_ms","height","media_key","non_public_metrics","organic_metrics","preview_image_url","promoted_metrics","public_metrics","type","url","variants","width"]; // string[] | A comma separated list of Media fields to display.
$poll_fields = ["duration_minutes","end_datetime","id","options","voting_status"]; // string[] | A comma separated list of Poll fields to display.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$place_fields = ["contained_within","country","country_code","full_name","geo","id","name","place_type"]; // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->tweetsRecentSearch($query, $start_time, $end_time, $since_id, $until_id, $max_results, $next_token, $pagination_token, $sort_order, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->tweetsRecentSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length. |
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute). | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute). | [optional]
 **since_id** | **string**| Returns results with a Tweet ID greater than (that is, more recent than) the specified ID. | [optional]
 **until_id** | **string**| Returns results with a Tweet ID less than (that is, older than) the specified ID. | [optional]
 **max_results** | **int**| The maximum number of search results to be returned by a request. | [optional] [default to 10]
 **next_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **pagination_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **sort_order** | **string**| This order in which to return results. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2TweetsSearchRecentResponse**](../Model/Get2TweetsSearchRecentResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdLike()`

```php
usersIdLike($id, $users_likes_create_request): \OpenAPI\Client\Model\UsersLikesCreateResponse
```

Causes the User (in the path) to like the specified Tweet

Causes the User (in the path) to like the specified Tweet. The User in the path must match the User context authorizing the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User that is requesting to like the Tweet.
$users_likes_create_request = new \OpenAPI\Client\Model\UsersLikesCreateRequest(); // \OpenAPI\Client\Model\UsersLikesCreateRequest

try {
    $result = $apiInstance->usersIdLike($id, $users_likes_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdLike: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User that is requesting to like the Tweet. |
 **users_likes_create_request** | [**\OpenAPI\Client\Model\UsersLikesCreateRequest**](../Model/UsersLikesCreateRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UsersLikesCreateResponse**](../Model/UsersLikesCreateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdLikedTweets()`

```php
usersIdLikedTweets($id, $max_results, $pagination_token, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields): \OpenAPI\Client\Model\Get2UsersIdLikedTweetsResponse
```

Returns Tweet objects liked by the provided User ID

Returns a list of Tweets liked by the provided User ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 2244994945; // string | The ID of the User to lookup.
$max_results = 56; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get the next 'page' of results.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.
$expansions = ["attachments.media_keys","attachments.poll_ids","author_id","entities.mentions.username","geo.place_id","in_reply_to_user_id","referenced_tweets.id","referenced_tweets.id.author_id"]; // string[] | A comma separated list of fields to expand.
$media_fields = ["alt_text","duration_ms","height","media_key","non_public_metrics","organic_metrics","preview_image_url","promoted_metrics","public_metrics","type","url","variants","width"]; // string[] | A comma separated list of Media fields to display.
$poll_fields = ["duration_minutes","end_datetime","id","options","voting_status"]; // string[] | A comma separated list of Poll fields to display.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$place_fields = ["contained_within","country","country_code","full_name","geo","id","name","place_type"]; // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->usersIdLikedTweets($id, $max_results, $pagination_token, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdLikedTweets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the User to lookup. |
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersIdLikedTweetsResponse**](../Model/Get2UsersIdLikedTweetsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdMentions()`

```php
usersIdMentions($id, $since_id, $until_id, $max_results, $pagination_token, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields): \OpenAPI\Client\Model\Get2UsersIdMentionsResponse
```

User mention timeline by User ID

Returns Tweet objects that mention username associated to the provided User ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 2244994945; // string | The ID of the User to lookup.
$since_id = 'since_id_example'; // string | The minimum Tweet ID to be included in the result set. This parameter takes precedence over start_time if both are specified.
$until_id = 1346889436626259968; // string | The maximum Tweet ID to be included in the result set. This parameter takes precedence over end_time if both are specified.
$max_results = 56; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get the next 'page' of results.
$start_time = 2021-02-01T18:40:40.000Z; // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweets will be provided. The since_id parameter takes precedence if it is also specified.
$end_time = 2021-02-14T18:40:40.000Z; // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided. The until_id parameter takes precedence if it is also specified.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.
$expansions = ["attachments.media_keys","attachments.poll_ids","author_id","entities.mentions.username","geo.place_id","in_reply_to_user_id","referenced_tweets.id","referenced_tweets.id.author_id"]; // string[] | A comma separated list of fields to expand.
$media_fields = ["alt_text","duration_ms","height","media_key","non_public_metrics","organic_metrics","preview_image_url","promoted_metrics","public_metrics","type","url","variants","width"]; // string[] | A comma separated list of Media fields to display.
$poll_fields = ["duration_minutes","end_datetime","id","options","voting_status"]; // string[] | A comma separated list of Poll fields to display.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$place_fields = ["contained_within","country","country_code","full_name","geo","id","name","place_type"]; // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->usersIdMentions($id, $since_id, $until_id, $max_results, $pagination_token, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdMentions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the User to lookup. |
 **since_id** | **string**| The minimum Tweet ID to be included in the result set. This parameter takes precedence over start_time if both are specified. | [optional]
 **until_id** | **string**| The maximum Tweet ID to be included in the result set. This parameter takes precedence over end_time if both are specified. | [optional]
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. | [optional]
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweets will be provided. The since_id parameter takes precedence if it is also specified. | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided. The until_id parameter takes precedence if it is also specified. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersIdMentionsResponse**](../Model/Get2UsersIdMentionsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdRetweets()`

```php
usersIdRetweets($id, $users_retweets_create_request): \OpenAPI\Client\Model\UsersRetweetsCreateResponse
```

Causes the User (in the path) to retweet the specified Tweet.

Causes the User (in the path) to retweet the specified Tweet. The User in the path must match the User context authorizing the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User that is requesting to retweet the Tweet.
$users_retweets_create_request = new \OpenAPI\Client\Model\UsersRetweetsCreateRequest(); // \OpenAPI\Client\Model\UsersRetweetsCreateRequest

try {
    $result = $apiInstance->usersIdRetweets($id, $users_retweets_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdRetweets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User that is requesting to retweet the Tweet. |
 **users_retweets_create_request** | [**\OpenAPI\Client\Model\UsersRetweetsCreateRequest**](../Model/UsersRetweetsCreateRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UsersRetweetsCreateResponse**](../Model/UsersRetweetsCreateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdTimeline()`

```php
usersIdTimeline($id, $since_id, $until_id, $max_results, $pagination_token, $exclude, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields): \OpenAPI\Client\Model\Get2UsersIdTimelinesReverseChronologicalResponse
```

User home timeline by User ID

Returns Tweet objects that appears in the provided User ID's home timeline

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User to list Reverse Chronological Timeline Tweets of.
$since_id = 791775337160081409; // string | The minimum Tweet ID to be included in the result set. This parameter takes precedence over start_time if both are specified.
$until_id = 1346889436626259968; // string | The maximum Tweet ID to be included in the result set. This parameter takes precedence over end_time if both are specified.
$max_results = 56; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get the next 'page' of results.
$exclude = ["replies","retweets"]; // string[] | The set of entities to exclude (e.g. 'replies' or 'retweets').
$start_time = 2021-02-01T18:40:40.000Z; // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweets will be provided. The since_id parameter takes precedence if it is also specified.
$end_time = 2021-02-14T18:40:40.000Z; // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided. The until_id parameter takes precedence if it is also specified.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.
$expansions = ["attachments.media_keys","attachments.poll_ids","author_id","entities.mentions.username","geo.place_id","in_reply_to_user_id","referenced_tweets.id","referenced_tweets.id.author_id"]; // string[] | A comma separated list of fields to expand.
$media_fields = ["alt_text","duration_ms","height","media_key","non_public_metrics","organic_metrics","preview_image_url","promoted_metrics","public_metrics","type","url","variants","width"]; // string[] | A comma separated list of Media fields to display.
$poll_fields = ["duration_minutes","end_datetime","id","options","voting_status"]; // string[] | A comma separated list of Poll fields to display.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$place_fields = ["contained_within","country","country_code","full_name","geo","id","name","place_type"]; // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->usersIdTimeline($id, $since_id, $until_id, $max_results, $pagination_token, $exclude, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdTimeline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User to list Reverse Chronological Timeline Tweets of. |
 **since_id** | **string**| The minimum Tweet ID to be included in the result set. This parameter takes precedence over start_time if both are specified. | [optional]
 **until_id** | **string**| The maximum Tweet ID to be included in the result set. This parameter takes precedence over end_time if both are specified. | [optional]
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. | [optional]
 **exclude** | [**string[]**](../Model/string.md)| The set of entities to exclude (e.g. &#39;replies&#39; or &#39;retweets&#39;). | [optional]
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweets will be provided. The since_id parameter takes precedence if it is also specified. | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided. The until_id parameter takes precedence if it is also specified. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersIdTimelinesReverseChronologicalResponse**](../Model/Get2UsersIdTimelinesReverseChronologicalResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdTweets()`

```php
usersIdTweets($id, $since_id, $until_id, $max_results, $pagination_token, $exclude, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields): \OpenAPI\Client\Model\Get2UsersIdTweetsResponse
```

User Tweets timeline by User ID

Returns a list of Tweets authored by the provided User ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 2244994945; // string | The ID of the User to lookup.
$since_id = 791775337160081409; // string | The minimum Tweet ID to be included in the result set. This parameter takes precedence over start_time if both are specified.
$until_id = 1346889436626259968; // string | The maximum Tweet ID to be included in the result set. This parameter takes precedence over end_time if both are specified.
$max_results = 56; // int | The maximum number of results.
$pagination_token = 'pagination_token_example'; // string | This parameter is used to get the next 'page' of results.
$exclude = ["replies","retweets"]; // string[] | The set of entities to exclude (e.g. 'replies' or 'retweets').
$start_time = 2021-02-01T18:40:40.000Z; // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweets will be provided. The since_id parameter takes precedence if it is also specified.
$end_time = 2021-02-14T18:40:40.000Z; // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided. The until_id parameter takes precedence if it is also specified.
$tweet_fields = ["attachments","author_id","context_annotations","conversation_id","created_at","entities","geo","id","in_reply_to_user_id","lang","non_public_metrics","organic_metrics","possibly_sensitive","promoted_metrics","public_metrics","referenced_tweets","reply_settings","source","text","withheld"]; // string[] | A comma separated list of Tweet fields to display.
$expansions = ["attachments.media_keys","attachments.poll_ids","author_id","entities.mentions.username","geo.place_id","in_reply_to_user_id","referenced_tweets.id","referenced_tweets.id.author_id"]; // string[] | A comma separated list of fields to expand.
$media_fields = ["alt_text","duration_ms","height","media_key","non_public_metrics","organic_metrics","preview_image_url","promoted_metrics","public_metrics","type","url","variants","width"]; // string[] | A comma separated list of Media fields to display.
$poll_fields = ["duration_minutes","end_datetime","id","options","voting_status"]; // string[] | A comma separated list of Poll fields to display.
$user_fields = ["created_at","description","entities","id","location","name","pinned_tweet_id","profile_image_url","protected","public_metrics","url","username","verified","withheld"]; // string[] | A comma separated list of User fields to display.
$place_fields = ["contained_within","country","country_code","full_name","geo","id","name","place_type"]; // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->usersIdTweets($id, $since_id, $until_id, $max_results, $pagination_token, $exclude, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdTweets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the User to lookup. |
 **since_id** | **string**| The minimum Tweet ID to be included in the result set. This parameter takes precedence over start_time if both are specified. | [optional]
 **until_id** | **string**| The maximum Tweet ID to be included in the result set. This parameter takes precedence over end_time if both are specified. | [optional]
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | **string**| This parameter is used to get the next &#39;page&#39; of results. | [optional]
 **exclude** | [**string[]**](../Model/string.md)| The set of entities to exclude (e.g. &#39;replies&#39; or &#39;retweets&#39;). | [optional]
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweets will be provided. The since_id parameter takes precedence if it is also specified. | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided. The until_id parameter takes precedence if it is also specified. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\Get2UsersIdTweetsResponse**](../Model/Get2UsersIdTweetsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdUnlike()`

```php
usersIdUnlike($id, $tweet_id): \OpenAPI\Client\Model\UsersLikesDeleteResponse
```

Causes the User (in the path) to unlike the specified Tweet

Causes the User (in the path) to unlike the specified Tweet. The User must match the User context authorizing the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User that is requesting to unlike the Tweet.
$tweet_id = 'tweet_id_example'; // string | The ID of the Tweet that the User is requesting to unlike.

try {
    $result = $apiInstance->usersIdUnlike($id, $tweet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdUnlike: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User that is requesting to unlike the Tweet. |
 **tweet_id** | **string**| The ID of the Tweet that the User is requesting to unlike. |

### Return type

[**\OpenAPI\Client\Model\UsersLikesDeleteResponse**](../Model/UsersLikesDeleteResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdUnretweets()`

```php
usersIdUnretweets($id, $source_tweet_id): \OpenAPI\Client\Model\UsersRetweetsDeleteResponse
```

Causes the User (in the path) to unretweet the specified Tweet

Causes the User (in the path) to unretweet the specified Tweet. The User must match the User context authorizing the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new OpenAPI\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the authenticated source User that is requesting to retweet the Tweet.
$source_tweet_id = 'source_tweet_id_example'; // string | The ID of the Tweet that the User is requesting to unretweet.

try {
    $result = $apiInstance->usersIdUnretweets($id, $source_tweet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdUnretweets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the authenticated source User that is requesting to retweet the Tweet. |
 **source_tweet_id** | **string**| The ID of the Tweet that the User is requesting to unretweet. |

### Return type

[**\OpenAPI\Client\Model\UsersRetweetsDeleteResponse**](../Model/UsersRetweetsDeleteResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
