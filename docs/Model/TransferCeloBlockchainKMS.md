# TransferCeloBlockchainKMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**getCurrency()** | **string** | Currency of the transaction |
**getTo()** | **string** | Blockchain address to send assets |
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |
**getAmount()** | **string** | Amount to be sent. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

[[Back to Index]](../index.md)
