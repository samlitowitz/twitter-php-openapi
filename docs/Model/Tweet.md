# # Tweet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attachments** | [**\OpenAPI\Client\Model\TweetAttachments**](TweetAttachments.md) |  | [optional]
**author_id** | **string** | Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers. | [optional]
**context_annotations** | [**\OpenAPI\Client\Model\ContextAnnotation[]**](ContextAnnotation.md) |  | [optional]
**conversation_id** | **string** | Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers. | [optional]
**created_at** | **\DateTime** | Creation time of the Tweet. | [optional]
**entities** | [**\OpenAPI\Client\Model\FullTextEntities**](FullTextEntities.md) |  | [optional]
**geo** | [**\OpenAPI\Client\Model\TweetGeo**](TweetGeo.md) |  | [optional]
**id** | **string** | Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers. |
**in_reply_to_user_id** | **string** | Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers. | [optional]
**lang** | **string** | Language of the Tweet, if detected by Twitter. Returned as a BCP47 language tag. | [optional]
**non_public_metrics** | [**\OpenAPI\Client\Model\TweetNonPublicMetrics**](TweetNonPublicMetrics.md) |  | [optional]
**organic_metrics** | [**\OpenAPI\Client\Model\TweetOrganicMetrics**](TweetOrganicMetrics.md) |  | [optional]
**possibly_sensitive** | **bool** | Indicates if this Tweet contains URLs marked as sensitive, for example content suitable for mature audiences. | [optional]
**promoted_metrics** | [**\OpenAPI\Client\Model\TweetPromotedMetrics**](TweetPromotedMetrics.md) |  | [optional]
**public_metrics** | [**\OpenAPI\Client\Model\TweetPublicMetrics**](TweetPublicMetrics.md) |  | [optional]
**referenced_tweets** | [**\OpenAPI\Client\Model\TweetReferencedTweetsInner[]**](TweetReferencedTweetsInner.md) | A list of Tweets this Tweet refers to. For example, if the parent Tweet is a Retweet, a Quoted Tweet or a Reply, it will include the related Tweet referenced to by its parent. | [optional]
**reply_settings** | [**\OpenAPI\Client\Model\ReplySettings**](ReplySettings.md) |  | [optional]
**source** | **string** | The name of the app the user Tweeted from. | [optional]
**text** | **string** | The content of the Tweet. |
**withheld** | [**\OpenAPI\Client\Model\TweetWithheld**](TweetWithheld.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
