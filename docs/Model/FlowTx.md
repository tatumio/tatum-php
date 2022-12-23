# FlowTx

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getReferenceBlockId()** | **string** | Id of the block | [optional]
**getScript()** | **string** | Script to execute in the transaction | [optional]
**getArgs()** | [**\Tatum\Model\FlowTxArgsInner[]**](FlowTxArgsInner.md) | Args to the transaction | [optional]
**getGasLimit()** | **float** | Gas limit for the transaction | [optional]
**getProposalKey()** | [**\Tatum\Model\FlowTxProposalKey**](FlowTxProposalKey.md) |  | [optional]
**getPayer()** | **string** | Address from which the assets and fees were debited | [optional]
**getPayloadSignatures()** | [**\Tatum\Model\FlowTxPayloadSignaturesInner[]**](FlowTxPayloadSignaturesInner.md) | Array of payload signatures. | [optional]
**getEnvelopeSignatures()** | [**\Tatum\Model\FlowTxPayloadSignaturesInner[]**](FlowTxPayloadSignaturesInner.md) | Array of envelope signatures. | [optional]
**getStatus()** | **float** | Status of the transaction | [optional]
**getStatusCode()** | **float** | Status cofe of the transaction | [optional]
**getErrorMessage()** | **string** |  | [optional]
**getEvents()** | [**\Tatum\Model\FlowTxEventsInner[]**](FlowTxEventsInner.md) |  | [optional]

[[Back to Index]](../index.md)
