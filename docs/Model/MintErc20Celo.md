# MintErc20Celo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Amount to be minted and transfered to the recipient. |
**to** | **string** | Blockchain address to send ERC-20 tokens to. |
**contract_address** | **string** | Address of ERC-20 token |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**fee_currency** | **string** | Currency to pay for transaction gas |

[[Back to Index]](../index.md)
