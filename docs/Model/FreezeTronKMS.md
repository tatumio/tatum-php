---
title: FreezeTronKMS
parent: Model
layout: page
---

# FreezeTronKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Sender address of TRON account in Base58 format. <br>Example: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getReceiver()** | **string** | Recipient address of frozen BANDWIDTH or ENERGY. <br>Example: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` |
**getDuration()** | **float** | Duration of frozen funds, in days<br/>Set this parameter to 3. <br>Example: `3` |
**getResource()** | **string** | Resource to obtain, BANDWIDTH or ENERGY. <br>Example: `ENERGY` |
**getAmount()** | **string** | Amount to be frozen in TRX. <br>Example: `100000` |

