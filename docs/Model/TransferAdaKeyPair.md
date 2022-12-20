# TransferAdaKeyPair

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_account_id** | **string** | Sender account ID |
**address** | **string** | Blockchain address to send assets to. |
**amount** | **string** | Amount to be withdrawn to blockchain. |
**compliant** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**fee** | **string** | Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 0.5 ADA is used. | [optional]
**key_pair** | [**\Tatum\Model\TransferAdaKeyPairKeyPairInner[]**](TransferAdaKeyPairKeyPairInner.md) | Array of assigned blockchain addresses with their private keys. Either mnemonic, keyPair or signature Id must be present - depends on the type of account and xpub. Tatum KMS does not support keyPair type of off-chain transaction, only mnemonic based. |
**attr** | **string** | Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used. |
**payment_id** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**sender_note** | **string** | Note visible to owner of withdrawing account | [optional]

[[Back to Index]](../index.md)
