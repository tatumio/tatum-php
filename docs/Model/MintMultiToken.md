# MintMultiToken

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. |
**getTokenId()** | **string** | ID of token to be created. |
**getTo()** | **string** | Blockchain address to send Multi Token token to |
**getContractAddress()** | **string** | Address of Multi Token token |
**getAmount()** | **string** | amount of token to be created. |
**getData()** | **string** | Data in bytes | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to Index]](../index.md)
