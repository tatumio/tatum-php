---
title: WebHook
parent: Model
layout: page
---

# WebHook model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getType()** | **string** | Type of the subscription. |
**getId()** | **string** | ID of the WebHook |
**getSubscriptionId()** | **string** | ID of the subscription |
**getUrl()** | **string** | ID of the subscription |
**getData()** | **object** | Data of webhook |
**getNextTime()** | **float** | Next webhook execution try time | [optional]
**getTimestamp()** | **float** | Webhook execution time | [optional]
**getRetryCount()** | **float** | Number | [optional]
**getFailed()** | **bool** | Flag indicating whether this webhook was successful or not |
**getResponse()** | [**\Tatum\Model\WebHookResponse**](../WebHookResponse) |  |

