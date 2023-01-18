---
title: MintNftAlgorandKMS
parent: Model
layout: page
---

# MintNftAlgorandKMS model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getUrl()** | **string** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> |
**getName()** | **string** | The name of the NFT |
**getFrom()** | **string** | The address of the minting account |
**getSignatureId()** | **string** | The KMS identifier of the private key of the minting account; the transaction fee will be paid from this account |
**getAttr()** | [**\Tatum\Model\MintNftExpressAlgorandAttr**](../MintNftExpressAlgorandAttr) |  | [optional]

