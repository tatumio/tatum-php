# VetBlockchainTransferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Blockchain address to send assets |
**amount** | **string** | Amount to be sent in VET |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**data** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**fee** | [**\Tatum\Model\TransferVetBlockchainFee**](TransferVetBlockchainFee.md) |  | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

[[Back to Index]](../index.md)
