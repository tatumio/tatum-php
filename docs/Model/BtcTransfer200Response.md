# BtcTransfer200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of withdrawal. If transaction is not valid in blockchain, use this id to cancel withdrawal. |
**tx_id** | **string** | TX hash of successful transaction. |
**completed** | **bool** | If set to "true", the withdrawal has been completed in the virtual account; if set to "false", the withdrawal has not been completed and you have to <a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal" target="_blank">complete it manually</a> |
**signature_id** | **string** | ID of prepared payment template to sign. This is should be stored on a client side to retrieve ID of the blockchain transaction, when signing application signs the transaction and broadcasts it to the blockchain. |

[[Back to Index]](../index.md)
