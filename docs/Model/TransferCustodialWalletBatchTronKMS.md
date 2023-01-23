---
title: TransferCustodialWalletBatchTronKMS
parent: Model
layout: page
---

# TransferCustodialWalletBatchTronKMS model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getCustodialAddress()** | **string** | The gas pump address that transfers the assets; this is the address that you precalculated and activated earlier and that is assigned to a customer in your custodial application; this is not the "master address" |
**getFrom()** | **string** | The blockchain address that owns the gas pump address ("master address") in the Base58 format |
**getRecipient()** | **string[]** | The blockchain address that receives the assets |
**getContractType()** | **float[]** | The type of the assets to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), or <code>3</code> for native blockchain currencies. |
**getTokenAddress()** | **string[]** | If the assets are fungible tokens or NFTs, set this parameter to the array of the addresses of the tokens to transfer:<br/> <code>"tokenAddress": ["0x782919AFc85eEA2cB736874225456bB5d3e242bA","0x74225456bB5d3e242bA782919AFc85eEA2cB7368",...,"0x3e242bA78274225456bB52cB7368d919AFc85eEA"]</code>   If the assets are a native blockchain currency, set this parameter to the array of zeros, a zero per currency:<br/> <code>"tokenAddress": ["0","0",...,"0"]</code> |
**getAmount()** | **string[]** | If the assets are fungible tokens or a native blockchain currency, set this parameter to the array of the amounts of the assets to transfer:<br/> <code>"amount": ["100000","15000",...,"250000"]</code>   If the assets are NFTs, set this parameter to the array of zeros, a zero per NFT:<br/> <code>"amount": ["0","0",...,"0"]</code> |
**getTokenId()** | **string[]** | If the assets are NFTs, set this parameter to the array of the IDs of the tokens to transfer:<br/> <code>"tokenId": ["12","13",...,"24"]</code>    If the assets are fungible tokens or a native blockchain currency, set this parameter to the array of zeros, a zero per fungible token/currency:<br/> <code>"tokenId": ["0","0",...,"0"]</code> |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that owns the gas pump address key ("master address") |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the "master address" | [optional]
**getFeeLimit()** | **float** | The maximum amount to be paid as the gas fee (in TRX) |

