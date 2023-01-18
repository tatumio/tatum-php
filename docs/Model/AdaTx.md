---
title: AdaTx
parent: Model
layout: page
---

# AdaTx model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Transaction hash. | [optional]
**getFee()** | **string** | Fee paid for this transaction, in ADA. | [optional]
**getBlock()** | [**\Tatum\Model\AdaTxBlock**](../AdaTxBlock) |  | [optional]
**getInputs()** | [**\Tatum\Model\AdaTxInputsInner[]**](../AdaTxInputsInner) | List of transactions, from which assets are being sent. | [optional]
**getOutputs()** | [**\Tatum\Model\AdaUTXO[]**](../AdaUTXO) | List of recipient addresses and amounts to send to each of them. | [optional]

