# CancelSellAssetOnMarketplaceTronKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**contract_address** | **string** | Address of the marketplace smart contract. |
**from** | **string** | Address of the recipient of the fee for the trade. |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**erc20_address** | **string** | Optional address of the TRC20 token, which will be used as a selling currency of the NFT. | [optional]
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. | [optional]
**fee_limit** | **float** | Fee in TRX to be paid. |

[[Back to API list]](../../README.md#api-endpoints)
