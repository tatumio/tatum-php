# TransferAdaMnemonic

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Blockchain address to send assets |
**amount** | **string** | Amount to be sent in ADA. |
**compliant** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**fee** | **string** | Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 1 ADA is used. | [optional]
**index** | **int** | Derivation index of sender address. |
**mnemonic** | **string** | Mnemonic to generate private key for sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub. |
**xpub** | **string** | Extended public key (xpub) of the wallet associated with the accounts. Should be present, when mnemonic is used. |
**payment_id** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**sender_account_id** | **string** | Sender account ID |
**sender_note** | **string** | Note visible to owner of withdrawing account | [optional]

[[Back to API list]](../../README.md#api-endpoints)
