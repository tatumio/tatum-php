---
title: GenerateMarketplaceTronKMS
parent: Model
layout: page
---

# GenerateMarketplaceTronKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. <br>Example: `TRON` | [optional]
**getFeeRecipient()** | **string** | Address of the recipient of the fee for the trade. <br>Example: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` |
**getMarketplaceFee()** | **float** | The percentage of the amount that an NFT was sold for that will be sent to the marketplace as a fee. To set the fee to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on. <br>Example: `150` |
**getFrom()** | **string** | Address of the recipient of the fee for the trade. <br>Example: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getFeeLimit()** | **float** | Fee in TRX to be paid. <br>Example: `0.01` |

