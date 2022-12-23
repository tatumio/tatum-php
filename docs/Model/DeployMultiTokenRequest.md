# DeployMultiTokenRequest

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. |
**getUri()** | **string** | URI of the Multi Token contract |
**getFromPrivateKey()** | **string** | Private key of account address, from which gas for deployment of ERC1155 will be paid. Private key, or signature Id must be present. |
**getPublicMint()** | **bool** | True if the contract is publicMint type | [optional]
**getNonce()** | **float** |  | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]

[[Back to Index]](../index.md)
