# AdaTransferOffchainRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_account_id** | **string** | Sender account ID |
**address** | **string** | Blockchain address to send assets to |
**amount** | **string** | Amount to be sent in ADA. |
**compliant** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**fee** | **string** | Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 1 ADA is used. | [optional]
**key_pair** | [**\Tatum\Model\TransferAdaKeyPairKeyPairInner[]**](TransferAdaKeyPairKeyPairInner.md) | Array of assigned blockchain addresses with their private keys. Either mnemonic, keyPair or signature Id must be present - depends on the type of account and xpub. Tatum KMS does not support keyPair type of off-chain transaction, only mnemonic based. |
**attr** | **string** | Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used with signatureId. |
**payment_id** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**sender_note** | **string** | Note visible to owner of withdrawing account | [optional]
**index** | **int** | Derivation index of sender address. |
**mnemonic** | **string** | Mnemonic to generate private key for sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub. |
**xpub** | **string** | Extended public key (xpub) of the wallet associated with the accounts. XPub or attr must be used with signatureId. |
**from** | **string** | Blockchain address to send assets from |
**signature_id** | **string** | Identifier of the mnemonic / private key associated in signing application. When hash identifies mnemonic, index must be present to represent specific account to pay from. Private key, mnemonic or signature Id must be present. |

[[Back to Index]](../index.md)
