# Model/TransferPolygonBlockchain

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getNonce()** | **float** | Nonce to be set to Polygon transaction. If not present, last known nonce will be used. | [optional]
**getTo()** | **string** | Blockchain address to send assets |
**getCurrency()** | **string** | Currency to transfer from Polygon Blockchain Account. ERC20 tokens USDC and USDT are available only for mainnet use. |
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**getAmount()** | **string** | Amount to be sent. |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |

[[Back to Index]](../index.md)
