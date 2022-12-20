# SellAssetOnMarketplaceSolana

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**contract_address** | **string** | Blockchain address of the smart contract |
**nft_address** | **string** | Blockchain address of the asset to sell |
**from** | **mixed** | Blockchain address of the seller |
**price** | **string** | Price of the asset to sell. Marketplace fee will be obtained on top of this price. |
**authority_private_key** | **string** | The private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to "true" for the marketplace | [optional]
**from_private_key** | **string** | The private key of the seller |

[[Back to Index]](../index.md)
