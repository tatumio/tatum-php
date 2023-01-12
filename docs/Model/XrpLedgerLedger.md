# XrpLedgerLedger

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccepted()** | **bool** |  | [optional]
**getAccountHash()** | **string** | Hash of all account state information in this ledger, as hex. | [optional]
**getCloseFlags()** | **int** | A bit-map of flags relating to the closing of this ledger. Currently, the ledger has only one flag defined for close_flags: sLCF_NoConsensusTime (value 1). If this flag is enabled, it means that validators were in conflict regarding the correct close time for the ledger, but build otherwise the same ledger, so they declared consensus while "agreeing to disagree" on the close time. In this case, the consensus ledger contains a close_time that is 1 second after that of the previous ledger. (In this case, there is no official close time, but the actual real-world close time is probably 3-6 seconds later than the specified close_time.) | [optional]
**getCloseTime()** | **int** | The time this ledger was closed, in seconds since the Ripple Epoch | [optional]
**getCloseTimeHuman()** | **string** | The time this ledger was closed, in human-readable format. Always uses the UTC time zone. | [optional]
**getCloseTimeResolution()** | **int** | Ledger close times are rounded to within this many seconds. | [optional]
**getClosed()** | **bool** | Whether or not this ledger has been closed. | [optional]
**getHash()** | **string** |  | [optional]
**getLedgerHash()** | **string** | Unique identifying hash of the entire ledger. | [optional]
**getLedgerIndex()** | **string** | The Ledger Index of this ledger, as a quoted integer. | [optional]
**getParentCloseTime()** | **int** | The time at which the previous ledger was closed. | [optional]
**getParentHash()** | **string** | Unique identifying hash of the ledger that came immediately before this one. | [optional]
**getSeqNum()** | **string** |  | [optional]
**getTotalCoins()** | **string** |  | [optional]
**getTotalCoins()** | **string** | Total number of XRP drops in the network, as a quoted integer. (This decreases as transaction costs destroy XRP.) | [optional]
**getTransactionHash()** | **string** | Hash of the transaction information included in this ledger, as hex. | [optional]
**getTransactions()** | [**\Tatum\Model\XrpTx[]**](XrpTx.md) |  | [optional]

[[Back to Index]](../index.md)
