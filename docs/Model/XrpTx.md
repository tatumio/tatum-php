# XrpTx

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash** | **string** | The SHA-512 hash of the transaction | [optional]
**ledger_index** | **float** | The ledger index of the ledger that includes this transaction. | [optional]
**account** | **string** | The unique address of the account that initiated the transaction. | [optional]
**amount** | **string** | Amount of transaction, in drops. 1 drop &#x3D; 0.000001 XRP. | [optional]
**destination** | **string** | Recipient account address. | [optional]
**fee** | **string** | Integer amount of XRP, in drops, to be destroyed as a cost for distributing this transaction to the network. Some transaction types have different minimum requirements. | [optional]
**transaction_type** | **string** | Type of the transaction. XRp supports more than 18 transaction types. For the payment, Payment type is used. | [optional]
**flags** | **float** | Set of bit-flags for this transaction. | [optional]
**last_ledger_sequence** | **float** | Last ledger, in which this transaction could have occured. | [optional]
**sequence** | **float** | The sequence number of the account sending the transaction. A transaction is only valid if the Sequence number is exactly 1 greater than the previous transaction from the same account. | [optional]
**date** | **float** | Timestamp of the transaction, in Ripple epoch (946684800 seconds after Unix Epoch) | [optional]
**in_ledger** | **float** | Ledger, in which transaction took place. | [optional]
**signing_pub_key** | **string** |  | [optional]
**txn_signature** | **string** |  | [optional]
**meta** | [**\Tatum\Model\XrpTxMeta**](XrpTxMeta.md) |  | [optional]
**validated** | **bool** | Whether or not the transaction is included in a validated ledger. Any transaction not yet in a validated ledger is subject to change. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
