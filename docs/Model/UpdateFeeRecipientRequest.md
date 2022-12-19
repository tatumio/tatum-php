# UpdateFeeRecipientRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**contract_address** | **string** | Blockchain address of the smart contract |
**fee_recipient** | **string** | Recipient address of the marketplace fee. |
**from_private_key** | **string** | The private key of the marketspace authority |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**signature_id** | **string** | The KMS identifier of the private key of the marketspace authority |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**treasury_withdrawal_destination** | **string** | The blockchain address of the new marketplace fee recipient |
**from** | **string** | The blockchain address of the marketplace authority |

[[Back to API list]](../../README.md#api-endpoints)
