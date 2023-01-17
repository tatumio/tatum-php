---
title: AlgoTransactionHashKMS
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxId()** | **string** | TX hash of transaction. |
**getAssetIndex()** | **float** | If transaction created new ASA asset, this value is the index of the asset on the network. | [optional]
**getConfirmed()** | **bool** | If transaction was not confirmed within 5 rounds, result is false. | [optional] [default to false]
**getFailed()** | **bool** | In case of the transaction was broadcast to the blockchain, but it was not possible to complete Tatum KMS signature, reponse is marked as failed and must be marked manually. | [optional]

[[Back to Index]](../index.md)
