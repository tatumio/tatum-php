# DeployErc721Celo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the ERC721 token |
**symbol** | **string** | Symbol of the ERC721 token |
**from_private_key** | **string** | Private key of Celo account address, from which gas for deployment of ERC721 will be paid. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**fee_currency** | **string** | Currency to pay for transaction gas |

[[Back to API list]](../../README.md#api-endpoints)
