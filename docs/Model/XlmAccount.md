# XlmAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier for this account. | [optional]
**account_id** | **string** | This account’s public key encoded in a base32 string representation. | [optional]
**sequence** | **string** | This account’s current sequence number. For use when submitting this account’s next transaction. | [optional]
**subentry_count** | **float** | The number of subentries on this account. | [optional]
**last_modified_ledger** | **float** | The ID of the last ledger that included changes to this account. | [optional]
**thresholds** | [**\Tatum\Model\XlmAccountThresholds**](XlmAccountThresholds.md) |  | [optional]
**flags** | [**\Tatum\Model\XlmAccountFlags**](XlmAccountFlags.md) |  | [optional]
**balances** | [**\Tatum\Model\XlmAccountBalancesInner[]**](XlmAccountBalancesInner.md) | The assets this account holds. | [optional]
**signers** | [**\Tatum\Model\XlmAccountSignersInner[]**](XlmAccountSignersInner.md) | The public keys and associated weights that can be used to authorize transactions for this account. Used for multi-sig. | [optional]
**data** | **object** | An array of account data fields. | [optional]

[[Back to Index]](../index.md)
