---
title: MintErc721Celo
parent: Model
layout: page
---

# MintErc721Celo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTokenId()** | **string** | ID of token to be created. <br>Example: `100000` |
**getTo()** | **string** | Blockchain address to send ERC721 token to <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getContractAddress()** | **string** | Address of ERC721 token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getUrl()** | **string** | Metadata of the token. See https://eips.ethereum.org/EIPS/eip-721#specification for more details. <br>Example: `https://my_token_data.com` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas <br>Example: `null` |

