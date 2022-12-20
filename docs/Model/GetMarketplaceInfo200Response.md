# GetMarketplaceInfo200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fee_account** | **string** | Fee Account Address |
**treasury_account** | **string** | Treasury Account Address |
**authority** | **string** | Authority Address |
**creator** | **string** | Creator Address |
**marketplace_fee** | **float** | The percentage of the amount that an NFT was sold for that will be sent to the marketplace as a fee. To set the fee to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on. |
**treasury_mint** | **string** | Address of a SPL token contract |
**treasury_withdrawal_destination** | **string** | The address that will be able to withdraw funds from the marketplace treasury account to own address |
**fee_withdrawal_destination** | **string** | The address that will be able to withdraw funds from the marketplace fee account to own address |
**requires_sign_off** | **bool** | If set to "true", the marketplace must sign all operations related to the listings and sales. |
**can_change_sale_price** | **bool** | If set to "true", the marketplace can change the sale price that the seller intentionally set to 0. |

[[Back to Index]](../index.md)
