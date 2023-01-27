---
title: BidOnAuction
parent: Model
layout: page
---

# BidOnAuction

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. <br>Example: `ETH` |
**getContractAddress()** | **string** | Address of the auction smart contract. <br>Example: `0x487422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getErc20Address()** | **string** | Optional address of the ERC20 token, which will be used as a selling currency of the NFT. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` | [optional]
**getBidder()** | **string** | In case of the ERC20 auction, it's possible to bid on behalf of someone else. This value is the address of the bidder, which should approve spending of the ERC20 tokens for the Auction contract. This could be used for a bidding from the custodial wallet address. <br>Example: `0x587422eEA2cB73B5d3e242bA5456b782919AFc85` | [optional]
**getId()** | **string** | ID of the auction. <br>Example: `null` |
**getBidValue()** | **string** | Amount of the assets to be bid. This must include auction fee. <br>Example: `1` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `1` | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  <br>Example: `null` | [optional]

