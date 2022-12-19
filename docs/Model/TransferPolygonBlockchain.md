# TransferPolygonBlockchain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**nonce** | **float** | Nonce to be set to Polygon transaction. If not present, last known nonce will be used. | [optional]
**to** | **string** | Blockchain address to send assets |
**currency** | **string** | Currency to transfer from Polygon Blockchain Account. ERC20 tokens USDC and USDT are available only for mainnet use. |
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**amount** | **string** | Amount to be sent. |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |

[[Back to API list]](../../README.md#api-endpoints)
