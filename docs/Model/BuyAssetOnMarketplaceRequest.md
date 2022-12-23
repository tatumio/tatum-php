# BuyAssetOnMarketplaceRequest

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getContractAddress()** | **string** | Blockchain address of the smart contract |
**getErc20Address()** | **string** | Optional address of the ERC20 token, which will be used as a selling currency of the NFT. | [optional]
**getBuyer()** | **string** | In case of the ERC20 listing, it's possible to buy on behalf of someone else. This value is the address of the buyer, which should approve spending of the ERC20 tokens for the Marketplace contract. This could be used for a buying from the custodial wallet address. | [optional]
**getListingId()** | **mixed** | Blockchain address of the listing |
**getAmount()** | **string** | Amount of the assets to be sent for buying. |
**getFromPrivateKey()** | **string** | The private key of the buyer |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**getSignatureId()** | **string** | The KMS identifier of the private key of the buyer |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getFrom()** | **mixed** | Blockchain address of the buyer |
**getAuthorityPrivateKey()** | **string** | The private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to "true" for the marketplace | [optional]
**getAuthoritySignatureId()** | **string** | The KMS identifier of the private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to "true" for the marketplace | [optional]

[[Back to Index]](../index.md)
