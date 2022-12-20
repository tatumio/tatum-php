# TransferFlowMnemonic

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_account_id** | **string** | Sender account ID |
**account** | **string** | Blockchain account to send from |
**address** | **string** | Blockchain address to send assets |
**amount** | **string** | Amount to be sent, in Flow. |
**mnemonic** | **string** | Mnemonic to generate private key. |
**index** | **float** | Index to the specific address from mnemonic. |
**compliant** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**payment_id** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**sender_note** | **string** | Note visible to owner of withdrawing account. | [optional]

[[Back to Index]](../index.md)
