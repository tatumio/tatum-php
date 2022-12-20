# MintMultiTokenBatchKMSCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Chain to work with. |
**to** | **string[]** | The blockchain address to send the Multi Tokens to. |
**token_id** | **string[][]** | The IDs of the Multi Tokens to be created. |
**amounts** | **string[][]** | The amounts of the Multi Tokens to be created. |
**data** | **string** | Data in bytes | [optional]
**contract_address** | **string** | The address of the Multi Token smart contract |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**fee_currency** | **string** | Currency to pay for transaction gas |

[[Back to Index]](../index.md)
