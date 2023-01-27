---
title: TransferBtcMnemonic200Response
parent: Model
layout: page
---

# TransferBtcMnemonic200Response

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | ID of withdrawal. If transaction is not valid in blockchain, use this id to cancel withdrawal. <br>Example: `5e68c66581f2ee32bc354087` |
**getTxId()** | **string** | TX hash of successful transaction. <br>Example: `c83f8818db43d9ba4accfe454aa44fc33123d47a4f89d47b314d6748eb0e9bc9` |
**getCompleted()** | **bool** | If set to "true", the withdrawal has been completed in the virtual account; if set to "false", the withdrawal has not been completed and you have to <a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal" target="_blank">complete it manually</a> <br>Example: `true` |
**getSignatureId()** | **string** | ID of prepared payment template to sign. This is should be stored on a client side to retrieve ID of the blockchain transaction, when signing application signs the transaction and broadcasts it to the blockchain. <br>Example: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6` |

