---
title: SolanaMintedResult
parent: Model
layout: page
---

# SolanaMintedResult model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxId()** | **string** | The ID of the transaction | [optional]
**getNftAddress()** | **string** | The blockchain address of the minted NFT | [optional]
**getNftAccountAddress()** | **string** | The blockchain address that received the minted NFT; this address was created under the recipient's account address (the one in the <code>to</code> parameter of the request body), is owned by the recipient's address, and has the same private key | [optional]

