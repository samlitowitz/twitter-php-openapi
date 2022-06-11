# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | Creation time of this User. | [optional]
**description** | **string** | The text of this User&#39;s profile description (also known as bio), if the User provided one. | [optional]
**entities** | [**\OpenAPI\Client\Model\UserEntities**](UserEntities.md) |  | [optional]
**id** | **string** | Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers. |
**location** | **string** | The location specified in the User&#39;s profile, if the User provided one. As this is a freeform value, it may not indicate a valid location, but it may be fuzzily evaluated when performing searches with location queries. | [optional]
**name** | **string** | The friendly name of this User, as shown on their profile. |
**pinned_tweet_id** | **string** | Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers. | [optional]
**profile_image_url** | **string** | The URL to the profile image for this User. | [optional]
**protected** | **bool** | Indicates if this User has chosen to protect their Tweets (in other words, if this User&#39;s Tweets are private). | [optional]
**public_metrics** | [**\OpenAPI\Client\Model\UserPublicMetrics**](UserPublicMetrics.md) |  | [optional]
**url** | **string** | The URL specified in the User&#39;s profile. | [optional]
**username** | **string** | The Twitter handle (screen name) of this user. |
**verified** | **bool** | Indicate if this User is a verified Twitter User. | [optional]
**withheld** | [**\OpenAPI\Client\Model\UserWithheld**](UserWithheld.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
