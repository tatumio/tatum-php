# XlmLedger

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier for this ledger. | [optional]
**paging_token** | **string** | A cursor value for use in pagination. | [optional]
**hash** | **string** | A hex-encoded SHA-256 hash of this ledger’s XDR-encoded form. | [optional]
**sequence** | **float** | The sequence number of this ledger, and the parameter used in Horizon calls that require a ledger number. | [optional]
**successful_transaction_count** | **float** | The number of successful transactions in this ledger. | [optional]
**failed_transaction_count** | **float** | The number of failed transactions in this ledger. | [optional]
**operation_count** | **float** | The number of operations applied in this ledger. | [optional]
**closed_at** | **string** | An ISO 8601 formatted string of when this ledger was closed. | [optional]
**total_coins** | **string** | The total number of lumens in circulation. | [optional]
**fee_pool** | **string** | The sum of all transaction fees. | [optional]
**base_fee_in_stroops** | **float** | The fee the network charges per operation in a transaction. | [optional]
**base_reserve_in_stroops** | **float** | The reserve the network uses when calculating an account’s minimum balance. | [optional]
**max_tx_set_size** | **float** | The maximum number of transactions validators have agreed to process in a given ledger. | [optional]
**protocol_version** | **float** | The protocol version that the Stellar network was running when this ledger was committed. | [optional]
**header_xdr** | **string** | A base64 encoded string of the raw LedgerHeader xdr struct for this ledger. | [optional]

[[Back to Index]](../index.md)
