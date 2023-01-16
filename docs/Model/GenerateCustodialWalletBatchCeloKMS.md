# Model/GenerateCustodialWalletBatchCeloKMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getBatchCount()** | **float** | Number of addresses to generate. |
**getOwner()** | **string** | Owner of the addresses. |
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]

[[Back to Index]](../index.md)
