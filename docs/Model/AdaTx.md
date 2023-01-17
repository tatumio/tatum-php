---
title: AdaTx
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Transaction hash. | [optional]
**getFee()** | **string** | Fee paid for this transaction, in ADA. | [optional]
**getBlock()** | [**\Tatum\Model\AdaTxBlock**](AdaTxBlock.md) |  | [optional]
**getInputs()** | [**\Tatum\Model\AdaTxInputsInner[]**](AdaTxInputsInner.md) | List of transactions, from which assets are being sent. | [optional]
**getOutputs()** | [**\Tatum\Model\AdaUTXO[]**](AdaUTXO.md) | List of recipient addresses and amounts to send to each of them. | [optional]

[[Back to Index]](../index.md)
