# AlgorandBlockchainTransferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | The blockchain address of the sender |
**to** | **string** | The blockchain address of the recipient |
**fee** | **string** | The transaction fee in Algos |
**amount** | **string** | The amount to send in Algos |
**note** | **string** | The note for the recipient; must not contain spaces | [optional]
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

[[Back to Index]](../index.md)
