---
title: XlmLedger
parent: Model
layout: page
---

# XlmLedger

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | A unique identifier for this ledger. <br>Example: `63d98f536ee68d1b27b5b89f23af5311b7569a24faf1403ad0b52b633b07be99` | [optional]
**getPagingToken()** | **string** | A cursor value for use in pagination. <br>Example: `4294967296` | [optional]
**getHash()** | **string** | A hex-encoded SHA-256 hash of this ledger’s XDR-encoded form. <br>Example: `63d98f536ee68d1b27b5b89f23af5311b7569a24faf1403ad0b52b633b07be99` | [optional]
**getSequence()** | **float** | The sequence number of this ledger, and the parameter used in Horizon calls that require a ledger number. <br>Example: `1` | [optional]
**getSuccessfulTransactionCount()** | **float** | The number of successful transactions in this ledger. <br>Example: `0` | [optional]
**getFailedTransactionCount()** | **float** | The number of failed transactions in this ledger. <br>Example: `0` | [optional]
**getOperationCount()** | **float** | The number of operations applied in this ledger. <br>Example: `0` | [optional]
**getClosedAt()** | **string** | An ISO 8601 formatted string of when this ledger was closed. <br>Example: `1970-01-01T00:00:00Z` | [optional]
**getTotalCoins()** | **string** | The total number of lumens in circulation. <br>Example: `100000000000.0000000` | [optional]
**getFeePool()** | **string** | The sum of all transaction fees. <br>Example: `0.0000000` | [optional]
**getBaseFeeInStroops()** | **float** | The fee the network charges per operation in a transaction. <br>Example: `100` | [optional]
**getBaseReserveInStroops()** | **float** | The reserve the network uses when calculating an account’s minimum balance. <br>Example: `100000000` | [optional]
**getMaxTxSetSize()** | **float** | The maximum number of transactions validators have agreed to process in a given ledger. <br>Example: `100` | [optional]
**getProtocolVersion()** | **float** | The protocol version that the Stellar network was running when this ledger was committed. <br>Example: `0` | [optional]
**getHeaderXdr()** | **string** | A base64 encoded string of the raw LedgerHeader xdr struct for this ledger. <br>Example: `AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABXKi4y/ySKB7DnD9H20xjB+s0gtswIwz1XdSWYaBJaFgAAAAEN4Lazp2QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZAX14QAAAABkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA` | [optional]

