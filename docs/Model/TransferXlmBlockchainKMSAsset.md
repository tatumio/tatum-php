---
title: TransferXlmBlockchainKMSAsset
parent: Model
layout: page
---

# TransferXlmBlockchainKMSAsset

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | Blockchain account to send assets from <br>Example: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H` |
**getTo()** | **string** | Blockchain address to send assets <br>Example: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H` |
**getAmount()** | **string** | Amount to be sent, in XLM. <br>Example: `10000` |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getInitialize()** | **bool** | Set to true, if the destination address is not yet initialized and should be funded for the first time. <br>Example: `false` | [optional] [default to false]
**getToken()** | **string** | Asset name. If not defined, transaction is being sent in native XLM asset. <br>Example: `TOKEN123` |
**getIssuerAccount()** | **string** | Blockchain address of the issuer of the assets to send, if not native XLM asset. <br>Example: `GC5LAVZ5UPLIFDH6SI33PNVL5TKWA4ODXTI3WEF5JM6LRM5MNGVJ56TT` |
**getMessage()** | **string** | Short message to recipient. It can be either 28 characters long ASCII text, 64 characters long HEX string or uint64 number. <br>Example: `12355` | [optional]

