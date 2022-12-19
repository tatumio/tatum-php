# LtcTx

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash** | **string** | Transaction hash. | [optional]
**witness_hash** | **string** | Witness hash in case of a SegWit transaction. | [optional]
**fee** | **string** | Fee paid for this transaction, in LTC. | [optional]
**rate** | **string** |  | [optional]
**ps** | **float** |  | [optional]
**block_number** | **float** | Height of the block this transaction belongs to. | [optional]
**block** | **string** | Hash of the block this transaction belongs to. | [optional]
**ts** | **float** | Time of the transaction. | [optional]
**index** | **float** | Index of the transaction in the block. | [optional]
**version** | **float** | Index of the transaction. | [optional]
**flag** | **float** |  | [optional]
**inputs** | [**\Tatum\Model\LtcTxInputsInner[]**](LtcTxInputsInner.md) | List of transactions, from which assets are being sent. | [optional]
**outputs** | [**\Tatum\Model\LtcTxOutputsInner[]**](LtcTxOutputsInner.md) | List of recipient addresses and amounts to send to each of them. | [optional]
**locktime** | **float** | Block this transaction was included in. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
