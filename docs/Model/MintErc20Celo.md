# MintErc20Celo

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAmount()** | **string** | Amount to be minted and transfered to the recipient. |
**getTo()** | **string** | Blockchain address to send ERC-20 tokens to. |
**getContractAddress()** | **string** | Address of ERC-20 token |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |

[[Back to Index]](../index.md)
