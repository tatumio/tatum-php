---
title: TransferXlmBlockchainAsset
parent: Model
layout: page
---

# TransferXlmBlockchainAsset

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | Blockchain account to send assets from | ex.: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H`
**getTo()** | **string** | Blockchain address to send assets | ex.: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H`
**getAmount()** | **string** | Amount to be sent, in XLM. | ex.: `10000`
**getFromSecret()** | **string** | Secret for account. Secret, or signature Id must be present. | ex.: `SCVVKNLBHOWBNJYHD3CNROOA2P3K35I5GNTYUHLLMUHMHWQYNEI7LVED`
**getInitialize()** | **bool** | Set to true, if the destination address is not yet initialized and should be funded for the first time. | ex.: `false` [optional] [default to false]
**getToken()** | **string** | Asset name. If not defined, transaction is being sent in native XLM asset. | ex.: `TOKEN123`
**getIssuerAccount()** | **string** | Blockchain address of the issuer of the assets to send, if not native XLM asset. | ex.: `GC5LAVZ5UPLIFDH6SI33PNVL5TKWA4ODXTI3WEF5JM6LRM5MNGVJ56TT`
**getMessage()** | **string** | Short message to recipient. It can be either 28 characters long ASCII text, 64 characters long HEX string or uint64 number. | ex.: `12355` [optional]

