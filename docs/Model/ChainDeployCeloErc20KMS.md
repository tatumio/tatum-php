# ChainDeployCeloErc20KMS

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getSymbol()** | **string** | Symbol of the ERC20 token |
**getName()** | **string** | Name of the ERC20 token |
**getTotalCap()** | **string** | Max supply of ERC20 token. | [optional]
**getSupply()** | **string** | Max supply of ERC20 token. |
**getDigits()** | **float** | Number of decimal points |
**getAddress()** | **string** | Address on Ethereum blockchain, where all created ERC20 tokens will be transferred. |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |

[[Back to Index]](../index.md)
