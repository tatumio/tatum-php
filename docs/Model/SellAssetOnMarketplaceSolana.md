# Model/SellAssetOnMarketplaceSolana

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getContractAddress()** | **string** | Blockchain address of the smart contract |
**getNftAddress()** | **string** | Blockchain address of the asset to sell |
**getFrom()** | **mixed** | Blockchain address of the seller |
**getPrice()** | **string** | Price of the asset to sell. Marketplace fee will be obtained on top of this price. |
**getAuthorityPrivateKey()** | **string** | The private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to "true" for the marketplace | [optional]
**getFromPrivateKey()** | **string** | The private key of the seller |

[[Back to Index]](../index.md)
