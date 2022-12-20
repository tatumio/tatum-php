# GenerateMarketplaceSolanaKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**marketplace_fee** | **float** | The percentage of the amount that an NFT was sold for that will be sent to the marketplace as a fee. To set the fee to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on. |
**from** | **string** | The address that will be the owner of the marketplace |
**treasury_mint** | **string** | Address of a SPL token contract | [optional]
**treasury_withdrawal_destination** | **string** | The address that will be able to withdraw funds from the marketplace treasury account to own address | [optional]
**fee_withdrawal_destination** | **string** | The address that will be able to withdraw funds from the marketplace fee account to own address | [optional]
**requires_sign_off** | **bool** | Set to "false" if you do not want the marketplace to sign all operations related to the listings and sales; if not set, defaults to "true" (the marketplace must sign all the operations) | [optional]
**can_change_sale_price** | **bool** | Set to "true" to allow the marketplace to change the sale price that the seller intentionally set to 0; if not set, defaults to "false" (the marketplace cannot change the sale price) | [optional]
**signature_id** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted |

[[Back to Index]](../index.md)
