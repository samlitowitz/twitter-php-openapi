# # Space

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | Creation time of the Space. | [optional]
**creator_id** | **string** | Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers. | [optional]
**ended_at** | **\DateTime** | End time of the Space. | [optional]
**host_ids** | **string[]** | The user ids for the hosts of the Space. | [optional]
**id** | **string** | The unique identifier of this Space. |
**invited_user_ids** | **string[]** | An array of user ids for people who were invited to a Space. | [optional]
**is_ticketed** | **bool** | Denotes if the Space is a ticketed Space. | [optional]
**lang** | **string** | The language of the Space. | [optional]
**participant_count** | **int** | The number of participants in a Space. | [optional]
**scheduled_start** | **\DateTime** | A date time stamp for when a Space is scheduled to begin. | [optional]
**speaker_ids** | **string[]** | An array of user ids for people who were speakers in a Space. | [optional]
**started_at** | **\DateTime** | When the Space was started as a date string. | [optional]
**state** | **string** | The current state of the Space. |
**subscriber_count** | **int** | The number of people who have either purchased a ticket or set a reminder for this Space. | [optional]
**title** | **string** | The title of the Space. | [optional]
**topics** | [**\OpenAPI\Client\Model\SpaceTopicsInner[]**](SpaceTopicsInner.md) | The topics of a Space, as selected by its creator. | [optional]
**updated_at** | **\DateTime** | When the Space was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
