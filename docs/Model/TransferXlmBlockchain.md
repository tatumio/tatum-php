---
title: TransferXlmBlockchain
parent: Model
layout: page
---

# TransferXlmBlockchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | Blockchain account to send assets from | ex.: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H`
**getTo()** | **string** | Blockchain address to send assets | ex.: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H`
**getAmount()** | **string** | Amount to be sent, in XLM. | ex.: `10000`
**getFromSecret()** | **string** | Secret for account. Secret, or signature Id must be present. | ex.: `SCVVKNLBHOWBNJYHD3CNROOA2P3K35I5GNTYUHLLMUHMHWQYNEI7LVED`
**getInitialize()** | **bool** | Set to true, if the destination address is not yet initialized and should be funded for the first time. | ex.: `false` [optional] [default to false]
**getMessage()** | **string** | Short message to recipient. It can be either 28 characters long ASCII text, 64 characters long HEX string or uint64 number. | ex.: `12355` [optional]

