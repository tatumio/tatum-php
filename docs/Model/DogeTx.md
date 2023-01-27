---
title: DogeTx
parent: Model
layout: page
---

# DogeTx

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Transaction hash. <br>Example: `5f83d51c8d3054012cea3011fa626b85d89442788721afd60719ab1f9ab8f78a` | [optional]
**getSize()** | **float** | Size of the transaction. <br>Example: `145` | [optional]
**getVsize()** | **float** |  <br>Example: `145` | [optional]
**getVersion()** | **float** | Index of the transaction. <br>Example: `2` | [optional]
**getVin()** | [**\Tatum\Model\DogeTxVinInner[]**](../DogeTxVinInner) | List of transactions, from which assets are being sent. <br>Example: `null` | [optional]
**getVout()** | [**\Tatum\Model\DogeTxVoutInner[]**](../DogeTxVoutInner) | List of recipient addresses and amounts to send to each of them. <br>Example: `null` | [optional]
**getLocktime()** | **float** |  <br>Example: `1233222` | [optional]

