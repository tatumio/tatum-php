---
title: TransferXlm
parent: Model
layout: page
---

# TransferXlm

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID <br>Example: `61b3bffddfb389cde19c73be` |
**getFromAccount()** | **string** | Blockchain account to send from <br>Example: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H` |
**getAddress()** | **string** | Blockchain address to send assets <br>Example: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H` |
**getAmount()** | **string** | Amount to be sent, in XLM or XLM-based Asset. <br>Example: `10000` |
**getSecret()** | **string** | Secret for account. Secret, or signature Id must be present. <br>Example: `SCVVKNLBHOWBNJYHD3CNROOA2P3K35I5GNTYUHLLMUHMHWQYNEI7LVED` |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. <br>Example: `false` | [optional]
**getAttr()** | **string** | Short message to recipient. Usually used as an account discriminator. It can be either 28 characters long ASCII text, 64 characters long HEX string or uint64 number. When using as an account disciminator in Tatum Offchain ledger, can be in format of destination_acc/source_acc. <br>Example: `12355` | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. <br>Example: `1234` | [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. <br>Example: `Sender note` | [optional]

