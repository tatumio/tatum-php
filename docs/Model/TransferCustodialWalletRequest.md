# TransferCustodialWalletRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**custodial_address** | **string** | The gas pump address that transfers the asset; this is the address that you &lt;a href&#x3D;\&quot;#operation/PrecalculateGasPumpAddresses\&quot;&gt;precalculated&lt;/a&gt; and &lt;a href&#x3D;\&quot;#operation/ActivateGasPumpAddresses\&quot;&gt;activated&lt;/a&gt; earlier and that is assigned to a customer in your custodial application; this is not the \&quot;master address\&quot; |
**recipient** | **string** | The blockchain address that receives the asset |
**contract_type** | **float** | The type of the asset to transfer. Set &lt;code&gt;0&lt;/code&gt; for fungible tokens (ERC-20 or equivalent), &lt;code&gt;1&lt;/code&gt; for NFTs (ERC-721 or equivalent), or &lt;code&gt;3&lt;/code&gt; for native blockchain currencies. |
**token_address** | **string** | (Only if the asset is a fungible token or NFT) The address of the token to transfer. Do not use if the asset is a native blockchain currency. | [optional]
**amount** | **string** | (Only if the asset is a fungible token or native blockchain currency) The amount of the asset to transfer. Do not use if the asset is an NFT. | [optional]
**token_id** | **string** | (Only if the asset is an NFT) The ID of the token to transfer. Do not use if the asset is a fungible token or native blockchain currency. | [optional]
**from_private_key** | **string** | The private key of the blockchain address that owns the gas pump address (\&quot;master address\&quot;) |
**nonce** | **float** | The nonce to be set to the transfer transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\ApproveTransferCustodialWalletFee**](ApproveTransferCustodialWalletFee.md) |  | [optional]
**signature_id** | **string** | The KMS identifier of the private key of the blockchain address that owns the gas pump address key (\&quot;master address\&quot;) |
**index** | **float** | (Only if the signature ID is mnemonic-based) The index of the specific address from the mnemonic | [optional]
**fee_currency** | **string** | The currency to pay for the gas fee |
**fee_limit** | **float** | The maximum amount to be paid as the gas fee (in TRX) |
**from** | **string** | The blockchain address that owns the gas pump address (\&quot;master address\&quot;) in the Base58 format |

[[Back to API list]](../../README.md#api-endpoints)
