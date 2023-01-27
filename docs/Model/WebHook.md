---
title: WebHook
parent: Model
layout: page
---

# WebHook

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getType()** | **string** | Type of the subscription. <br>Example: `ACCOUNT_BALANCE_LIMIT` |
**getId()** | **string** | ID of the WebHook <br>Example: `7c21ed165e294db78b95f0f1` |
**getSubscriptionId()** | **string** | ID of the subscription <br>Example: `7c21ed165e294db78b95f0f1` |
**getUrl()** | **string** | ID of the subscription <br>Example: `http://some-host.net/webhook` |
**getData()** | **object** | Data of webhook <br>Example: `null` |
**getNextTime()** | **float** | Next webhook execution try time <br>Example: `1653320900353` | [optional]
**getTimestamp()** | **float** | Webhook execution time <br>Example: `1653320900353` | [optional]
**getRetryCount()** | **float** | Number <br>Example: `3` | [optional]
**getFailed()** | **bool** | Flag indicating whether this webhook was successful or not <br>Example: `false` |
**getResponse()** | [**\Tatum\Model\WebHookResponse**](../WebHookResponse) |  <br>Example: `null` |

