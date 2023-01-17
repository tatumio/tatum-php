---
title: AlgoBlock
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getGenesisHash()** | **string** | hash to which this block belongs | [optional]
**getGenesisId()** | **string** | ID to which this block belongs | [optional]
**getPreviousBlockHash()** | **string** | Previous block hash | [optional]
**getRewards()** | **object** | rewards | [optional]
**getRound()** | **float** | Current round on which this block was appended to the chain | [optional]
**getSeed()** | **string** | Sortition seed. | [optional]
**getTimestamp()** | **float** | Block creation timestamp in seconds since eposh | [optional]
**getTxns()** | [**\Tatum\Model\AlgoTx[]**](AlgoTx.md) | Array of transactions | [optional]
**getTxn()** | **string** | TransactionsRoot authenticates the set of transactions appearing in the block. | [optional]
**getTxnc()** | **float** | TxnCounter counts the number of transations committed in the ledger | [optional]
**getUpgradeState()** | **object** | upgrade state | [optional]
**getUpgradeVote()** | **object** | upgrade vote | [optional]

[[Back to Index]](../index.md)
