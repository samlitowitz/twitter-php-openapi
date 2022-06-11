# # ComplianceJob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | Creation time of the compliance job. |
**download_expires_at** | **\DateTime** | Expiration time of the download URL. |
**download_url** | **string** | URL from which the user will retrieve their compliance results. |
**id** | **string** | Compliance Job ID. |
**name** | **string** | User-provided name for a compliance job. | [optional]
**status** | [**\OpenAPI\Client\Model\ComplianceJobStatus**](ComplianceJobStatus.md) |  |
**type** | [**\OpenAPI\Client\Model\ComplianceJobType**](ComplianceJobType.md) |  |
**upload_expires_at** | **\DateTime** | Expiration time of the upload URL. |
**upload_url** | **string** | URL to which the user will upload their Tweet or user IDs. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
