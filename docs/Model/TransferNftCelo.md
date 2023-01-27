---
title: TransferNftCelo
parent: Model
layout: page
---

# TransferNftCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getValue()** | **string** | If token to be transferred is Royalty NFT token, this is a value to be paid as a cashback to the authors of the token. <br>Example: `1` | [optional]
**getChain()** | **string** | The blockchain to work with <br>Example: `CELO` |
**getTo()** | **string** | Blockchain address to send NFT token to <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getTokenId()** | **string** | ID of the token. <br>Example: `123` |
**getProvenance()** | **bool** | True if the contract is provenance type <br>Example: `true` | [optional]
**getProvenanceData()** | **string** | data you want to store with transaction, optional and valid only if provenance contract <br>Example: `test` | [optional]
**getTokenPrice()** | **string** | current price of the token, valid only for provenance <br>Example: `1` | [optional]
**getContractAddress()** | **string** | Address of NFT token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `1` | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid <br>Example: `null` |

