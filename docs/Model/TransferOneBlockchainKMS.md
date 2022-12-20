# TransferOneBlockchainKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**currency** | **string** | Currency of the transfer. |
**nonce** | **float** | Nonce to be set to ONE transaction. If not present, last known nonce will be used. | [optional]
**to** | **string** | Blockchain address to send assets |
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**amount** | **string** | Amount to be sent in One. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

[[Back to Index]](../index.md)
