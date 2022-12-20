# NftGetTransactErc721200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**block_hash** | **string** | Hash of the block where this transaction was in. | [optional]
**status** | **float** | Status of the transaction | [optional]
**block_number** | **mixed** | Block number where this transaction was in. | [optional]
**from** | **string** | Address of the sender. | [optional]
**gas** | **float** | Gas provided by the sender. | [optional]
**gas_price** | **string** | Gas price provided by the sender in wei. | [optional]
**transaction_hash** | **string** | Hash of the transaction. | [optional]
**input** | **string** | The data sent along with the transaction. | [optional]
**nonce** | **float** | The number of transactions made by the sender prior to this one. | [optional]
**to** | **string** | Address of the receiver. &#39;null&#39; when its a contract creation transaction. | [optional]
**transaction_index** | **mixed** | Integer of the transactions index position in the block. | [optional]
**value** | **string** | Value transferred in wei. | [optional]
**gas_used** | **mixed** | The amount of gas used by this specific transaction alone. | [optional]
**cumulative_gas_used** | **mixed** | The total amount of gas used when this transaction was executed in the block. | [optional]
**contract_address** | **string** | The contract address created, if the transaction was a contract creation, otherwise null. | [optional]
**logs** | [**\Tatum\Model\EthTxLog[]**](EthTxLog.md) | Log events, that happened in this transaction. | [optional]
**reference_block_id** | **string** | Id of the block | [optional]
**script** | **string** | Script to execute in the transaction | [optional]
**args** | [**\Tatum\Model\FlowTxArgsInner[]**](FlowTxArgsInner.md) | Args to the transaction | [optional]
**gas_limit** | **float** | Gas limit for the transaction | [optional]
**proposal_key** | [**\Tatum\Model\FlowTxProposalKey**](FlowTxProposalKey.md) |  | [optional]
**payer** | **string** | Address from which the assets and fees were debited | [optional]
**payload_signatures** | [**\Tatum\Model\FlowTxPayloadSignaturesInner[]**](FlowTxPayloadSignaturesInner.md) | Array of payload signatures. | [optional]
**envelope_signatures** | [**\Tatum\Model\FlowTxPayloadSignaturesInner[]**](FlowTxPayloadSignaturesInner.md) | Array of envelope signatures. | [optional]
**status_code** | **float** | Status cofe of the transaction | [optional]
**error_message** | **string** |  | [optional]
**events** | [**\Tatum\Model\FlowTxEventsInner[]**](FlowTxEventsInner.md) |  | [optional]

[[Back to Index]](../index.md)
