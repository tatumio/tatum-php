---
title: EthGasEstimationBatchResult
parent: Model
layout: page
---

# EthGasEstimationBatchResult

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getError()** | **bool** | If estimation succeeded. <br>Example: `false` |
**getContractAddress()** | **string** | Contract address of ERC20 token, if transaction is ERC20 token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` | [optional]
**getData()** | [**\Tatum\Model\EthGasEstimationBatchResultData**](../EthGasEstimationBatchResultData) |  <br>Example: `null` | [optional]
**getMsg()** | **string** | Error message. Present only if error - true. <br>Example: `Provided address 0xt16360210b423d3a5205923d6e64a2d142d9f426 is invalid, the capitalization checksum test failed, or it&#39;s an indirect IBAN address which can&#39;t be converted.` | [optional]

