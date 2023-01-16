# Model/GenerateCustodialWalletBatchCelo

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getFeeCurrency()** | **string** | The currency in which the gas fee will be paid | [optional] [default to 'CELO']
**getFromPrivateKey()** | **string** | Private key of account, from which the transaction will be initiated. |
**getBatchCount()** | **float** | Number of addresses to generate. |
**getOwner()** | **string** | Owner of the addresses. |
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]

[[Back to Index]](../index.md)
