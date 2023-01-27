---
title: AdaTx
parent: Model
layout: page
---

# AdaTx

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Transaction hash. | ex.: `5f83d51c8d3054012cea3011fa626b85d89442788721afd60719ab1f9ab8f78a` [optional]
**getFee()** | **string** | Fee paid for this transaction, in ADA. | ex.: `0.00001682` [optional]
**getBlock()** | [**\Tatum\Model\AdaTxBlock**](../AdaTxBlock) |  | ex.: `null` [optional]
**getInputs()** | [**\Tatum\Model\AdaTxInputsInner[]**](../AdaTxInputsInner) | List of transactions, from which assets are being sent. | ex.: `null` [optional]
**getOutputs()** | [**\Tatum\Model\AdaUTXO[]**](../AdaUTXO) | List of recipient addresses and amounts to send to each of them. | ex.: `null` [optional]

