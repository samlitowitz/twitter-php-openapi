# OpenAPIClient-php

Twitter API v2 available endpoints

For more information, please visit [https://developer.twitter.com/](https://developer.twitter.com/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/samlitowitz/twitter-php-openapi.git"
    }
  ],
  "require": {
    "samlitowitz/twitter-php-openapi": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.twitter.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BookmarksApi* | [**getUsersIdBookmarks**](docs/Api/BookmarksApi.md#getusersidbookmarks) | **GET** /2/users/{id}/bookmarks | Bookmarks by User
*BookmarksApi* | [**postUsersIdBookmarks**](docs/Api/BookmarksApi.md#postusersidbookmarks) | **POST** /2/users/{id}/bookmarks | Add Tweet to Bookmarks
*BookmarksApi* | [**usersIdBookmarksDelete**](docs/Api/BookmarksApi.md#usersidbookmarksdelete) | **DELETE** /2/users/{id}/bookmarks/{tweet_id} | Remove a bookmarked Tweet
*ComplianceApi* | [**createBatchComplianceJob**](docs/Api/ComplianceApi.md#createbatchcompliancejob) | **POST** /2/compliance/jobs | Create compliance job
*ComplianceApi* | [**getBatchComplianceJob**](docs/Api/ComplianceApi.md#getbatchcompliancejob) | **GET** /2/compliance/jobs/{id} | Get Compliance Job
*ComplianceApi* | [**listBatchComplianceJobs**](docs/Api/ComplianceApi.md#listbatchcompliancejobs) | **GET** /2/compliance/jobs | List Compliance Jobs
*GeneralApi* | [**getOpenApiSpec**](docs/Api/GeneralApi.md#getopenapispec) | **GET** /2/openapi.json | Returns the OpenAPI Specification document.
*ListsApi* | [**getUserListMemberships**](docs/Api/ListsApi.md#getuserlistmemberships) | **GET** /2/users/{id}/list_memberships | Get a User&#39;s List Memberships
*ListsApi* | [**listAddMember**](docs/Api/ListsApi.md#listaddmember) | **POST** /2/lists/{id}/members | Add a List member
*ListsApi* | [**listIdCreate**](docs/Api/ListsApi.md#listidcreate) | **POST** /2/lists | Create List
*ListsApi* | [**listIdDelete**](docs/Api/ListsApi.md#listiddelete) | **DELETE** /2/lists/{id} | Delete List
*ListsApi* | [**listIdGet**](docs/Api/ListsApi.md#listidget) | **GET** /2/lists/{id} | List lookup by List ID.
*ListsApi* | [**listIdUpdate**](docs/Api/ListsApi.md#listidupdate) | **PUT** /2/lists/{id} | Update List.
*ListsApi* | [**listRemoveMember**](docs/Api/ListsApi.md#listremovemember) | **DELETE** /2/lists/{id}/members/{user_id} | Remove a List member
*ListsApi* | [**listUserFollow**](docs/Api/ListsApi.md#listuserfollow) | **POST** /2/users/{id}/followed_lists | Follow a List
*ListsApi* | [**listUserOwnedLists**](docs/Api/ListsApi.md#listuserownedlists) | **GET** /2/users/{id}/owned_lists | Get a User&#39;s Owned Lists.
*ListsApi* | [**listUserPin**](docs/Api/ListsApi.md#listuserpin) | **POST** /2/users/{id}/pinned_lists | Pin a List
*ListsApi* | [**listUserPinnedLists**](docs/Api/ListsApi.md#listuserpinnedlists) | **GET** /2/users/{id}/pinned_lists | Get a User&#39;s Pinned Lists
*ListsApi* | [**listUserUnfollow**](docs/Api/ListsApi.md#listuserunfollow) | **DELETE** /2/users/{id}/followed_lists/{list_id} | Unfollow a List
*ListsApi* | [**listUserUnpin**](docs/Api/ListsApi.md#listuserunpin) | **DELETE** /2/users/{id}/pinned_lists/{list_id} | Unpin a List
*ListsApi* | [**userFollowedLists**](docs/Api/ListsApi.md#userfollowedlists) | **GET** /2/users/{id}/followed_lists | Get User&#39;s Followed Lists
*SpacesApi* | [**findSpaceById**](docs/Api/SpacesApi.md#findspacebyid) | **GET** /2/spaces/{id} | Space lookup by Space ID
*SpacesApi* | [**findSpacesByCreatorIds**](docs/Api/SpacesApi.md#findspacesbycreatorids) | **GET** /2/spaces/by/creator_ids | Space lookup by their creators
*SpacesApi* | [**findSpacesByIds**](docs/Api/SpacesApi.md#findspacesbyids) | **GET** /2/spaces | Space lookup up Space IDs
*SpacesApi* | [**searchSpaces**](docs/Api/SpacesApi.md#searchspaces) | **GET** /2/spaces/search | Search for Spaces
*SpacesApi* | [**spaceBuyers**](docs/Api/SpacesApi.md#spacebuyers) | **GET** /2/spaces/{id}/buyers | Retrieve the list of Users who purchased a ticket to the given space
*SpacesApi* | [**spaceTweets**](docs/Api/SpacesApi.md#spacetweets) | **GET** /2/spaces/{id}/tweets | Retrieve Tweets from a Space.
*TweetsApi* | [**addOrDeleteRules**](docs/Api/TweetsApi.md#addordeleterules) | **POST** /2/tweets/search/stream/rules | Add/Delete rules
*TweetsApi* | [**createTweet**](docs/Api/TweetsApi.md#createtweet) | **POST** /2/tweets | Creation of a Tweet
*TweetsApi* | [**deleteTweetById**](docs/Api/TweetsApi.md#deletetweetbyid) | **DELETE** /2/tweets/{id} | Tweet delete by Tweet ID
*TweetsApi* | [**findTweetById**](docs/Api/TweetsApi.md#findtweetbyid) | **GET** /2/tweets/{id} | Tweet lookup by Tweet ID
*TweetsApi* | [**findTweetsById**](docs/Api/TweetsApi.md#findtweetsbyid) | **GET** /2/tweets | Tweet lookup by Tweet IDs
*TweetsApi* | [**findTweetsThatQuoteATweet**](docs/Api/TweetsApi.md#findtweetsthatquoteatweet) | **GET** /2/tweets/{id}/quote_tweets | Retrieve Tweets that quote a Tweet.
*TweetsApi* | [**getRules**](docs/Api/TweetsApi.md#getrules) | **GET** /2/tweets/search/stream/rules | Rules lookup
*TweetsApi* | [**hideReplyById**](docs/Api/TweetsApi.md#hidereplybyid) | **PUT** /2/tweets/{tweet_id}/hidden | Hide replies
*TweetsApi* | [**listsIdTweets**](docs/Api/TweetsApi.md#listsidtweets) | **GET** /2/lists/{id}/tweets | List Tweets timeline by List ID.
*TweetsApi* | [**sampleStream**](docs/Api/TweetsApi.md#samplestream) | **GET** /2/tweets/sample/stream | Sample stream
*TweetsApi* | [**searchStream**](docs/Api/TweetsApi.md#searchstream) | **GET** /2/tweets/search/stream | Filtered stream
*TweetsApi* | [**spaceBuyers**](docs/Api/TweetsApi.md#spacebuyers) | **GET** /2/spaces/{id}/buyers | Retrieve the list of Users who purchased a ticket to the given space
*TweetsApi* | [**spaceTweets**](docs/Api/TweetsApi.md#spacetweets) | **GET** /2/spaces/{id}/tweets | Retrieve Tweets from a Space.
*TweetsApi* | [**tweetCountsFullArchiveSearch**](docs/Api/TweetsApi.md#tweetcountsfullarchivesearch) | **GET** /2/tweets/counts/all | Full archive search counts
*TweetsApi* | [**tweetCountsRecentSearch**](docs/Api/TweetsApi.md#tweetcountsrecentsearch) | **GET** /2/tweets/counts/recent | Recent search counts
*TweetsApi* | [**tweetsFullarchiveSearch**](docs/Api/TweetsApi.md#tweetsfullarchivesearch) | **GET** /2/tweets/search/all | Full-archive search
*TweetsApi* | [**tweetsRecentSearch**](docs/Api/TweetsApi.md#tweetsrecentsearch) | **GET** /2/tweets/search/recent | Recent search
*TweetsApi* | [**usersIdLike**](docs/Api/TweetsApi.md#usersidlike) | **POST** /2/users/{id}/likes | Causes the User (in the path) to like the specified Tweet
*TweetsApi* | [**usersIdLikedTweets**](docs/Api/TweetsApi.md#usersidlikedtweets) | **GET** /2/users/{id}/liked_tweets | Returns Tweet objects liked by the provided User ID
*TweetsApi* | [**usersIdMentions**](docs/Api/TweetsApi.md#usersidmentions) | **GET** /2/users/{id}/mentions | User mention timeline by User ID
*TweetsApi* | [**usersIdRetweets**](docs/Api/TweetsApi.md#usersidretweets) | **POST** /2/users/{id}/retweets | Causes the User (in the path) to retweet the specified Tweet.
*TweetsApi* | [**usersIdTimeline**](docs/Api/TweetsApi.md#usersidtimeline) | **GET** /2/users/{id}/timelines/reverse_chronological | User home timeline by User ID
*TweetsApi* | [**usersIdTweets**](docs/Api/TweetsApi.md#usersidtweets) | **GET** /2/users/{id}/tweets | User Tweets timeline by User ID
*TweetsApi* | [**usersIdUnlike**](docs/Api/TweetsApi.md#usersidunlike) | **DELETE** /2/users/{id}/likes/{tweet_id} | Causes the User (in the path) to unlike the specified Tweet
*TweetsApi* | [**usersIdUnretweets**](docs/Api/TweetsApi.md#usersidunretweets) | **DELETE** /2/users/{id}/retweets/{source_tweet_id} | Causes the User (in the path) to unretweet the specified Tweet
*UsersApi* | [**findMyUser**](docs/Api/UsersApi.md#findmyuser) | **GET** /2/users/me | User lookup me
*UsersApi* | [**findUserById**](docs/Api/UsersApi.md#finduserbyid) | **GET** /2/users/{id} | User lookup by ID
*UsersApi* | [**findUserByUsername**](docs/Api/UsersApi.md#finduserbyusername) | **GET** /2/users/by/username/{username} | User lookup by username
*UsersApi* | [**findUsersById**](docs/Api/UsersApi.md#findusersbyid) | **GET** /2/users | User lookup by IDs
*UsersApi* | [**findUsersByUsername**](docs/Api/UsersApi.md#findusersbyusername) | **GET** /2/users/by | User lookup by usernames
*UsersApi* | [**listGetFollowers**](docs/Api/UsersApi.md#listgetfollowers) | **GET** /2/lists/{id}/followers | Returns User objects that follow a List by the provided List ID
*UsersApi* | [**listGetMembers**](docs/Api/UsersApi.md#listgetmembers) | **GET** /2/lists/{id}/members | Returns User objects that are members of a List by the provided List ID.
*UsersApi* | [**tweetsIdLikingUsers**](docs/Api/UsersApi.md#tweetsidlikingusers) | **GET** /2/tweets/{id}/liking_users | Returns User objects that have liked the provided Tweet ID
*UsersApi* | [**tweetsIdRetweetingUsers**](docs/Api/UsersApi.md#tweetsidretweetingusers) | **GET** /2/tweets/{id}/retweeted_by | Returns User objects that have retweeted the provided Tweet ID
*UsersApi* | [**usersIdBlock**](docs/Api/UsersApi.md#usersidblock) | **POST** /2/users/{id}/blocking | Block User by User ID
*UsersApi* | [**usersIdBlocking**](docs/Api/UsersApi.md#usersidblocking) | **GET** /2/users/{id}/blocking | Returns User objects that are blocked by provided User ID
*UsersApi* | [**usersIdFollow**](docs/Api/UsersApi.md#usersidfollow) | **POST** /2/users/{id}/following | Follow User
*UsersApi* | [**usersIdFollowers**](docs/Api/UsersApi.md#usersidfollowers) | **GET** /2/users/{id}/followers | Returns User objects that follow a List by the provided User ID
*UsersApi* | [**usersIdFollowing**](docs/Api/UsersApi.md#usersidfollowing) | **GET** /2/users/{id}/following | Following by User ID
*UsersApi* | [**usersIdMute**](docs/Api/UsersApi.md#usersidmute) | **POST** /2/users/{id}/muting | Mute User by User ID.
*UsersApi* | [**usersIdMuting**](docs/Api/UsersApi.md#usersidmuting) | **GET** /2/users/{id}/muting | Returns User objects that are muted by the provided User ID
*UsersApi* | [**usersIdUnblock**](docs/Api/UsersApi.md#usersidunblock) | **DELETE** /2/users/{source_user_id}/blocking/{target_user_id} | Unblock User by User ID
*UsersApi* | [**usersIdUnfollow**](docs/Api/UsersApi.md#usersidunfollow) | **DELETE** /2/users/{source_user_id}/following/{target_user_id} | Unfollow User
*UsersApi* | [**usersIdUnmute**](docs/Api/UsersApi.md#usersidunmute) | **DELETE** /2/users/{source_user_id}/muting/{target_user_id} | Unmute User by User ID

## Models

- [AddOrDeleteRulesRequest](docs/Model/AddOrDeleteRulesRequest.md)
- [AddOrDeleteRulesResponse](docs/Model/AddOrDeleteRulesResponse.md)
- [AddRulesRequest](docs/Model/AddRulesRequest.md)
- [AnimatedGif](docs/Model/AnimatedGif.md)
- [AnimatedGifAllOf](docs/Model/AnimatedGifAllOf.md)
- [BlockUserMutationResponse](docs/Model/BlockUserMutationResponse.md)
- [BlockUserMutationResponseData](docs/Model/BlockUserMutationResponseData.md)
- [BlockUserRequest](docs/Model/BlockUserRequest.md)
- [BookmarkAddRequest](docs/Model/BookmarkAddRequest.md)
- [BookmarkMutationResponse](docs/Model/BookmarkMutationResponse.md)
- [BookmarkMutationResponseData](docs/Model/BookmarkMutationResponseData.md)
- [CashtagEntity](docs/Model/CashtagEntity.md)
- [CashtagFields](docs/Model/CashtagFields.md)
- [ClientDisconnectedProblem](docs/Model/ClientDisconnectedProblem.md)
- [ClientForbiddenProblem](docs/Model/ClientForbiddenProblem.md)
- [ClientForbiddenProblemAllOf](docs/Model/ClientForbiddenProblemAllOf.md)
- [ComplianceJob](docs/Model/ComplianceJob.md)
- [ComplianceJobStatus](docs/Model/ComplianceJobStatus.md)
- [ComplianceJobType](docs/Model/ComplianceJobType.md)
- [ConflictProblem](docs/Model/ConflictProblem.md)
- [ConnectionExceptionProblem](docs/Model/ConnectionExceptionProblem.md)
- [ConnectionExceptionProblemAllOf](docs/Model/ConnectionExceptionProblemAllOf.md)
- [ContextAnnotation](docs/Model/ContextAnnotation.md)
- [ContextAnnotationDomainFields](docs/Model/ContextAnnotationDomainFields.md)
- [ContextAnnotationEntityFields](docs/Model/ContextAnnotationEntityFields.md)
- [CreateComplianceJobRequest](docs/Model/CreateComplianceJobRequest.md)
- [CreateComplianceJobResponse](docs/Model/CreateComplianceJobResponse.md)
- [DeleteRulesRequest](docs/Model/DeleteRulesRequest.md)
- [DeleteRulesRequestDelete](docs/Model/DeleteRulesRequestDelete.md)
- [DisallowedResourceProblem](docs/Model/DisallowedResourceProblem.md)
- [DisallowedResourceProblemAllOf](docs/Model/DisallowedResourceProblemAllOf.md)
- [DuplicateRuleProblem](docs/Model/DuplicateRuleProblem.md)
- [DuplicateRuleProblemAllOf](docs/Model/DuplicateRuleProblemAllOf.md)
- [EntityIndicesInclusiveExclusive](docs/Model/EntityIndicesInclusiveExclusive.md)
- [EntityIndicesInclusiveInclusive](docs/Model/EntityIndicesInclusiveInclusive.md)
- [Error](docs/Model/Error.md)
- [Expansions](docs/Model/Expansions.md)
- [FieldUnauthorizedProblem](docs/Model/FieldUnauthorizedProblem.md)
- [FieldUnauthorizedProblemAllOf](docs/Model/FieldUnauthorizedProblemAllOf.md)
- [FilteredStreamingTweetResponse](docs/Model/FilteredStreamingTweetResponse.md)
- [FilteredStreamingTweetResponseMatchingRulesInner](docs/Model/FilteredStreamingTweetResponseMatchingRulesInner.md)
- [FullTextEntities](docs/Model/FullTextEntities.md)
- [FullTextEntitiesAnnotationsInner](docs/Model/FullTextEntitiesAnnotationsInner.md)
- [FullTextEntitiesAnnotationsInnerAllOf](docs/Model/FullTextEntitiesAnnotationsInnerAllOf.md)
- [GenericProblem](docs/Model/GenericProblem.md)
- [Geo](docs/Model/Geo.md)
- [Get2ComplianceJobsIdResponse](docs/Model/Get2ComplianceJobsIdResponse.md)
- [Get2ComplianceJobsResponse](docs/Model/Get2ComplianceJobsResponse.md)
- [Get2ComplianceJobsResponseMeta](docs/Model/Get2ComplianceJobsResponseMeta.md)
- [Get2ListsIdFollowersResponse](docs/Model/Get2ListsIdFollowersResponse.md)
- [Get2ListsIdFollowersResponseMeta](docs/Model/Get2ListsIdFollowersResponseMeta.md)
- [Get2ListsIdMembersResponse](docs/Model/Get2ListsIdMembersResponse.md)
- [Get2ListsIdResponse](docs/Model/Get2ListsIdResponse.md)
- [Get2ListsIdTweetsResponse](docs/Model/Get2ListsIdTweetsResponse.md)
- [Get2SpacesByCreatorIdsResponse](docs/Model/Get2SpacesByCreatorIdsResponse.md)
- [Get2SpacesIdBuyersResponse](docs/Model/Get2SpacesIdBuyersResponse.md)
- [Get2SpacesIdResponse](docs/Model/Get2SpacesIdResponse.md)
- [Get2SpacesIdTweetsResponse](docs/Model/Get2SpacesIdTweetsResponse.md)
- [Get2SpacesResponse](docs/Model/Get2SpacesResponse.md)
- [Get2SpacesSearchResponse](docs/Model/Get2SpacesSearchResponse.md)
- [Get2TweetsCountsAllResponse](docs/Model/Get2TweetsCountsAllResponse.md)
- [Get2TweetsCountsAllResponseMeta](docs/Model/Get2TweetsCountsAllResponseMeta.md)
- [Get2TweetsCountsRecentResponse](docs/Model/Get2TweetsCountsRecentResponse.md)
- [Get2TweetsIdLikingUsersResponse](docs/Model/Get2TweetsIdLikingUsersResponse.md)
- [Get2TweetsIdQuoteTweetsResponse](docs/Model/Get2TweetsIdQuoteTweetsResponse.md)
- [Get2TweetsIdQuoteTweetsResponseMeta](docs/Model/Get2TweetsIdQuoteTweetsResponseMeta.md)
- [Get2TweetsIdResponse](docs/Model/Get2TweetsIdResponse.md)
- [Get2TweetsIdRetweetedByResponse](docs/Model/Get2TweetsIdRetweetedByResponse.md)
- [Get2TweetsResponse](docs/Model/Get2TweetsResponse.md)
- [Get2TweetsSampleStreamResponse](docs/Model/Get2TweetsSampleStreamResponse.md)
- [Get2TweetsSearchAllResponse](docs/Model/Get2TweetsSearchAllResponse.md)
- [Get2TweetsSearchAllResponseMeta](docs/Model/Get2TweetsSearchAllResponseMeta.md)
- [Get2TweetsSearchRecentResponse](docs/Model/Get2TweetsSearchRecentResponse.md)
- [Get2TweetsSearchStreamResponse](docs/Model/Get2TweetsSearchStreamResponse.md)
- [Get2UsersByResponse](docs/Model/Get2UsersByResponse.md)
- [Get2UsersByUsernameUsernameResponse](docs/Model/Get2UsersByUsernameUsernameResponse.md)
- [Get2UsersIdBlockingResponse](docs/Model/Get2UsersIdBlockingResponse.md)
- [Get2UsersIdBookmarksResponse](docs/Model/Get2UsersIdBookmarksResponse.md)
- [Get2UsersIdFollowedListsResponse](docs/Model/Get2UsersIdFollowedListsResponse.md)
- [Get2UsersIdFollowersResponse](docs/Model/Get2UsersIdFollowersResponse.md)
- [Get2UsersIdFollowingResponse](docs/Model/Get2UsersIdFollowingResponse.md)
- [Get2UsersIdLikedTweetsResponse](docs/Model/Get2UsersIdLikedTweetsResponse.md)
- [Get2UsersIdListMembershipsResponse](docs/Model/Get2UsersIdListMembershipsResponse.md)
- [Get2UsersIdMentionsResponse](docs/Model/Get2UsersIdMentionsResponse.md)
- [Get2UsersIdMentionsResponseMeta](docs/Model/Get2UsersIdMentionsResponseMeta.md)
- [Get2UsersIdMutingResponse](docs/Model/Get2UsersIdMutingResponse.md)
- [Get2UsersIdOwnedListsResponse](docs/Model/Get2UsersIdOwnedListsResponse.md)
- [Get2UsersIdPinnedListsResponse](docs/Model/Get2UsersIdPinnedListsResponse.md)
- [Get2UsersIdResponse](docs/Model/Get2UsersIdResponse.md)
- [Get2UsersIdTimelinesReverseChronologicalResponse](docs/Model/Get2UsersIdTimelinesReverseChronologicalResponse.md)
- [Get2UsersIdTweetsResponse](docs/Model/Get2UsersIdTweetsResponse.md)
- [Get2UsersMeResponse](docs/Model/Get2UsersMeResponse.md)
- [Get2UsersResponse](docs/Model/Get2UsersResponse.md)
- [HashtagEntity](docs/Model/HashtagEntity.md)
- [HashtagFields](docs/Model/HashtagFields.md)
- [InvalidRequestProblem](docs/Model/InvalidRequestProblem.md)
- [InvalidRequestProblemAllOf](docs/Model/InvalidRequestProblemAllOf.md)
- [InvalidRequestProblemAllOfErrors](docs/Model/InvalidRequestProblemAllOfErrors.md)
- [InvalidRuleProblem](docs/Model/InvalidRuleProblem.md)
- [ListAddUserRequest](docs/Model/ListAddUserRequest.md)
- [ListCreateRequest](docs/Model/ListCreateRequest.md)
- [ListCreateResponse](docs/Model/ListCreateResponse.md)
- [ListCreateResponseData](docs/Model/ListCreateResponseData.md)
- [ListDeleteResponse](docs/Model/ListDeleteResponse.md)
- [ListDeleteResponseData](docs/Model/ListDeleteResponseData.md)
- [ListFollowedRequest](docs/Model/ListFollowedRequest.md)
- [ListFollowedResponse](docs/Model/ListFollowedResponse.md)
- [ListFollowedResponseData](docs/Model/ListFollowedResponseData.md)
- [ListMutateResponse](docs/Model/ListMutateResponse.md)
- [ListMutateResponseData](docs/Model/ListMutateResponseData.md)
- [ListPinnedRequest](docs/Model/ListPinnedRequest.md)
- [ListPinnedResponse](docs/Model/ListPinnedResponse.md)
- [ListPinnedResponseData](docs/Model/ListPinnedResponseData.md)
- [ListUnpinResponse](docs/Model/ListUnpinResponse.md)
- [ListUpdateRequest](docs/Model/ListUpdateRequest.md)
- [ListUpdateResponse](docs/Model/ListUpdateResponse.md)
- [ListUpdateResponseData](docs/Model/ListUpdateResponseData.md)
- [Media](docs/Model/Media.md)
- [MentionEntity](docs/Model/MentionEntity.md)
- [MentionFields](docs/Model/MentionFields.md)
- [ModelList](docs/Model/ModelList.md)
- [MuteUserMutationResponse](docs/Model/MuteUserMutationResponse.md)
- [MuteUserMutationResponseData](docs/Model/MuteUserMutationResponseData.md)
- [MuteUserRequest](docs/Model/MuteUserRequest.md)
- [NonCompliantRulesProblem](docs/Model/NonCompliantRulesProblem.md)
- [OperationalDisconnectProblem](docs/Model/OperationalDisconnectProblem.md)
- [OperationalDisconnectProblemAllOf](docs/Model/OperationalDisconnectProblemAllOf.md)
- [Photo](docs/Model/Photo.md)
- [PhotoAllOf](docs/Model/PhotoAllOf.md)
- [Place](docs/Model/Place.md)
- [PlaceType](docs/Model/PlaceType.md)
- [Point](docs/Model/Point.md)
- [Poll](docs/Model/Poll.md)
- [PollOption](docs/Model/PollOption.md)
- [Problem](docs/Model/Problem.md)
- [ProblemErrors](docs/Model/ProblemErrors.md)
- [ProblemOrError](docs/Model/ProblemOrError.md)
- [ReplySettings](docs/Model/ReplySettings.md)
- [ReportUsersRequest](docs/Model/ReportUsersRequest.md)
- [ReportUsersResponse](docs/Model/ReportUsersResponse.md)
- [ReportUsersResponseData](docs/Model/ReportUsersResponseData.md)
- [ResourceNotFoundProblem](docs/Model/ResourceNotFoundProblem.md)
- [ResourceNotFoundProblemAllOf](docs/Model/ResourceNotFoundProblemAllOf.md)
- [ResourceUnauthorizedProblem](docs/Model/ResourceUnauthorizedProblem.md)
- [ResourceUnauthorizedProblemAllOf](docs/Model/ResourceUnauthorizedProblemAllOf.md)
- [ResourceUnavailableProblem](docs/Model/ResourceUnavailableProblem.md)
- [ResourceUnavailableProblemAllOf](docs/Model/ResourceUnavailableProblemAllOf.md)
- [Rule](docs/Model/Rule.md)
- [RuleNoId](docs/Model/RuleNoId.md)
- [RulesCapProblem](docs/Model/RulesCapProblem.md)
- [RulesLookupResponse](docs/Model/RulesLookupResponse.md)
- [RulesRequestSummary](docs/Model/RulesRequestSummary.md)
- [RulesRequestSummaryOneOf](docs/Model/RulesRequestSummaryOneOf.md)
- [RulesRequestSummaryOneOf1](docs/Model/RulesRequestSummaryOneOf1.md)
- [RulesResponseMetadata](docs/Model/RulesResponseMetadata.md)
- [SearchCount](docs/Model/SearchCount.md)
- [Space](docs/Model/Space.md)
- [SpaceTopicsInner](docs/Model/SpaceTopicsInner.md)
- [StreamingTweetResponse](docs/Model/StreamingTweetResponse.md)
- [Topic](docs/Model/Topic.md)
- [Tweet](docs/Model/Tweet.md)
- [TweetAttachments](docs/Model/TweetAttachments.md)
- [TweetCreateRequest](docs/Model/TweetCreateRequest.md)
- [TweetCreateRequestGeo](docs/Model/TweetCreateRequestGeo.md)
- [TweetCreateRequestMedia](docs/Model/TweetCreateRequestMedia.md)
- [TweetCreateRequestPoll](docs/Model/TweetCreateRequestPoll.md)
- [TweetCreateRequestReply](docs/Model/TweetCreateRequestReply.md)
- [TweetCreateResponse](docs/Model/TweetCreateResponse.md)
- [TweetCreateResponseData](docs/Model/TweetCreateResponseData.md)
- [TweetDeleteResponse](docs/Model/TweetDeleteResponse.md)
- [TweetDeleteResponseData](docs/Model/TweetDeleteResponseData.md)
- [TweetGeo](docs/Model/TweetGeo.md)
- [TweetHideRequest](docs/Model/TweetHideRequest.md)
- [TweetHideResponse](docs/Model/TweetHideResponse.md)
- [TweetHideResponseData](docs/Model/TweetHideResponseData.md)
- [TweetNonPublicMetrics](docs/Model/TweetNonPublicMetrics.md)
- [TweetOrganicMetrics](docs/Model/TweetOrganicMetrics.md)
- [TweetPromotedMetrics](docs/Model/TweetPromotedMetrics.md)
- [TweetPublicMetrics](docs/Model/TweetPublicMetrics.md)
- [TweetReferencedTweetsInner](docs/Model/TweetReferencedTweetsInner.md)
- [TweetWithheld](docs/Model/TweetWithheld.md)
- [UnsupportedAuthenticationProblem](docs/Model/UnsupportedAuthenticationProblem.md)
- [UrlEntity](docs/Model/UrlEntity.md)
- [UrlFields](docs/Model/UrlFields.md)
- [UrlImage](docs/Model/UrlImage.md)
- [UsageCapExceededProblem](docs/Model/UsageCapExceededProblem.md)
- [UsageCapExceededProblemAllOf](docs/Model/UsageCapExceededProblemAllOf.md)
- [User](docs/Model/User.md)
- [UserEntities](docs/Model/UserEntities.md)
- [UserEntitiesUrl](docs/Model/UserEntitiesUrl.md)
- [UserPublicMetrics](docs/Model/UserPublicMetrics.md)
- [UserWithheld](docs/Model/UserWithheld.md)
- [UsersFollowingCreateRequest](docs/Model/UsersFollowingCreateRequest.md)
- [UsersFollowingCreateResponse](docs/Model/UsersFollowingCreateResponse.md)
- [UsersFollowingCreateResponseData](docs/Model/UsersFollowingCreateResponseData.md)
- [UsersFollowingDeleteResponse](docs/Model/UsersFollowingDeleteResponse.md)
- [UsersLikesCreateRequest](docs/Model/UsersLikesCreateRequest.md)
- [UsersLikesCreateResponse](docs/Model/UsersLikesCreateResponse.md)
- [UsersLikesCreateResponseData](docs/Model/UsersLikesCreateResponseData.md)
- [UsersLikesDeleteResponse](docs/Model/UsersLikesDeleteResponse.md)
- [UsersRetweetsCreateRequest](docs/Model/UsersRetweetsCreateRequest.md)
- [UsersRetweetsCreateResponse](docs/Model/UsersRetweetsCreateResponse.md)
- [UsersRetweetsCreateResponseData](docs/Model/UsersRetweetsCreateResponseData.md)
- [UsersRetweetsDeleteResponse](docs/Model/UsersRetweetsDeleteResponse.md)
- [Variant](docs/Model/Variant.md)
- [Video](docs/Model/Video.md)
- [VideoAllOf](docs/Model/VideoAllOf.md)
- [VideoAllOfNonPublicMetrics](docs/Model/VideoAllOfNonPublicMetrics.md)
- [VideoAllOfOrganicMetrics](docs/Model/VideoAllOfOrganicMetrics.md)
- [VideoAllOfPromotedMetrics](docs/Model/VideoAllOfPromotedMetrics.md)
- [VideoAllOfPublicMetrics](docs/Model/VideoAllOfPublicMetrics.md)

## Authorization

### BearerToken

- **Type**: Bearer authentication


### OAuth2UserToken

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://api.twitter.com/2/oauth2/authorize`
- **Scopes**: 
    - **block.read**: Accounts you’ve blocked.
    - **block.write**: Block and unblock accounts for you.
    - **bookmark.read**: Allows an app to read bookmarked Tweets
    - **bookmark.write**: Allows an app to create and delete bookmarks
    - **follows.read**: People who follow you and people who you follow.
    - **follows.write**: Follow and unfollow people for you.
    - **like.read**: Tweets you’ve liked and likes you can view.
    - **like.write**: Like and un-like Tweets for you.
    - **list.read**: Lists, list members, and list followers of lists you’ve created or are a member of, including private lists.
    - **list.write**: Create and manage Lists for you.
    - **mute.read**: Accounts you’ve muted.
    - **mute.write**: Mute and unmute accounts for you.
    - **space.read**: Access all of the Spaces you can see.
    - **tweet.moderate.write**: Hide and unhide replies to your Tweets.
    - **tweet.read**: All the Tweets you can see, including Tweets from protected accounts.
    - **tweet.write**: Tweet and retweet for you.
    - **users.read**: Any account you can see, including protected accounts. Any account you can see, including protected accounts.


### UserToken

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.45`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
