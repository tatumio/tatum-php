# TransferNftKMSTron

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **string** | If token to be transferred is Royalty NFT token, this is a value to be paid as a cashback to the authors of the token. | [optional]
**chain** | **string** | The blockchain to work with |
**account** | **string** | Blockchain address to perform transaction from |
**to** | **string** | Blockchain address to send NFT token to |
**token_id** | **string** | ID of the token. |
**contract_address** | **string** | Address of NFT token |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**fee_limit** | **float** | The maximum amount to be paid as the transaction fee (in TRX) |

[[Back to API list]](../../README.md#api-endpoints)
