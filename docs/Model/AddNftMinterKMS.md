---
title: AddNftMinterKMS
parent: Model
layout: page
---

# AddNftMinterKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `ETH` |
**getContractAddress()** | **string** | The blockchain address of the NFT smart contract <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getMinter()** | **string** | The blockchain address to add to the smart contract as an NFT minter<br/>To find the address of the Tatum NFT minter for your blockchain, see the table in "Use your own smart contract to mint NFTs" in Mint an NFT.<br/>This address will cover your NFT minting fees. The number of credits equivalent to the fees will be then deducted from the credit allowance of your paid pricing plan. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that has priviledges to add an NFT minter to the NFT smart contract (the owner of the smart contract or a blockchain address that was granted such priviledges) <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address that holds the NFT smart contract that was generated from the mnemonic <br>Example: `null` | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]
**getFeeCurrency()** | **string** | (Celo only) The currency in which the transaction fee will be paid <br>Example: `null` | [optional]

