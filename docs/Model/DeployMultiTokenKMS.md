# Model/DeployMultiTokenKMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. |
**getUri()** | **string** | URI of the Multi Token token |
**getPublicMint()** | **bool** | True if the contract is publicMint type | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to Index]](../index.md)
