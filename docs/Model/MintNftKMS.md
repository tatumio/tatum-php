---
title: MintNftKMS
parent: Model
layout: page
---

# MintNftKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `ETH`
**getTo()** | **string** | The blockchain address to send the NFT to | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getContractAddress()** | **string** | The blockchain address of the smart contract to build the NFT on | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getTokenId()** | **string** | The ID of the NFT | ex.: `123`
**getUrl()** | **string** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> | ex.: `https://my_token_data.com`
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that will pay the fee for the transaction | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address to pay the transaction fee that was generated from the mnemonic | ex.: `null` [optional]
**getErc20()** | **string** | The blockchain address of the custom fungible token | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` [optional]
**getProvenance()** | **bool** | Set to "true" if the NFT smart contract is of the provenance type; otherwise, set to "false". | ex.: `true` [optional]
**getAuthorAddresses()** | **string[]** | The blockchain addresses where the royalties will be sent every time the minted NFT is transferred; the royalties are paid in a native blockchain currency such as ETH on Ethereum, MATIC on Polygon, and so on | ex.: `null` [optional]
**getCashbackValues()** | **string[]** | The amounts of the royalties that will be paid to the authors of the minted NFT every time the NFT is transferred; the amount is defined as a fixed amount of the native blockchain currency for cashback smart contracts or as a percentage of the NFT price for provenance smart contracts | ex.: `null` [optional]
**getFixedValues()** | **string[]** | The fixed amounts of the native blockchain currency to which the cashback royalty amounts will be compared to; if the fixed amount specified in this parameter is greater than the amount of the cashback royalties, this fixed amount will be sent to the NFT authors instead of the cashback royalties | ex.: `null` [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | ex.: `null` [optional]

