# GenerateCustodialWalletBatchTronKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**from** | **string** | Sender address. |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**batch_count** | **float** | Number of addresses to generate. |
**owner** | **string** | Owner of the addresses. |
**fee_limit** | **float** | Fee limit to be set, in TRX |

[[Back to API list]](../../README.md#api-endpoints)
