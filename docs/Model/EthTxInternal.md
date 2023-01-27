---
title: EthTxInternal
parent: Model
layout: page
---

# EthTxInternal

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Address of the sender. | ex.: `0x81b7E08F65Bdf5648606c89998A9CC8164397647` [optional]
**getTo()** | **string** | Address of the receiver. 'null' when its a contract creation transaction. | ex.: `0xbC546fa1716Ed886967cf73f40e8F2F5e623a92d` [optional]
**getValue()** | **string** | Value transferred in wei. | ex.: `1000000000000000000` [optional]
**getBlockNumber()** | **float** | Block number where this transaction was in. | ex.: `6470854` [optional]
**getTimeStamp()** | **string** | Time of the transaction in seconds. | ex.: `1477837690` [optional]
**getHash()** | **string** | Hash of the transaction. | ex.: `0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7` [optional]
**getInput()** | **string** | The data sent along with the transaction. | ex.: `` [optional]
**getTraceId()** | **string** | Trace ID. | ex.: `0` [optional]
**getType()** | **string** | Type of the transaction. | ex.: `create` [optional]
**getErrCode()** | **string** | Error code. | ex.: `Bad jump destination` [optional]
**getGas()** | **float** | Gas provided by the sender. | ex.: `21000` [optional]
**getIsError()** | **string** | 1 if the transaction was not successful, 0 otherwise. | ex.: `0` [optional]
**getGasUsed()** | **float** | The amount of gas used by this specific transaction alone. | ex.: `21000` [optional]
**getContractAddress()** | **string** | The contract address created, if the transaction was a contract creation, otherwise null. | ex.: `0x81b7E08F65Bdf5648606c89998A9CC8164397647` [optional]

