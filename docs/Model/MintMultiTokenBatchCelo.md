# MintMultiTokenBatchCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Chain to work with. |
**token_id** | **string[][]** | The IDs of the Multi Tokens to be created. |
**amounts** | **string[][]** | The amounts of the Multi Tokens to be created. |
**data** | **string** | Data in bytes | [optional]
**to** | **string[]** | The blockchain address to send the Multi Tokens to |
**contract_address** | **string** | The address of the Multi Token smart contract |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**fee_currency** | **string** | Currency to pay for transaction gas |

[[Back to API list]](../../README.md#api-endpoints)
