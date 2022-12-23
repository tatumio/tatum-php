# SolanaBlockchainTransferRequest

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Blockchain address to send assets from |
**getTo()** | **string** | Blockchain address to send assets to |
**getAmount()** | **string** | Amount to be sent in SOL. |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getFeePayer()** | **string** | Blockchain address to pay the fee for the transaction from | [optional]
**getFeePayerPrivateKey()** | **string** | Private key of the fee payer address. | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getFeePayerSignatureId()** | **string** | Identifier of the private key used for paying the gas costs in signing application. Defaults to the signatureId. | [optional]

[[Back to Index]](../index.md)
