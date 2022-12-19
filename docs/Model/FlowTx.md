# FlowTx

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference_block_id** | **string** | Id of the block | [optional]
**script** | **string** | Script to execute in the transaction | [optional]
**args** | [**\Tatum\Model\FlowTxArgsInner[]**](FlowTxArgsInner.md) | Args to the transaction | [optional]
**gas_limit** | **float** | Gas limit for the transaction | [optional]
**proposal_key** | [**\Tatum\Model\FlowTxProposalKey**](FlowTxProposalKey.md) |  | [optional]
**payer** | **string** | Address from which the assets and fees were debited | [optional]
**payload_signatures** | [**\Tatum\Model\FlowTxPayloadSignaturesInner[]**](FlowTxPayloadSignaturesInner.md) | Array of payload signatures. | [optional]
**envelope_signatures** | [**\Tatum\Model\FlowTxPayloadSignaturesInner[]**](FlowTxPayloadSignaturesInner.md) | Array of envelope signatures. | [optional]
**status** | **float** | Status of the transaction | [optional]
**status_code** | **float** | Status cofe of the transaction | [optional]
**error_message** | **string** |  | [optional]
**events** | [**\Tatum\Model\FlowTxEventsInner[]**](FlowTxEventsInner.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
