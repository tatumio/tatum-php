# TransferOneBlockchain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | **string** | Additional data, that can be passed to blockchain transaction as data property. | [optional]
**currency** | **string** | Currency of the transfer. |
**nonce** | **float** | Nonce to be set to ONE transaction. If not present, last known nonce will be used. | [optional]
**to** | **string** | Blockchain address to send assets |
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**amount** | **string** | Amount to be sent in One. |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |

[[Back to API list]](../../README.md#api-endpoints)
