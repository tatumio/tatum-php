# UpdateCashbackValueForAuthorNftCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**token_id** | **string** | The ID of the NFT to update royalty information for. |
**contract_address** | **string** | The blockchain address of the NFT to update royalty information for |
**cashback_value** | **string** | The new value of the royalty cashback to be set for the author of the NFT; to disable the royalties for the NFT completely, set this parameter to 0 |
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**from_private_key** | **string** | The private key of the NFT author&#39;s address |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]

[[Back to API list]](../../README.md#api-endpoints)
