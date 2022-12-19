# KlaytnBlockchainTransferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | **string** | Additional data, that can be passed to blockchain transaction as data property. Only for KLAY transactions. | [optional]
**nonce** | **float** | Nonce to be set to Klaytn transaction. If not present, last known nonce will be used. | [optional]
**to** | **string** | Blockchain address to send assets |
**currency** | **string** | Currency to transfer from Klaytn Blockchain Account. |
**fee** | [**\Tatum\Model\TransferKlay20BlockchainFee**](TransferKlay20BlockchainFee.md) |  | [optional]
**amount** | **string** | Amount to be sent in Ether. |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

[[Back to API list]](../../README.md#api-endpoints)
