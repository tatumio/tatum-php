# BtcTx

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash** | **string** | Transaction hash. | [optional]
**hex** | **string** | Transaction hex. | [optional]
**witness_hash** | **string** | Witness hash in case of a SegWit transaction. | [optional]
**fee** | **float** | Fee paid for this transaction, in satoshis. | [optional]
**rate** | **float** |  | [optional]
**mtime** | **float** |  | [optional]
**block_number** | **float** | Height of the block this transaction belongs to. | [optional]
**block** | **string** | Hash of the block this transaction belongs to. | [optional]
**time** | **float** | Time of the transaction. | [optional]
**index** | **float** | Index of the transaction in the block. | [optional]
**version** | **float** | Index of the transaction. | [optional]
**inputs** | [**\Tatum\Model\BtcTxInput[]**](BtcTxInput.md) | List of transactions, from which assets are being sent. | [optional]
**outputs** | [**\Tatum\Model\BtcTxOutput[]**](BtcTxOutput.md) | List of recipient addresses and amounts to send to each of them. | [optional]
**locktime** | **float** | Block this transaction was included in. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
