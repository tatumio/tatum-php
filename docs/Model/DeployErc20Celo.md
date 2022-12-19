# DeployErc20Celo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Symbol of the ERC20 token |
**name** | **string** | Name of the ERC20 token |
**total_cap** | **string** | Max supply of ERC20 token. | [optional]
**supply** | **string** | Max supply of ERC20 token. |
**digits** | **float** | Number of decimal points |
**address** | **string** | Address on Celo blockchain, where all created ERC20 tokens will be transferred. |
**from_private_key** | **string** | Private key of Celo account address, from which the fee for the deployment of ERC20 will be paid. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**fee_currency** | **string** | Currency to pay for transaction gas |

[[Back to API list]](../../README.md#api-endpoints)
