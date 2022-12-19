# TransferNftKMSCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **string** | If token to be transferred is Royalty NFT token, this is a value to be paid as a cashback to the authors of the token. | [optional]
**chain** | **string** | The blockchain to work with |
**to** | **string** | Blockchain address to send NFT token to |
**token_id** | **string** | ID of the token. |
**contract_address** | **string** | Address of NFT token |
**provenance** | **bool** | True if the contract is provenance type | [optional]
**provenance_data** | **string** | data you want to store with transaction, optional and valid only if provenance contract | [optional]
**token_price** | **string** | current price of the token, valid only for provenance | [optional]
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee_currency** | **string** | The currency in which the transaction fee will be paid |

[[Back to API list]](../../README.md#api-endpoints)
