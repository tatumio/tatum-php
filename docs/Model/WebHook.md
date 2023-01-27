---
title: WebHook
parent: Model
layout: page
---

# WebHook

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getType()** | **string** | Type of the subscription. | ex.: `ACCOUNT_BALANCE_LIMIT`
**getId()** | **string** | ID of the WebHook | ex.: `7c21ed165e294db78b95f0f1`
**getSubscriptionId()** | **string** | ID of the subscription | ex.: `7c21ed165e294db78b95f0f1`
**getUrl()** | **string** | ID of the subscription | ex.: `http://some-host.net/webhook`
**getData()** | **object** | Data of webhook | ex.: `null`
**getNextTime()** | **float** | Next webhook execution try time | ex.: `1653320900353` [optional]
**getTimestamp()** | **float** | Webhook execution time | ex.: `1653320900353` [optional]
**getRetryCount()** | **float** | Number | ex.: `3` [optional]
**getFailed()** | **bool** | Flag indicating whether this webhook was successful or not | ex.: `false`
**getResponse()** | [**\Tatum\Model\WebHookResponse**](../WebHookResponse) |  | ex.: `null`

