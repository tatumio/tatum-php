# NftGetTransactErc721200Response

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getBlockHash()** | **string** | Hash of the block where this transaction was in. | [optional]
**getStatus()** | **float** | Status of the transaction | [optional]
**getBlockNumber()** | **mixed** | Block number where this transaction was in. | [optional]
**getFrom()** | **string** | Address of the sender. | [optional]
**getGas()** | **float** | Gas provided by the sender. | [optional]
**getGasPrice()** | **string** | Gas price provided by the sender in wei. | [optional]
**getTransactionHash()** | **string** | Hash of the transaction. | [optional]
**getInput()** | **string** | The data sent along with the transaction. | [optional]
**getNonce()** | **float** | The number of transactions made by the sender prior to this one. | [optional]
**getTo()** | **string** | Address of the receiver. 'null' when its a contract creation transaction. | [optional]
**getTransactionIndex()** | **mixed** | Integer of the transactions index position in the block. | [optional]
**getValue()** | **string** | Value transferred in wei. | [optional]
**getGasUsed()** | **mixed** | The amount of gas used by this specific transaction alone. | [optional]
**getCumulativeGasUsed()** | **mixed** | The total amount of gas used when this transaction was executed in the block. | [optional]
**getContractAddress()** | **string** | The contract address created, if the transaction was a contract creation, otherwise null. | [optional]
**getLogs()** | [**\Tatum\Model\EthTxLog[]**](EthTxLog.md) | Log events, that happened in this transaction. | [optional]
**getReferenceBlockId()** | **string** | Id of the block | [optional]
**getScript()** | **string** | Script to execute in the transaction | [optional]
**getArgs()** | [**\Tatum\Model\FlowTxArgsInner[]**](FlowTxArgsInner.md) | Args to the transaction | [optional]
**getGasLimit()** | **float** | Gas limit for the transaction | [optional]
**getProposalKey()** | [**\Tatum\Model\FlowTxProposalKey**](FlowTxProposalKey.md) |  | [optional]
**getPayer()** | **string** | Address from which the assets and fees were debited | [optional]
**getPayloadSignatures()** | [**\Tatum\Model\FlowTxPayloadSignaturesInner[]**](FlowTxPayloadSignaturesInner.md) | Array of payload signatures. | [optional]
**getEnvelopeSignatures()** | [**\Tatum\Model\FlowTxPayloadSignaturesInner[]**](FlowTxPayloadSignaturesInner.md) | Array of envelope signatures. | [optional]
**getStatusCode()** | **float** | Status cofe of the transaction | [optional]
**getErrorMessage()** | **string** |  | [optional]
**getEvents()** | [**\Tatum\Model\FlowTxEventsInner[]**](FlowTxEventsInner.md) |  | [optional]

[[Back to Index]](../index.md)
