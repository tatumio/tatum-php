# WebHook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the subscription. |
**id** | **string** | ID of the WebHook |
**subscription_id** | **string** | ID of the subscription |
**url** | **string** | ID of the subscription |
**data** | **object** | Data of webhook |
**next_time** | **float** | Next webhook execution try time | [optional]
**timestamp** | **float** | Webhook execution time | [optional]
**retry_count** | **float** | Number | [optional]
**failed** | **bool** | Flag indicating whether this webhook was successful or not |
**response** | [**\Tatum\Model\WebHookResponse**](WebHookResponse.md) |  |

[[Back to Index]](../index.md)
