# TransferEthBlockchain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | **string** | Additinal data, that can be passed to blockchain transaction as data property. Only for ETH transactions. | [optional]
**nonce** | **float** | Nonce to be set to Ethereum transaction. If not present, last known nonce will be used. | [optional]
**to** | **string** | Blockchain address to send assets |
**currency** | **string** | Currency to transfer from Ethereum Blockchain Account. |
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**amount** | **string** | Amount to be sent in Ether. |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |

[[Back to API list]](../../README.md#api-endpoints)
