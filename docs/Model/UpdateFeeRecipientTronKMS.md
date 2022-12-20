# UpdateFeeRecipientTronKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**contract_address** | **string** | Address of the marketplace smart contract. |
**from** | **string** | Address of the recipient of the fee for the trade. |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**fee_recipient** | **string** | Recipient address of the marketplace fee. |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. | [optional]
**fee_limit** | **float** | Fee in TRX to be paid. |

[[Back to Index]](../index.md)
