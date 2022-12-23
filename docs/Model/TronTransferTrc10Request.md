# TronTransferTrc10Request

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromPrivateKey()** | **string** | Private key of the address, from which the TRX will be sent. |
**getTo()** | **string** | Recipient address of TRON account in Base58 format. |
**getTokenId()** | **string** | ID of the token to transfer. |
**getAmount()** | **string** | Amount to be sent in TRX. |
**getFrom()** | **string** | Sender address of TRON account in Base58 format. |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]

[[Back to Index]](../index.md)
