---
title: SolanaMintedResult
parent: Model
layout: page
---

# SolanaMintedResult

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxId()** | **string** | The ID of the transaction <br>Example: `4kiRkAWjjr5t3rBKmYQ5d2e3xjgnRRttB5GtUz2F4sz5wwC7NnV74qCZ1KN1b37qsnjkKknsJPGXdcPhzHpkiMAs` | [optional]
**getNftAddress()** | **string** | The blockchain address of the minted NFT <br>Example: `4afZBmAneN2j6gDHH8zdrNWkCqfMC3XPH2cpFKtYMSVe` | [optional]
**getNftAccountAddress()** | **string** | The blockchain address that received the minted NFT; this address was created under the recipient's account address (the one in the <code>to</code> parameter of the request body), is owned by the recipient's address, and has the same private key <br>Example: `A8BSHPJcB5ZGCT6yo6pz2RYqnypTSpzTAFSBhtTQmsEE` | [optional]

