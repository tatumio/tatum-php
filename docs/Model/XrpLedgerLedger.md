---
title: XrpLedgerLedger
parent: Model
layout: page
---

# XrpLedgerLedger

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccepted()** | **bool** |  <br>Example: `true` | [optional]
**getAccountHash()** | **string** | Hash of all account state information in this ledger, as hex. <br>Example: `9E081790E520046EBA4B2ED3869C762C16EEAC6817293D40AFFD1F1B602A2321` | [optional]
**getCloseFlags()** | **int** | A bit-map of flags relating to the closing of this ledger. Currently, the ledger has only one flag defined for close_flags: sLCF_NoConsensusTime (value 1). If this flag is enabled, it means that validators were in conflict regarding the correct close time for the ledger, but build otherwise the same ledger, so they declared consensus while "agreeing to disagree" on the close time. In this case, the consensus ledger contains a close_time that is 1 second after that of the previous ledger. (In this case, there is no official close time, but the actual real-world close time is probably 3-6 seconds later than the specified close_time.) <br>Example: `0` | [optional]
**getCloseTime()** | **int** | The time this ledger was closed, in seconds since the Ripple Epoch <br>Example: `640976331` | [optional]
**getCloseTimeHuman()** | **string** | The time this ledger was closed, in human-readable format. Always uses the UTC time zone. <br>Example: `2020-Apr-23 16:58:51.000000000 UTC` | [optional]
**getCloseTimeResolution()** | **int** | Ledger close times are rounded to within this many seconds. <br>Example: `10` | [optional]
**getClosed()** | **bool** | Whether or not this ledger has been closed. <br>Example: `true` | [optional]
**getHash()** | **string** |  <br>Example: `198E3A43EFD03F61CF11EAD6585E8C82A21C1B91CCF782A3264973867E697906` | [optional]
**getLedgerHash()** | **string** | Unique identifying hash of the entire ledger. <br>Example: `198E3A43EFD03F61CF11EAD6585E8C82A21C1B91CCF782A3264973867E697906` | [optional]
**getLedgerIndex()** | **string** | The Ledger Index of this ledger, as a quoted integer. <br>Example: `6543210` | [optional]
**getParentCloseTime()** | **int** | The time at which the previous ledger was closed. <br>Example: `640976330` | [optional]
**getParentHash()** | **string** | Unique identifying hash of the ledger that came immediately before this one. <br>Example: `02860E47A797340505B51DE00E21AA576B1E50509C0C7FF8D5475954DA5FE7B5` | [optional]
**getSeqNum()** | **string** |  <br>Example: `6543210` | [optional]
**getTotalCoins()** | **string** |  <br>Example: `99999971496551645` | [optional]
**getTotalCoins()** | **string** | Total number of XRP drops in the network, as a quoted integer. (This decreases as transaction costs destroy XRP.) <br>Example: `99999971496551645` | [optional]
**getTransactionHash()** | **string** | Hash of the transaction information included in this ledger, as hex. <br>Example: `F415CCAB1ED22B2E81C8BE588A0521634F1CBC478BE3A5563B1E09D283A082C9` | [optional]
**getTransactions()** | [**\Tatum\Model\XrpTx[]**](../XrpTx) |  <br>Example: `null` | [optional]

