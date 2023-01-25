---
title: FreezeTronKMS
parent: Model
layout: page
---

# FreezeTronKMS model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Sender address of TRON account in Base58 format. |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getReceiver()** | **string** | Recipient address of frozen BANDWIDTH or ENERGY. |
**getDuration()** | **float** | Duration of frozen funds, in days<br/>Set this parameter to 3. |
**getResource()** | **string** | Resource to obtain, BANDWIDTH or ENERGY. |
**getAmount()** | **string** | Amount to be frozen in TRX. |

