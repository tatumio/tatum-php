---
title: UpdateCashbackValueForAuthorNftKMS
parent: Model
layout: page
---

# UpdateCashbackValueForAuthorNftKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `ETH` |
**getTokenId()** | **string** | The ID of the NFT to update royalty information for <br>Example: `123` |
**getContractAddress()** | **string** | The blockchain address of the NFT to update royalty information for <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getCashbackValue()** | **string** | The new value of the royalty cashback to be set for the author of the NFT; to disable the royalties for the NFT completely, set this parameter to 0 <br>Example: `0.1` |
**getSignatureId()** | **string** | The KMS identifier of the private key of the NFT author's address <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the NFT author's address that was generated from the mnemonic <br>Example: `null` | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]

