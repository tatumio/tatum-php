# ApproveCeloErc20

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**amount** | **string** | Amount to be approved for the spender. |
**spender** | **string** | Blockchain address of the new spender. |
**contract_address** | **string** | Address of ERC-20 token |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**fee** | [**\Tatum\Model\ApproveTransferCustodialWalletFee**](ApproveTransferCustodialWalletFee.md) |  | [optional]
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee_currency** | **string** | The currency in which the transaction fee will be paid |

[[Back to API list]](../../README.md#api-endpoints)
