# TransferEthBlockchain

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getTo()** | **string** | Blockchain address to send assets |
**getCurrency()** | **string** | Currency to transfer from Ethereum Blockchain Account. |
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**getAmount()** | **string** | Amount to be sent in Ether. |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |

[[Back to Index]](../index.md)
