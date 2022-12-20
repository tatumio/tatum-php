# XrpAccountAccountData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **string** | The identifying address of this account, such as rf1BiGeXwwQoi8Z2ueFYTEXSwuJYfV2Jpn. | [optional]
**balance** | **string** | The account's current XRP balance in drops, represented as a string. | [optional]
**flags** | **float** | A bit-map of boolean flags enabled for this account. | [optional]
**ledger_entry_type** | **string** | The value 0x0061, mapped to the string AccountRoot, indicates that this is an AccountRoot object. | [optional]
**owner_count** | **float** | The number of objects this account owns in the ledger, which contributes to its owner reserve. | [optional]
**previous_txn_id** | **string** | The identifying hash of the transaction that most recently modified this object. | [optional]
**previous_txn_lgr_seq** | **float** | The index of the ledger that contains the transaction that most recently modified this object. | [optional]
**sequence** | **float** | The sequence number of the next valid transaction for this account. (Each account starts with Sequence = 1 and increases each time a transaction is made.) | [optional]
**index** | **string** |  | [optional]

[[Back to Index]](../index.md)
