---
title: AddNftMinter
parent: Model
layout: page
---

# AddNftMinter

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `ETH` |
**getContractAddress()** | **string** | The blockchain address of the NFT smart contract <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getMinter()** | **string** | The blockchain address to add to the smart contract as an NFT minter<br/>To find the address of the Tatum NFT minter for your blockchain, see the table in "Use your own smart contract to mint NFTs" in Mint an NFT.<br/>This address will cover your NFT minting fees. The number of credits equivalent to the fees will be then deducted from the credit allowance of your paid pricing plan. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getFromPrivateKey()** | **string** | The private key of the blockchain address that has priviledges to add an NFT minter to the NFT smart contract (the owner of the smart contract or a blockchain address that was granted such priviledges) <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]
**getFeeCurrency()** | **string** | (Celo only) The currency in which the transaction fee will be paid <br>Example: `null` | [optional]

