---
title: MintNftAlgorandKMS
parent: Model
layout: page
---

# MintNftAlgorandKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `ALGO` |
**getUrl()** | **string** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> <br>Example: `https://my_token_data.com` |
**getName()** | **string** | The name of the NFT <br>Example: `My Crazy NFT` |
**getFrom()** | **string** | The address of the minting account <br>Example: `TMETT6BXL3QUH7AH5TS6IONU7LVTLKIGG54CFCNPMQXWGRIZFIESZBYWP4` |
**getSignatureId()** | **string** | The KMS identifier of the private key of the minting account; the transaction fee will be paid from this account <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getAttr()** | [**\Tatum\Model\MintNftExpressAlgorandAttr**](../MintNftExpressAlgorandAttr) |  <br>Example: `null` | [optional]

