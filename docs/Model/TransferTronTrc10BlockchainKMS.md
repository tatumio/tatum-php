# TransferTronTrc10BlockchainKMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Sender address of TRON account in Base58 format. |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getTo()** | **string** | Recipient address of TRON account in Base58 format. |
**getTokenId()** | **string** | ID of the token to transfer. |
**getAmount()** | **string** | Amount to be sent in TRX. |

[[Back to Index]](../index.md)