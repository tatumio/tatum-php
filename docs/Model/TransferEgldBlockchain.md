---
title: TransferEgldBlockchain
parent: Model
layout: page
---

# TransferEgldBlockchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Account address of the sender <br>Example: `erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq7` |
**getTo()** | **string** | Account address of the receiver or smart contract <br>Example: `erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq6` |
**getAmount()** | **string** | Value to be sent. <br>Example: `0` |
**getFee()** | [**\Tatum\Model\TransferEgldBlockchainFee**](../TransferEgldBlockchainFee) |  <br>Example: `null` | [optional]
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format <br>Example: `4d79206e6f746520746f2074686520726563697069656e74` | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0cd8e6217b4a218807b858ffb508483cdcdadbb7a21196727f764a510a692760` |

