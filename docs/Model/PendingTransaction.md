# PendingTransaction

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | ID of the pending transaction |
**getChain()** | **string** | Blockchain of the transaction |
**getHashes()** | **string[]** | List of the signature Ids to be used to sign transaction. Those hashes should be in order of signing for the BTC, LTC or BCH blockchains. |
**getSerializedTransaction()** | **string** | Serialized data of the transaction to be signed. It can be JSON, HEX or any other representation based on the blockchain. |
**getWithdrawalId()** | **string** | ID of the pending off-chain withdrawal connected to this transaction | [optional]
**getIndex()** | **float** | In case of mnemonic type of signature Id, this is the index to the specific account that should be used for signature. | [optional]
**getTxId()** | **string** | TX hash of successful transaction. | [optional]
**getWithdrawalResponses()** | [**\Tatum\Model\ResponseData[]**](ResponseData.md) | Additional information used for BTC, LTC, DOGE and BCH off-chain to blockchain transactions. | [optional]

[[Back to Index]](../index.md)
