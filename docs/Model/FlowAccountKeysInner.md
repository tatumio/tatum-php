---
title: FlowAccountKeysInner
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getIndex()** | **float** | Index of the public key. | [optional]
**getPublicKey()** | **string** |  | [optional]
**getSignAlgo()** | **float** | Type of signature algorithm. 2 - ECDSA_secp256k1 | [optional]
**getHashAlgo()** | **float** | Type of hash algo. 3 - SHA3_256 | [optional]
**getSequenceNumber()** | **float** | Number of outgoing transactions for this public key. | [optional]
**getRevoked()** | **bool** |  | [optional]
**getWeight()** | **float** | Weight of the key. 1000 means single signature necessary. | [optional]

