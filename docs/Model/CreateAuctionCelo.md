---
title: CreateAuctionCelo
parent: Model
layout: page
---

# CreateAuctionCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. <br>Example: `CELO` |
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid <br>Example: `null` |
**getContractAddress()** | **string** | Address of the auction smart contract. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getNftAddress()** | **string** | Address of the NFT asset to sell smart contract. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getSeller()** | **string** | Address of the seller of the NFT asset. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getErc20Address()** | **string** | Optional address of the ERC20 token, which will be used as a selling currency of the NFT. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` | [optional]
**getId()** | **string** | ID of the auction. It's up to the developer to generate unique ID <br>Example: `null` |
**getAmount()** | **string** | Amount of the assets to be sent. For ERC-721 tokens, enter 1. <br>Example: `1` | [optional]
**getTokenId()** | **string** | ID of token, if transaction is for ERC-721 or ERC-1155. <br>Example: `100000` |
**getEndedAt()** | **float** | Last block, where auction accepts bids. <br>Example: `100000` |
**getIsErc721()** | **bool** | True if asset is NFT of type ERC721, false if ERC1155. <br>Example: `true` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `1` | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  <br>Example: `null` | [optional]

