---
title: XrpTx
parent: Model
layout: page
---

# XrpTx

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | The SHA-512 hash of the transaction | ex.: `1A32A054B04AC9D6814710DDCA416E72C4CD2D78D6C3DFC06CC9369CC4F6B250` [optional]
**getLedgerIndex()** | **float** | The ledger index of the ledger that includes this transaction. | ex.: `760469` [optional]
**getAccount()** | **string** | The unique address of the account that initiated the transaction. | ex.: `rPT1Sjq2YGrBMTttX4GZHjKu9dyfzbpAYe` [optional]
**getAmount()** | **string** | Amount of transaction, in drops. 1 drop = 0.000001 XRP. | ex.: `1000000000` [optional]
**getDestination()** | **string** | Recipient account address. | ex.: `rDA3DJBUBjA1X3PtLLFAEXxX31oA5nL3QF` [optional]
**getFee()** | **string** | Integer amount of XRP, in drops, to be destroyed as a cost for distributing this transaction to the network. Some transaction types have different minimum requirements. | ex.: `12` [optional]
**getTransactionType()** | **string** | Type of the transaction. XRp supports more than 18 transaction types. For the payment, Payment type is used. | ex.: `Payment` [optional]
**getFlags()** | **float** | Set of bit-flags for this transaction. | ex.: `2147483648` [optional]
**getLastLedgerSequence()** | **float** | Last ledger, in which this transaction could have occured. | ex.: `760473` [optional]
**getSequence()** | **float** | The sequence number of the account sending the transaction. A transaction is only valid if the Sequence number is exactly 1 greater than the previous transaction from the same account. | ex.: `118697` [optional]
**getDate()** | **float** | Timestamp of the transaction, in Ripple epoch (946684800 seconds after Unix Epoch) | ex.: `622916620` [optional]
**getInLedger()** | **float** | Ledger, in which transaction took place. | ex.: `760469` [optional]
**getSigningPubKey()** | **string** |  | ex.: `02356E89059A75438887F9FEE2056A2890DB82A68353BE9C0C0C8F89C0018B37FC` [optional]
**getTxnSignature()** | **string** |  | ex.: `304402206BB719587C55513515C092122813BC71C0BA28E7061830ABE6395308A1CAA0B302205B8256181965BB1345902597B2D3F1670F5F23A2E62097B3CCAA1F2EE631655E` [optional]
**getMeta()** | [**\Tatum\Model\XrpTxMeta**](../XrpTxMeta) |  | ex.: `null` [optional]
**getValidated()** | **bool** | Whether or not the transaction is included in a validated ledger. Any transaction not yet in a validated ledger is subject to change. | ex.: `true` [optional]

