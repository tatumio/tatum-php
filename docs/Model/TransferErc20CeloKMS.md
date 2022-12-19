# TransferErc20CeloKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Blockchain address to send ERC20 token to |
**amount** | **string** | Amount to be sent. |
**contract_address** | **string** | Address of ERC20 token |
**digits** | **float** | Number of decimal points that ERC20 token has. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**fee_currency** | **string** | Currency to pay for transaction gas |

[[Back to API list]](../../README.md#api-endpoints)
