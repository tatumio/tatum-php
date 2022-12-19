# MintErc721Celo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token_id** | **string** | ID of token to be created. |
**to** | **string** | Blockchain address to send ERC721 token to |
**contract_address** | **string** | Address of ERC721 token |
**url** | **string** | Metadata of the token. See https://eips.ethereum.org/EIPS/eip-721#specification for more details. |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**fee_currency** | **string** | Currency to pay for transaction gas |

[[Back to API list]](../../README.md#api-endpoints)
