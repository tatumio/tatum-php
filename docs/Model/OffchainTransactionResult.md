---
title: OffchainTransactionResult
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | ID of withdrawal. If transaction is not valid in blockchain, use this id to cancel withdrawal. |
**getTxId()** | **string** | TX hash of successful transaction. |
**getCompleted()** | **bool** | If set to "true", the withdrawal has been completed in the virtual account; if set to "false", the withdrawal has not been completed and you have to <a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal" target="_blank">complete it manually</a> |

[[Back to Index]](../index.md)
