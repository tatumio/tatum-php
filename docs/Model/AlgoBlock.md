---
title: AlgoBlock
parent: Model
layout: page
---

# AlgoBlock

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getGenesisHash()** | **string** | hash to which this block belongs <br>Example: `SGO1GKSzyE7IEPItTxCByw9x8FmnrCDexi9/cOUJOiI=` | [optional]
**getGenesisId()** | **string** | ID to which this block belongs <br>Example: `testnet-v1.0` | [optional]
**getPreviousBlockHash()** | **string** | Previous block hash <br>Example: `JeLGQTbqnBsD3NXE8Bf1TpPFMFadEVVyHhkcD61ljAU=` | [optional]
**getRewards()** | **object** | rewards <br>Example: `{"fee-sink":"A7NMWS3NT3IUDMLVO26ULGXGIIOUQ3ND2TXSER6EBGRZNOBOUIQXHIBGDE","rewards-calculation-round":17000000,"rewards-level":27521,"rewards-pool":"7777777777777777777777777777777777777777777777777774MSJUVU","rewards-rate":0,"rewards-residue":2020197303}` | [optional]
**getRound()** | **float** | Current round on which this block was appended to the chain <br>Example: `16775567` | [optional]
**getSeed()** | **string** | Sortition seed. <br>Example: `VPBpyrHyqbfqrHqJ3l39LXGN4qgEdNnE5kpJfk3vJtA=` | [optional]
**getTimestamp()** | **float** | Block creation timestamp in seconds since eposh <br>Example: `1632167753` | [optional]
**getTxns()** | [**\Tatum\Model\AlgoTx[]**](../AlgoTx) | Array of transactions <br>Example: `null` | [optional]
**getTxn()** | **string** | TransactionsRoot authenticates the set of transactions appearing in the block. <br>Example: `++MWW82yIvYQ0AEoPP0aDGGHGk/dSp5WHlbkf9SVU1U=` | [optional]
**getTxnc()** | **float** | TxnCounter counts the number of transations committed in the ledger <br>Example: `27814470` | [optional]
**getUpgradeState()** | **object** | upgrade state <br>Example: `{"current-protocol":"https://github.com/algorandfoundation/specs/tree/abc54f79f9ad679d2d22f0fb9909fb005c16f8a1","next-protocol-approvals":0,"next-protocol-switch-on":0,"next-protocol-vote-before":0}` | [optional]
**getUpgradeVote()** | **object** | upgrade vote <br>Example: `{"upgrade-approve":false,"upgrade-delay":0}` | [optional]

