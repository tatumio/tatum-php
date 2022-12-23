# CancelSellMarketplaceListingRequest

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getContractAddress()** | **string** | Blockchain address of the smart contract |
**getErc20Address()** | **string** | Optional address of the ERC20 token, which will be used as a selling currency of the NFT. | [optional]
**getListingId()** | **mixed** | Blockchain address of the listing |
**getFromPrivateKey()** | **string** | The private key of the asset owner |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**getSignatureId()** | **string** | The KMS identifier of the private key of the asset owner |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getFrom()** | **mixed** | Blockchain address of the asset owner |
**getAuthorityPrivateKey()** | **string** | The private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to "true" for the marketplace | [optional]
**getAuthoritySignatureId()** | **string** | The KMS identifier of the private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to "true" for the marketplace | [optional]

[[Back to Index]](../index.md)
