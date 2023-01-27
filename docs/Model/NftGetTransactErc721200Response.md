---
title: NftGetTransactErc721200Response
parent: Model
layout: page
---

# NftGetTransactErc721200Response

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getBlockHash()** | **string** | Hash of the block where this transaction was in. <br>Example: `0xcf2c40f475e78c7c19778e1ae999a0e371c9319b38182ea15dc94536f13f9137` | [optional]
**getStatus()** | **float** | Status of the transaction <br>Example: `4` | [optional]
**getBlockNumber()** | **mixed** | Block number where this transaction was in. <br>Example: `6470854` | [optional]
**getFrom()** | **string** | Address of the sender. <br>Example: `0x81b7E08F65Bdf5648606c89998A9CC8164397647` | [optional]
**getGas()** | **float** | Gas provided by the sender. <br>Example: `21000` | [optional]
**getGasPrice()** | **string** | Gas price provided by the sender in wei. <br>Example: `1000000000` | [optional]
**getTransactionHash()** | **string** | Hash of the transaction. <br>Example: `0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7` | [optional]
**getInput()** | **string** | The data sent along with the transaction. <br>Example: `0x` | [optional]
**getNonce()** | **float** | The number of transactions made by the sender prior to this one. <br>Example: `26836405` | [optional]
**getTo()** | **string** | Address of the receiver. 'null' when its a contract creation transaction. <br>Example: `0xbC546fa1716Ed886967cf73f40e8F2F5e623a92d` | [optional]
**getTransactionIndex()** | **mixed** | Integer of the transactions index position in the block. <br>Example: `3` | [optional]
**getValue()** | **string** | Value transferred in wei. <br>Example: `1000000000000000000` | [optional]
**getGasUsed()** | **mixed** | The amount of gas used by this specific transaction alone. <br>Example: `21000` | [optional]
**getCumulativeGasUsed()** | **mixed** | The total amount of gas used when this transaction was executed in the block. <br>Example: `314159` | [optional]
**getContractAddress()** | **string** | The contract address created, if the transaction was a contract creation, otherwise null. <br>Example: `0x81b7E08F65Bdf5648606c89998A9CC8164397647` | [optional]
**getLogs()** | [**\Tatum\Model\EthTxLog[]**](../EthTxLog) | Log events, that happened in this transaction. <br>Example: `null` | [optional]
**getReferenceBlockId()** | **string** | Id of the block <br>Example: `ad8b9ab637d56e19188cd5410db6e993fbf66216296c99f7934cf9f3594f9658` | [optional]
**getScript()** | **string** | Script to execute in the transaction <br>Example: `null` | [optional]
**getArgs()** | [**\Tatum\Model\FlowTxArgsInner[]**](../FlowTxArgsInner) | Args to the transaction <br>Example: `null` | [optional]
**getGasLimit()** | **float** | Gas limit for the transaction <br>Example: `1000` | [optional]
**getProposalKey()** | [**\Tatum\Model\FlowTxProposalKey**](../FlowTxProposalKey) |  <br>Example: `null` | [optional]
**getPayer()** | **string** | Address from which the assets and fees were debited <br>Example: `955cd3f17b2fd8ad` | [optional]
**getPayloadSignatures()** | [**\Tatum\Model\FlowTxPayloadSignaturesInner[]**](../FlowTxPayloadSignaturesInner) | Array of payload signatures. <br>Example: `null` | [optional]
**getEnvelopeSignatures()** | [**\Tatum\Model\FlowTxPayloadSignaturesInner[]**](../FlowTxPayloadSignaturesInner) | Array of envelope signatures. <br>Example: `null` | [optional]
**getStatusCode()** | **float** | Status cofe of the transaction <br>Example: `0` | [optional]
**getErrorMessage()** | **string** |  <br>Example: `null` | [optional]
**getEvents()** | [**\Tatum\Model\FlowTxEventsInner[]**](../FlowTxEventsInner) |  <br>Example: `null` | [optional]

