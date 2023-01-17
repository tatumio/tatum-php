---
title: DogeTx
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Transaction hash. | [optional]
**getSize()** | **float** | Size of the transaction. | [optional]
**getVsize()** | **float** |  | [optional]
**getVersion()** | **float** | Index of the transaction. | [optional]
**getVin()** | [**\Tatum\Model\DogeTxVinInner[]**](../DogeTxVinInner) | List of transactions, from which assets are being sent. | [optional]
**getVout()** | [**\Tatum\Model\DogeTxVoutInner[]**](../DogeTxVoutInner) | List of recipient addresses and amounts to send to each of them. | [optional]
**getLocktime()** | **float** |  | [optional]

