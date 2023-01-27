---
title: FlowEvent
parent: Model
layout: page
---

# FlowEvent

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getBlockId()** | **string** |  | ex.: `c49322287d9ce1d05e909668a15f3e1ed5593b11ace2cbbee56eebf8e9fb1a85` [optional]
**getBlockHeight()** | **float** |  | ex.: `14493280` [optional]
**getBlockTimestamp()** | **string** |  | ex.: `2021-05-14T21:08:34.536Z` [optional]
**getType()** | **string** |  | ex.: `A.7e60df042a9c0868.FlowToken.TokensWithdrawn` [optional]
**getTransactionId()** | **string** |  | ex.: `d1c75a84e4bdf0dd9bf1bcd0ce4fb25f89e2ed3c5e9574dbca2760b52c428717` [optional]
**getTransactionIndex()** | **float** |  | ex.: `0` [optional]
**getEventIndex()** | **float** |  | ex.: `0` [optional]
**getPayload()** | [**\Tatum\Model\FlowEventPayload**](../FlowEventPayload) |  | ex.: `null` [optional]

