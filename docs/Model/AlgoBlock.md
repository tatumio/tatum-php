# AlgoBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**genesis_hash** | **string** | hash to which this block belongs | [optional]
**genesis_id** | **string** | ID to which this block belongs | [optional]
**previous_block_hash** | **string** | Previous block hash | [optional]
**rewards** | **object** | rewards | [optional]
**round** | **float** | Current round on which this block was appended to the chain | [optional]
**seed** | **string** | Sortition seed. | [optional]
**timestamp** | **float** | Block creation timestamp in seconds since eposh | [optional]
**txns** | [**\Tatum\Model\AlgoTx[]**](AlgoTx.md) | Array of transactions | [optional]
**txn** | **string** | TransactionsRoot authenticates the set of transactions appearing in the block. | [optional]
**txnc** | **float** | TxnCounter counts the number of transations committed in the ledger | [optional]
**upgrade_state** | **object** | upgrade state | [optional]
**upgrade_vote** | **object** | upgrade vote | [optional]

[[Back to API list]](../../README.md#api-endpoints)
