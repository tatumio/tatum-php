---
title: FlowAccountKeysInner
parent: Model
layout: page
---

# FlowAccountKeysInner

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getIndex()** | **float** | Index of the public key. <br>Example: `0` | [optional]
**getPublicKey()** | **string** |  <br>Example: `ba38c835921828e11264e35fe31cc5ad90149f803fd3106e1dd1df49567a05714ed2bf5e42d58b4fef7eb9b0f7121f446d9b607216fdf04459e007b053288287` | [optional]
**getSignAlgo()** | **float** | Type of signature algorithm. 2 - ECDSA_secp256k1 <br>Example: `2` | [optional]
**getHashAlgo()** | **float** | Type of hash algo. 3 - SHA3_256 <br>Example: `3` | [optional]
**getSequenceNumber()** | **float** | Number of outgoing transactions for this public key. <br>Example: `1` | [optional]
**getRevoked()** | **bool** |  <br>Example: `false` | [optional]
**getWeight()** | **float** | Weight of the key. 1000 means single signature necessary. <br>Example: `1000` | [optional]

