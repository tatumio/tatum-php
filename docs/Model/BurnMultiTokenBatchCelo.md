# Model/BurnMultiTokenBatchCelo

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Chain to work with. |
**getAccount()** | **string** | Address of holder |
**getTokenId()** | **string[]** | The IDs of the Multi Tokens to be destroyed. |
**getAmounts()** | **string[]** | The amounts of the Multi Tokens to be destroyed. |
**getContractAddress()** | **string** | The address of the Multi Token smart contract |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |

[[Back to Index]](../index.md)
