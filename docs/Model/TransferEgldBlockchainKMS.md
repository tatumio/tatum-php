---
title: TransferEgldBlockchainKMS
parent: Model
layout: page
---

# TransferEgldBlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Account address of the sender <br>Example: `erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq7` |
**getTo()** | **string** | Account address of the receiver or smart contract <br>Example: `erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq6` |
**getAmount()** | **string** | Value to be sent. <br>Example: `0` |
**getFee()** | [**\Tatum\Model\TransferEgldBlockchainKMSFee**](../TransferEgldBlockchainKMSFee) |  <br>Example: `null` | [optional]
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format <br>Example: `4d79206e6f746520746f2074686520726563697069656e74` | [optional]
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |

