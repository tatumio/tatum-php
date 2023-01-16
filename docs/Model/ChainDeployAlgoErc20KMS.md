# ChainDeployAlgoErc20KMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getSymbol()** | **string** | Symbol of the ERC20 token |
**getName()** | **string** | Name of the ERC20 token |
**getTotalCap()** | **string** | Max supply of ERC20 token. | [optional]
**getSupply()** | **string** | Initial supply of ERC20 token. If totalCap is not defined, this will be the total cap. |
**getDigits()** | **float** | Number of decimal points |
**getAddress()** | **string** | Address on Ethereum blockchain, where all created ERC20 tokens will be transferred. |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | **string** | The transaction fee in ALGO |

[[Back to Index]](../index.md)