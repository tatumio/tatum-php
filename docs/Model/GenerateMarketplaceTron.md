---
title: GenerateMarketplaceTron
parent: Model
layout: page
---

# GenerateMarketplaceTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. <br>Example: `TRON` | [optional]
**getFeeRecipient()** | **string** | Address of the recipient of the fee for the trade. <br>Example: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` |
**getMarketplaceFee()** | **float** | The percentage of the amount that an NFT was sold for that will be sent to the marketplace as a fee. To set the fee to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on. <br>Example: `150` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getFeeLimit()** | **float** | Fee in TRX to be paid. <br>Example: `0.01` |

