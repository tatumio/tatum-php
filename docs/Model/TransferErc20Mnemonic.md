# Model/TransferErc20Mnemonic

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID |
**getAddress()** | **string** | Blockchain address to send ERC20 token to |
**getAmount()** | **string** | Amount to be sent. |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**getGasLimit()** | **string** | Gas limit for transaction in gas price. If not set, automatic calculation will be used. | [optional]
**getGasPrice()** | **string** | Gas price in Gwei. If not set, automatic calculation will be used. | [optional]
**getMnemonic()** | **string** | Mnemonic to generate private key for sender address. Either mnemonic and index, or privateKey must be present - depends on the type of account and xpub. |
**getIndex()** | **int** | Derivation index of sender address. |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account | [optional]

[[Back to Index]](../index.md)
