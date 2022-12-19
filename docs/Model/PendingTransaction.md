# PendingTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the pending transaction |
**chain** | **string** | Blockchain of the transaction |
**hashes** | **string[]** | List of the signature Ids to be used to sign transaction. Those hashes should be in order of signing for the BTC, LTC or BCH blockchains. |
**serialized_transaction** | **string** | Serialized data of the transaction to be signed. It can be JSON, HEX or any other representation based on the blockchain. |
**withdrawal_id** | **string** | ID of the pending off-chain withdrawal connected to this transaction | [optional]
**index** | **float** | In case of mnemonic type of signature Id, this is the index to the specific account that should be used for signature. | [optional]
**tx_id** | **string** | TX hash of successful transaction. | [optional]
**withdrawal_responses** | [**\Tatum\Model\ResponseData[]**](ResponseData.md) | Additional information used for BTC, LTC, DOGE and BCH off-chain to blockchain transactions. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
