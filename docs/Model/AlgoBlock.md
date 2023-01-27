---
title: AlgoBlock
parent: Model
layout: page
---

# AlgoBlock

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getGenesisHash()** | **string** | hash to which this block belongs <br>Example: `SGO1GKSzyE7IEPItTxCByw9x8FmnrCDexi9/cOUJOiI&#x3D;` | [optional]
**getGenesisId()** | **string** | ID to which this block belongs <br>Example: `testnet-v1.0` | [optional]
**getPreviousBlockHash()** | **string** | Previous block hash <br>Example: `JeLGQTbqnBsD3NXE8Bf1TpPFMFadEVVyHhkcD61ljAU&#x3D;` | [optional]
**getRewards()** | **object** | rewards <br>Example: `{&quot;fee-sink&quot;:&quot;A7NMWS3NT3IUDMLVO26ULGXGIIOUQ3ND2TXSER6EBGRZNOBOUIQXHIBGDE&quot;,&quot;rewards-calculation-round&quot;:17000000,&quot;rewards-level&quot;:27521,&quot;rewards-pool&quot;:&quot;7777777777777777777777777777777777777777777777777774MSJUVU&quot;,&quot;rewards-rate&quot;:0,&quot;rewards-residue&quot;:2020197303}` | [optional]
**getRound()** | **float** | Current round on which this block was appended to the chain <br>Example: `16775567` | [optional]
**getSeed()** | **string** | Sortition seed. <br>Example: `VPBpyrHyqbfqrHqJ3l39LXGN4qgEdNnE5kpJfk3vJtA&#x3D;` | [optional]
**getTimestamp()** | **float** | Block creation timestamp in seconds since eposh <br>Example: `1632167753` | [optional]
**getTxns()** | [**\Tatum\Model\AlgoTx[]**](../AlgoTx) | Array of transactions <br>Example: `null` | [optional]
**getTxn()** | **string** | TransactionsRoot authenticates the set of transactions appearing in the block. <br>Example: `++MWW82yIvYQ0AEoPP0aDGGHGk/dSp5WHlbkf9SVU1U&#x3D;` | [optional]
**getTxnc()** | **float** | TxnCounter counts the number of transations committed in the ledger <br>Example: `27814470` | [optional]
**getUpgradeState()** | **object** | upgrade state <br>Example: `{&quot;current-protocol&quot;:&quot;https://github.com/algorandfoundation/specs/tree/abc54f79f9ad679d2d22f0fb9909fb005c16f8a1&quot;,&quot;next-protocol-approvals&quot;:0,&quot;next-protocol-switch-on&quot;:0,&quot;next-protocol-vote-before&quot;:0}` | [optional]
**getUpgradeVote()** | **object** | upgrade vote <br>Example: `{&quot;upgrade-approve&quot;:false,&quot;upgrade-delay&quot;:0}` | [optional]

