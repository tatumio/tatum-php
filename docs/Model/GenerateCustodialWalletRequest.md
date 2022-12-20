# GenerateCustodialWalletRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**from_private_key** | **string** | Private key of account, from which the transaction will be initiated. |
**enable_fungible_tokens** | **bool** | If address should support ERC20 tokens, it should be marked as true. |
**enable_non_fungible_tokens** | **bool** | If address should support ERC721 tokens, it should be marked as true. |
**enable_semi_fungible_tokens** | **bool** | If address should support ERC1155 tokens, it should be marked as true. Not supported for TRON. |
**enable_batch_transactions** | **bool** | If address should support batch transfers of the assets, it should be marked as true. |
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**fee_limit** | **float** | Fee in TRX to be paid. |
**from** | **string** | Sender address of TRON account in Base58 format. |

[[Back to Index]](../index.md)
