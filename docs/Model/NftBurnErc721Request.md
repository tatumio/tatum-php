# NftBurnErc721Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**token_id** | **string** | ID of token to be destroyed. |
**contract_address** | **string** | Address of NFT token |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**index** | **int** | Derivation index of sender address. |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**fee_limit** | **float** | The maximum amount to be paid as the transaction fee (in TRX) |
**account** | **string** | Blockchain address of the sender account. |
**private_key** | **string** | Private key of sender address. Private key, mnemonic and index or signature Id must be present. |
**mnemonic** | **string** | Mnemonic to generate private key of sender address. |

[[Back to Index]](../index.md)
