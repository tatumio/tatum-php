# XrpTx

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | The SHA-512 hash of the transaction | [optional]
**getLedgerIndex()** | **float** | The ledger index of the ledger that includes this transaction. | [optional]
**getAccount()** | **string** | The unique address of the account that initiated the transaction. | [optional]
**getAmount()** | **string** | Amount of transaction, in drops. 1 drop = 0.000001 XRP. | [optional]
**getDestination()** | **string** | Recipient account address. | [optional]
**getFee()** | **string** | Integer amount of XRP, in drops, to be destroyed as a cost for distributing this transaction to the network. Some transaction types have different minimum requirements. | [optional]
**getTransactionType()** | **string** | Type of the transaction. XRp supports more than 18 transaction types. For the payment, Payment type is used. | [optional]
**getFlags()** | **float** | Set of bit-flags for this transaction. | [optional]
**getLastLedgerSequence()** | **float** | Last ledger, in which this transaction could have occured. | [optional]
**getSequence()** | **float** | The sequence number of the account sending the transaction. A transaction is only valid if the Sequence number is exactly 1 greater than the previous transaction from the same account. | [optional]
**getDate()** | **float** | Timestamp of the transaction, in Ripple epoch (946684800 seconds after Unix Epoch) | [optional]
**getInLedger()** | **float** | Ledger, in which transaction took place. | [optional]
**getSigningPubKey()** | **string** |  | [optional]
**getTxnSignature()** | **string** |  | [optional]
**getMeta()** | [**\Tatum\Model\XrpTxMeta**](XrpTxMeta.md) |  | [optional]
**getValidated()** | **bool** | Whether or not the transaction is included in a validated ledger. Any transaction not yet in a validated ledger is subject to change. | [optional]

[[Back to Index]](../index.md)
