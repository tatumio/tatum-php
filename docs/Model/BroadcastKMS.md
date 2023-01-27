---
title: BroadcastKMS
parent: Model
layout: page
---

# BroadcastKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxData()** | **string** | Raw signed transaction to be published to network. <br>Example: `62BD544D1B9031EFC330A3E855CC3A0D51CA5131455C1AB3BCAC6D243F65460D` |
**getSignatureId()** | **string** | ID of prepared payment template to sign. Required only, when broadcasting transaction signed by Tatum KMS. <br>Example: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6` | [optional]

