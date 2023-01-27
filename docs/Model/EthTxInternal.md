---
title: EthTxInternal
parent: Model
layout: page
---

# EthTxInternal

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Address of the sender. <br>Example: `0x81b7E08F65Bdf5648606c89998A9CC8164397647` | [optional]
**getTo()** | **string** | Address of the receiver. 'null' when its a contract creation transaction. <br>Example: `0xbC546fa1716Ed886967cf73f40e8F2F5e623a92d` | [optional]
**getValue()** | **string** | Value transferred in wei. <br>Example: `1000000000000000000` | [optional]
**getBlockNumber()** | **float** | Block number where this transaction was in. <br>Example: `6470854` | [optional]
**getTimeStamp()** | **string** | Time of the transaction in seconds. <br>Example: `1477837690` | [optional]
**getHash()** | **string** | Hash of the transaction. <br>Example: `0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7` | [optional]
**getInput()** | **string** | The data sent along with the transaction. <br>Example: `` | [optional]
**getTraceId()** | **string** | Trace ID. <br>Example: `0` | [optional]
**getType()** | **string** | Type of the transaction. <br>Example: `create` | [optional]
**getErrCode()** | **string** | Error code. <br>Example: `Bad jump destination` | [optional]
**getGas()** | **float** | Gas provided by the sender. <br>Example: `21000` | [optional]
**getIsError()** | **string** | 1 if the transaction was not successful, 0 otherwise. <br>Example: `0` | [optional]
**getGasUsed()** | **float** | The amount of gas used by this specific transaction alone. <br>Example: `21000` | [optional]
**getContractAddress()** | **string** | The contract address created, if the transaction was a contract creation, otherwise null. <br>Example: `0x81b7E08F65Bdf5648606c89998A9CC8164397647` | [optional]

