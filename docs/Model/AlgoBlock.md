---
title: AlgoBlock
parent: Model
layout: page
---

# AlgoBlock

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getGenesisHash()** | **string** | hash to which this block belongs | ex.: `SGO1GKSzyE7IEPItTxCByw9x8FmnrCDexi9/cOUJOiI&#x3D;` [optional]
**getGenesisId()** | **string** | ID to which this block belongs | ex.: `testnet-v1.0` [optional]
**getPreviousBlockHash()** | **string** | Previous block hash | ex.: `JeLGQTbqnBsD3NXE8Bf1TpPFMFadEVVyHhkcD61ljAU&#x3D;` [optional]
**getRewards()** | **object** | rewards | ex.: `{&quot;fee-sink&quot;:&quot;A7NMWS3NT3IUDMLVO26ULGXGIIOUQ3ND2TXSER6EBGRZNOBOUIQXHIBGDE&quot;,&quot;rewards-calculation-round&quot;:17000000,&quot;rewards-level&quot;:27521,&quot;rewards-pool&quot;:&quot;7777777777777777777777777777777777777777777777777774MSJUVU&quot;,&quot;rewards-rate&quot;:0,&quot;rewards-residue&quot;:2020197303}` [optional]
**getRound()** | **float** | Current round on which this block was appended to the chain | ex.: `16775567` [optional]
**getSeed()** | **string** | Sortition seed. | ex.: `VPBpyrHyqbfqrHqJ3l39LXGN4qgEdNnE5kpJfk3vJtA&#x3D;` [optional]
**getTimestamp()** | **float** | Block creation timestamp in seconds since eposh | ex.: `1632167753` [optional]
**getTxns()** | [**\Tatum\Model\AlgoTx[]**](../AlgoTx) | Array of transactions | ex.: `null` [optional]
**getTxn()** | **string** | TransactionsRoot authenticates the set of transactions appearing in the block. | ex.: `++MWW82yIvYQ0AEoPP0aDGGHGk/dSp5WHlbkf9SVU1U&#x3D;` [optional]
**getTxnc()** | **float** | TxnCounter counts the number of transations committed in the ledger | ex.: `27814470` [optional]
**getUpgradeState()** | **object** | upgrade state | ex.: `{&quot;current-protocol&quot;:&quot;https://github.com/algorandfoundation/specs/tree/abc54f79f9ad679d2d22f0fb9909fb005c16f8a1&quot;,&quot;next-protocol-approvals&quot;:0,&quot;next-protocol-switch-on&quot;:0,&quot;next-protocol-vote-before&quot;:0}` [optional]
**getUpgradeVote()** | **object** | upgrade vote | ex.: `{&quot;upgrade-approve&quot;:false,&quot;upgrade-delay&quot;:0}` [optional]

