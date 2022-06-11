# # TweetCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**direct_message_deep_link** | **string** | Link to take the conversation from the public timeline to a private Direct Message. | [optional]
**for_super_followers_only** | **bool** | Exclusive Tweet for super followers. | [optional] [default to false]
**geo** | [**\OpenAPI\Client\Model\TweetCreateRequestGeo**](TweetCreateRequestGeo.md) |  | [optional]
**media** | [**\OpenAPI\Client\Model\TweetCreateRequestMedia**](TweetCreateRequestMedia.md) |  | [optional]
**poll** | [**\OpenAPI\Client\Model\TweetCreateRequestPoll**](TweetCreateRequestPoll.md) |  | [optional]
**quote_tweet_id** | **string** | Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers. | [optional]
**reply** | [**\OpenAPI\Client\Model\TweetCreateRequestReply**](TweetCreateRequestReply.md) |  | [optional]
**reply_settings** | **string** | Settings to indicate who can reply to the Tweet. | [optional]
**text** | **string** | The content of the Tweet. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
