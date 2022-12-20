# GenerateCustodialWalletTron

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**fee_limit** | **float** | Fee in TRX to be paid. |
**from_private_key** | **string** | Private key of account, from which the transaction will be initiated. |
**enable_fungible_tokens** | **bool** | If address should support ERC20 tokens, it should be marked as true. |
**enable_non_fungible_tokens** | **bool** | If address should support ERC721 tokens, it should be marked as true. |
**enable_semi_fungible_tokens** | **bool** | If address should support ERC1155 tokens, it should be marked as true. Not supported for TRON. |
**enable_batch_transactions** | **bool** | If address should support batch transfers of the assets, it should be marked as true. |

[[Back to Index]](../index.md)
