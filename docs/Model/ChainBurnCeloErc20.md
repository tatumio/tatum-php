# ChainBurnCeloErc20

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getAmount()** | **string** | Amount of tokens to be destroyed. |
**getContractAddress()** | **string** | Address of ERC20 token |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |

[[Back to Index]](../index.md)
