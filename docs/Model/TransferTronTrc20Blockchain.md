---
title: TransferTronTrc20Blockchain
parent: Model
layout: page
---

# TransferTronTrc20Blockchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromPrivateKey()** | **string** | Private key of the address, from which the TRX will be sent. <br>Example: `842E09EB40D8175979EFB0071B28163E11AED0F14BDD84090A4CEFB936EF5701` |
**getTo()** | **string** | Recipient address of TRON account in Base58 format. <br>Example: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` |
**getTokenAddress()** | **string** | Address of the TRC20 token to transfer. <br>Example: `TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW` |
**getFeeLimit()** | **float** | Fee in TRX to be paid. <br>Example: `0.01` |
**getAmount()** | **string** | Amount to be sent in TRX. <br>Example: `100000` |

