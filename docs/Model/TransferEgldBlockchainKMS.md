# TransferEgldBlockchainKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | Account address of the sender |
**to** | **string** | Account address of the receiver or smart contract |
**amount** | **string** | Value to be sent. |
**fee** | [**\Tatum\Model\TransferEgldBlockchainKMSFee**](TransferEgldBlockchainKMSFee.md) |  | [optional]
**data** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

[[Back to API list]](../../README.md#api-endpoints)
