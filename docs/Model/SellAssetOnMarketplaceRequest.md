# SellAssetOnMarketplaceRequest

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getContractAddress()** | **string** | Blockchain address of the smart contract |
**getNftAddress()** | **string** | Blockchain address of the asset to sell |
**getSeller()** | **string** | Address of the seller of the NFT asset. |
**getErc20Address()** | **string** | Optional address of the ERC20 token, which will be used as a selling currency of the NFT. | [optional]
**getListingId()** | **string** | ID of the listing. It's up to the developer to generate unique ID |
**getAmount()** | **string** | Amount of the assets to be sent. For ERC-721 tokens, enter amount only in case of natiev currency cashback. | [optional]
**getTokenId()** | **string** | ID of token, if transaction is for ERC-721 or ERC-1155. |
**getPrice()** | **string** | Price of the asset to sell. Marketplace fee will be obtained on top of this price. |
**getIsErc721()** | **bool** | True if asset is NFT of type ERC721, false if ERC1155. |
**getFromPrivateKey()** | **string** | The private key of the seller |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**getSignatureId()** | **string** | The KMS identifier of the private key of the seller |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getFrom()** | **mixed** | Blockchain address of the seller |
**getAuthorityPrivateKey()** | **string** | The private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to "true" for the marketplace | [optional]
**getAuthoritySignatureId()** | **string** | The KMS identifier of the private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to "true" for the marketplace | [optional]

[[Back to Index]](../index.md)
