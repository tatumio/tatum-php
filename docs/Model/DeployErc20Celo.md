# DeployErc20Celo

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSymbol()** | **string** | Symbol of the ERC20 token |
**getName()** | **string** | Name of the ERC20 token |
**getTotalCap()** | **string** | Max supply of ERC20 token. | [optional]
**getSupply()** | **string** | Max supply of ERC20 token. |
**getDigits()** | **float** | Number of decimal points |
**getAddress()** | **string** | Address on Celo blockchain, where all created ERC20 tokens will be transferred. |
**getFromPrivateKey()** | **string** | Private key of Celo account address, from which the fee for the deployment of ERC20 will be paid. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |

[[Back to Index]](../index.md)
