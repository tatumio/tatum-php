---
title: TransferBtcMnemonic200Response
parent: Model
layout: page
---

# TransferBtcMnemonic200Response model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | ID of withdrawal. If transaction is not valid in blockchain, use this id to cancel withdrawal. |
**getTxId()** | **string** | TX hash of successful transaction. |
**getCompleted()** | **bool** | If set to "true", the withdrawal has been completed in the virtual account; if set to "false", the withdrawal has not been completed and you have to <a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal" target="_blank">complete it manually</a> |
**getSignatureId()** | **string** | ID of prepared payment template to sign. This is should be stored on a client side to retrieve ID of the blockchain transaction, when signing application signs the transaction and broadcasts it to the blockchain. |

