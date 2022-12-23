# AdaTransferOffchainRequest

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID |
**getAddress()** | **string** | Blockchain address to send assets to |
**getAmount()** | **string** | Amount to be sent in ADA. |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**getFee()** | **string** | Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 1 ADA is used. | [optional]
**getKeyPair()** | [**\Tatum\Model\TransferAdaKeyPairKeyPairInner[]**](TransferAdaKeyPairKeyPairInner.md) | Array of assigned blockchain addresses with their private keys. Either mnemonic, keyPair or signature Id must be present - depends on the type of account and xpub. Tatum KMS does not support keyPair type of off-chain transaction, only mnemonic based. |
**getAttr()** | **string** | Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used with signatureId. |
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account | [optional]
**getIndex()** | **int** | Derivation index of sender address. |
**getMnemonic()** | **string** | Mnemonic to generate private key for sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub. |
**getXpub()** | **string** | Extended public key (xpub) of the wallet associated with the accounts. XPub or attr must be used with signatureId. |
**getFrom()** | **string** | Blockchain address to send assets from |
**getSignatureId()** | **string** | Identifier of the mnemonic / private key associated in signing application. When hash identifies mnemonic, index must be present to represent specific account to pay from. Private key, mnemonic or signature Id must be present. |

[[Back to Index]](../index.md)
