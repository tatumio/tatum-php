---
title: AlgoTransactionHashKMS
parent: Model
layout: page
---

# AlgoTransactionHashKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxId()** | **string** | TX hash of transaction. <br>Example: `GTNOIDCIHZLESKNQPJXOXE476ODYDNNQBA3N2Q75MYQ4SI4XL5SA` |
**getAssetIndex()** | **float** | If transaction created new ASA asset, this value is the index of the asset on the network. <br>Example: `87751984` | [optional]
**getConfirmed()** | **bool** | If transaction was not confirmed within 5 rounds, result is false. <br>Example: `false` | [optional] [default to false]
**getFailed()** | **bool** | In case of the transaction was broadcast to the blockchain, but it was not possible to complete Tatum KMS signature, reponse is marked as failed and must be marked manually. <br>Example: `false` | [optional]

