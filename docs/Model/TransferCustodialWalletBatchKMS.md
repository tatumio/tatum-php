---
title: TransferCustodialWalletBatchKMS
parent: Model
layout: page
---

# TransferCustodialWalletBatchKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `ETH` |
**getCustodialAddress()** | **string** | The gas pump address that transfers the assets; this is the address that you precalculated and activated earlier and that is assigned to a customer in your custodial application; this is not the "master address" <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getRecipient()** | **string[]** | The blockchain address that receives the assets <br>Example: `null` |
**getContractType()** | **float[]** | The type of the assets to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), <code>2</code> for Multi Tokens (ERC-1155 or equivalent), or <code>3</code> for native blockchain currencies. <br>Example: `null` |
**getTokenAddress()** | **string[]** | If the assets are fungible tokens, NFTs, or Multi Tokens, set this parameter to the array of the addresses of the tokens to transfer:<br/> <code>"tokenAddress": ["0x782919AFc85eEA2cB736874225456bB5d3e242bA","0x74225456bB5d3e242bA782919AFc85eEA2cB7368",...,"0x3e242bA78274225456bB52cB7368d919AFc85eEA"]</code>   If the assets are a native blockchain currency, set this parameter to the array of zeros, a zero per currency:<br/> <code>"tokenAddress": ["0","0",...,"0"]</code> <br>Example: `null` |
**getAmount()** | **string[]** | If the assets are fungible tokens, Multi Tokens, or a native blockchain currency, set this parameter to the array of the amounts of the assets to transfer:<br/> <code>"amount": ["100000","15000",...,"250000"]</code>   If the assets are NFTs, set this parameter to the array of zeros, a zero per NFT:<br/> <code>"amount": ["0","0",...,"0"]</code> <br>Example: `null` |
**getTokenId()** | **string[]** | If the assets are Multi Tokens or NFTs, set this parameter to the array of the IDs of the tokens to transfer:<br/> <code>"tokenId": ["12","13",...,"24"]</code>    If the assets are fungible tokens or a native blockchain currency, set this parameter to the array of zeros, a zero per fungible token/currency:<br/> <code>"tokenId": ["0","0",...,"0"]</code> <br>Example: `null` |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that owns the gas pump address key ("master address") <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the "master address" <br>Example: `null` | [optional]
**getNonce()** | **float** | The nonce to be set to the transfer transaction; if not present, the last known nonce will be used <br>Example: `1` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]

