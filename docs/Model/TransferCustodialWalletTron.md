# Model/TransferCustodialWalletTron

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getCustodialAddress()** | **string** | The gas pump address that transfers the asset; this is the address that you <a href="#operation/PrecalculateGasPumpAddresses">precalculated</a> and <a href="#operation/ActivateGasPumpAddresses">activated</a> earlier and that is assigned to a customer in your custodial application; this is not the "master address" |
**getRecipient()** | **string** | The blockchain address that receives the asset |
**getContractType()** | **float** | The type of the asset to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), or <code>3</code> for native blockchain currencies. |
**getTokenAddress()** | **string** | (Only if the asset is a fungible token or NFT) The address of the token to transfer. Do not use if the asset is a native blockchain currency. | [optional]
**getAmount()** | **string** | (Only if the asset is a fungible token or native blockchain currency) The amount of the asset to transfer. Do not use if the asset is an NFT. | [optional]
**getTokenId()** | **string** | (Only if the asset is an NFT) The ID of the token to transfer. Do not use if the asset is a fungible token or native blockchain currency. | [optional]
**getFromPrivateKey()** | **string** | The private key of the blockchain address that owns the gas pump address ("master address") |
**getFeeLimit()** | **float** | The maximum amount to be paid as the gas fee (in TRX) |

[[Back to Index]](../index.md)
