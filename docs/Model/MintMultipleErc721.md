---
title: MintMultipleErc721
parent: Model
layout: page
---

# MintMultipleErc721

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTo()** | **string[]** | Blockchain address to send ERC721 token to. | ex.: `[&quot;0x687422eEA2cB73B5d3e242bA5456b782919AFc85&quot;]`
**getTokenId()** | **string[]** | ID of token to be created. | ex.: `[&quot;100000&quot;]`
**getUrl()** | **string[]** | Metadata of the token. See https://eips.ethereum.org/EIPS/eip-721#specification for more details. | ex.: `[&quot;https://my_token_data.com&quot;]`
**getContractAddress()** | **string** | Address of ERC721 token | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. | ex.: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2`
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | ex.: `null` [optional]

