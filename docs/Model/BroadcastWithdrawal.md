# BroadcastWithdrawal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | Currency of signed transaction to be broadcast, BTC, LTC, DOGE, BNB, XLM, TRX, BCH, ETH, XRP, ERC20, TRC20 |
**tx_data** | **string** | Raw signed transaction to be published to network. |
**withdrawal_id** | **string** | Withdrawal ID to be completed by transaction broadcast | [optional]
**signature_id** | **string** | ID of prepared payment template to sign. This is should be stored on a client side to retrieve ID of the blockchain transaction, when signing application signs the transaction and broadcasts it to the blockchain. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
