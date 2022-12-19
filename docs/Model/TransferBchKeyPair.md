# TransferBchKeyPair

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_account_id** | **string** | Sender account ID |
**address** | **string** | Blockchain address to send assets to. For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain addresses as a comma separated string. |
**amount** | **string** | Amount to be withdrawn to blockchain. |
**compliant** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**multiple_amounts** | **string[]** | For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain amounts. List of recipient addresses must be present in the address field and total sum of amounts must be equal to the amount field. | [optional]
**fee** | **string** | Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 0.00005 BCH is used. | [optional]
**key_pair** | [**\Tatum\Model\TransferBchKeyPairKeyPairInner[]**](TransferBchKeyPairKeyPairInner.md) | Array of assigned blockchain addresses with their private keys. Either mnemonic, keyPair or signature Id must be present - depends on the type of account and xpub. Tatum KMS does not support keyPair type of off-chain transaction, only mnemonic based. |
**attr** | **string** | Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used. |
**payment_id** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**sender_note** | **string** | Note visible to owner of withdrawing account | [optional]

[[Back to API list]](../../README.md#api-endpoints)
