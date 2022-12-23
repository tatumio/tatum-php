# EthTransferRequest

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getAddress()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent in Ether / MATIC / XDC / KCS. |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**getPrivateKey()** | **string** | Private key of sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub. |
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**getSenderAccountId()** | **string** | Sender account ID |
**getSenderNote()** | **string** | Note visible to owner of withdrawing account | [optional]
**getGasLimit()** | **string** | Gas limit for transaction in gas price. If not set, automatic calculation will be used. | [optional]
**getGasPrice()** | **string** | Gas price in Gwei. If not set, automatic calculation will be used. | [optional]
**getIndex()** | **int** | Derivation index of sender address. |
**getMnemonic()** | **string** | Mnemonic to generate private key for sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub. |
**getSignatureId()** | **string** | Identifier of the mnemonic / private key associated in signing application. When hash identifies mnemonic, index must be present to represent specific account to pay from. Private key, mnemonic or signature Id must be present. |

[[Back to Index]](../index.md)
