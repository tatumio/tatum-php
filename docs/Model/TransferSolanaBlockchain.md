# TransferSolanaBlockchain

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Blockchain address to send assets from |
**getTo()** | **string** | Blockchain address to send assets to |
**getAmount()** | **string** | Amount to be sent in SOL. |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getFeePayer()** | **string** | Address on the Solana blockchain, from which the fee will be paid for transaction. Defaults to from. | [optional]
**getFeePayerPrivateKey()** | **string** | Private key of the fee payer address. | [optional]

[[Back to Index]](../index.md)
