# LtcTx

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Transaction hash. | [optional]
**getWitnessHash()** | **string** | Witness hash in case of a SegWit transaction. | [optional]
**getFee()** | **string** | Fee paid for this transaction, in LTC. | [optional]
**getRate()** | **string** |  | [optional]
**getPs()** | **float** |  | [optional]
**getBlockNumber()** | **float** | Height of the block this transaction belongs to. | [optional]
**getBlock()** | **string** | Hash of the block this transaction belongs to. | [optional]
**getTs()** | **float** | Time of the transaction. | [optional]
**getIndex()** | **float** | Index of the transaction in the block. | [optional]
**getVersion()** | **float** | Index of the transaction. | [optional]
**getFlag()** | **float** |  | [optional]
**getInputs()** | [**\Tatum\Model\LtcTxInputsInner[]**](LtcTxInputsInner.md) | List of transactions, from which assets are being sent. | [optional]
**getOutputs()** | [**\Tatum\Model\LtcTxOutputsInner[]**](LtcTxOutputsInner.md) | List of recipient addresses and amounts to send to each of them. | [optional]
**getLocktime()** | **float** | Block this transaction was included in. | [optional]

[[Back to Index]](../index.md)
