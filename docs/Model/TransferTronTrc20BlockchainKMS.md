---
title: TransferTronTrc20BlockchainKMS
parent: Model
layout: page
---

# TransferTronTrc20BlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Sender address of TRON account in Base58 format. <br>Example: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getTo()** | **string** | Recipient address of TRON account in Base58 format. <br>Example: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` |
**getTokenAddress()** | **string** | Address of the TRC20 token to transfer. <br>Example: `TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW` |
**getFeeLimit()** | **float** | Fee in TRX to be paid. <br>Example: `0.01` |
**getAmount()** | **string** | Amount to be sent in TRX. <br>Example: `100000` |

