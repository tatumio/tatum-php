---
title: TransferNftKMS
parent: Model
layout: page
---

# TransferNftKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getValue()** | **string** | If token to be transferred is Royalty NFT token, this is a value to be paid as a cashback to the authors of the token. <br>Example: `1` | [optional]
**getChain()** | **string** | The blockchain to work with <br>Example: `ETH` |
**getTo()** | **string** | Blockchain address to send NFT token to <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getTokenId()** | **string** | ID of the token. <br>Example: `123` |
**getContractAddress()** | **string** | Address of NFT token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getProvenance()** | **bool** | True if the contract is provenance type <br>Example: `true` | [optional]
**getProvenanceData()** | **string** | data you want to store with transaction, optional and valid only if provenance contract <br>Example: `test` | [optional]
**getTokenPrice()** | **string** | current price of the token, valid only for provenance <br>Example: `1` | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `1` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]

