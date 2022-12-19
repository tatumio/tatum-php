# ChainTransferBscBep20

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**to** | **string** | The blockchain address to send the fungible tokens to |
**contract_address** | **string** | The blockchain address of the fungible tokens |
**amount** | **string** | The amount of the fungible tokens to be sent |
**digits** | **float** | The number of decimal places that the fungible tokens have; to find out how many decimal places are used in the fungible tokens, check out the &lt;a href&#x3D;\&quot;https://apidoc.tatum.io/tag/Blockchain-utils#operation/SCGetContractAddress\&quot; target&#x3D;\&quot;_blank\&quot;&gt;smart contract&lt;/a&gt; |
**from_private_key** | **string** | The private key of the blockchain address from which the fee will be deducted |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
