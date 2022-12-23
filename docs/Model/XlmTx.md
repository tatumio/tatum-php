# XlmTx

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | A unique identifier for this transaction. | [optional]
**getPagingToken()** | **string** | A cursor value for use in pagination. | [optional]
**getSuccessful()** | **bool** | Indicates if this transaction was successful or not. | [optional]
**getHash()** | **string** | A hex-encoded SHA-256 hash of this transaction’s XDR-encoded form. | [optional]
**getLedger()** | **float** | The sequence number of the ledger that this transaction was included in. | [optional]
**getCreatedAt()** | **string** | The date this transaction was created. | [optional]
**getSourceAccount()** | **string** | The account that originates the transaction. | [optional]
**getSourceAccountSequence()** | **string** | The source account’s sequence number that this transaction consumed. | [optional]
**getFeePaid()** | **float** | The fee (in stroops) paid by the source account to apply this transaction to the ledger. | [optional]
**getFeeCharged()** | **float** |  | [optional]
**getMaxFee()** | **float** | The maximum fee (in stroops) that the source account was willing to pay. | [optional]
**getOperationCount()** | **float** | The number of operations contained within this transaction. | [optional]
**getEnvelopeXdr()** | **string** | A base64 encoded string of the raw TransactionEnvelope XDR struct for this transaction. | [optional]
**getResultXdr()** | **string** | A base64 encoded string of the raw TransactionResult XDR struct for this transaction. | [optional]
**getResultMetaXdr()** | **string** | A base64 encoded string of the raw TransactionMeta XDR struct for this transaction | [optional]
**getFeeMetaXdr()** | **string** | A base64 encoded string of the raw LedgerEntryChanges XDR struct produced by taking fees for this transaction. | [optional]
**getMemo()** | **string** | The optional memo attached to a transaction. Usually used as an account distiguisher. | [optional]
**getMemoType()** | **string** | The type of memo. | [optional]
**getSignatures()** | **string[]** | An array of signatures used to sign this transaction. | [optional]

[[Back to Index]](../index.md)
