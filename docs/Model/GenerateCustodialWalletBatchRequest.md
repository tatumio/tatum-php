# GenerateCustodialWalletBatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**fees_covered** | **bool** | If set to true, blockchain fees will be covered from credits. |
**batch_count** | **float** | Number of addresses to generate. |
**owner** | **string** | Owner of the addresses. |
**from_private_key** | **string** | Private key of account, from which the transaction will be initiated. |
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**nonce** | **float** | Nonce to be set to the transaction. If not present, last known nonce will be used. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**fee_currency** | **string** | Currency to pay for transaction gas |
**fee_limit** | **float** | Fee limit to be set, in TRX |
**from** | **string** | Sender address. |

[[Back to API list]](../../README.md#api-endpoints)
