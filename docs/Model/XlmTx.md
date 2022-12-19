# XlmTx

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier for this transaction. | [optional]
**paging_token** | **string** | A cursor value for use in pagination. | [optional]
**successful** | **bool** | Indicates if this transaction was successful or not. | [optional]
**hash** | **string** | A hex-encoded SHA-256 hash of this transaction’s XDR-encoded form. | [optional]
**ledger** | **float** | The sequence number of the ledger that this transaction was included in. | [optional]
**created_at** | **string** | The date this transaction was created. | [optional]
**source_account** | **string** | The account that originates the transaction. | [optional]
**source_account_sequence** | **string** | The source account’s sequence number that this transaction consumed. | [optional]
**fee_paid** | **float** | The fee (in stroops) paid by the source account to apply this transaction to the ledger. | [optional]
**fee_charged** | **float** |  | [optional]
**max_fee** | **float** | The maximum fee (in stroops) that the source account was willing to pay. | [optional]
**operation_count** | **float** | The number of operations contained within this transaction. | [optional]
**envelope_xdr** | **string** | A base64 encoded string of the raw TransactionEnvelope XDR struct for this transaction. | [optional]
**result_xdr** | **string** | A base64 encoded string of the raw TransactionResult XDR struct for this transaction. | [optional]
**result_meta_xdr** | **string** | A base64 encoded string of the raw TransactionMeta XDR struct for this transaction | [optional]
**fee_meta_xdr** | **string** | A base64 encoded string of the raw LedgerEntryChanges XDR struct produced by taking fees for this transaction. | [optional]
**memo** | **string** | The optional memo attached to a transaction. Usually used as an account distiguisher. | [optional]
**memo_type** | **string** | The type of memo. | [optional]
**signatures** | **string[]** | An array of signatures used to sign this transaction. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
