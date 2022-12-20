# GenerateMarketplaceSolanaKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**marketplace_fee** | **float** | The percentage of the amount that an NFT was sold for that will be sent to the marketplace as a fee. To set the fee to 1%, set this parameter to &lt;code&gt;100&lt;/code&gt;; to set 10%, set this parameter to &lt;code&gt;1000&lt;/code&gt;; to set 50%, set this parameter to &lt;code&gt;5000&lt;/code&gt;, and so on. |
**from** | **string** | The address that will be the owner of the marketplace |
**treasury_mint** | **string** | Address of a SPL token contract | [optional]
**treasury_withdrawal_destination** | **string** | The address that will be able to withdraw funds from the marketplace treasury account to own address | [optional]
**fee_withdrawal_destination** | **string** | The address that will be able to withdraw funds from the marketplace fee account to own address | [optional]
**requires_sign_off** | **bool** | Set to \&quot;false\&quot; if you do not want the marketplace to sign all operations related to the listings and sales; if not set, defaults to \&quot;true\&quot; (the marketplace must sign all the operations) | [optional]
**can_change_sale_price** | **bool** | Set to \&quot;true\&quot; to allow the marketplace to change the sale price that the seller intentionally set to 0; if not set, defaults to \&quot;false\&quot; (the marketplace cannot change the sale price) | [optional]
**signature_id** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted |

[[Back to Index]](../index.md)
