---
title: TransactionFeeEgldBlockchain
parent: Model
layout: page
---

# TransactionFeeEgldBlockchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSender()** | **string** | Account address of the sender | ex.: `erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq7`
**getReceiver()** | **string** | Account address of the receiver or smart contract | ex.: `erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq6`
**getValue()** | **string** | Value to be sent. | ex.: `0.1`
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | ex.: `4d79206e6f746520746f2074686520726563697069656e74` [optional]

