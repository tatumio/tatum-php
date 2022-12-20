# CancelSellMarketplaceListingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**contract_address** | **string** | Blockchain address of the smart contract |
**erc20_address** | **string** | Optional address of the ERC20 token, which will be used as a selling currency of the NFT. | [optional]
**listing_id** | **mixed** | Blockchain address of the listing |
**from_private_key** | **string** | The private key of the asset owner |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**signature_id** | **string** | The KMS identifier of the private key of the asset owner |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**from** | **mixed** | Blockchain address of the asset owner |
**authority_private_key** | **string** | The private key used for signing transactions as authority; required if &lt;code&gt;requiresSignOff&lt;/code&gt; is set to \&quot;true\&quot; for the marketplace | [optional]
**authority_signature_id** | **string** | The KMS identifier of the private key used for signing transactions as authority; required if &lt;code&gt;requiresSignOff&lt;/code&gt; is set to \&quot;true\&quot; for the marketplace | [optional]

[[Back to Index]](../index.md)
