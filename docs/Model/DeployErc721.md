# DeployErc721

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getName()** | **string** | Name of the ERC721 token |
**getSymbol()** | **string** | Symbol of the ERC721 token |
**getFromPrivateKey()** | **string** | Private key of Ethereum account address, from which gas for deployment of ERC721 will be paid. Private key, or signature Id must be present. |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to Index]](../index.md)
