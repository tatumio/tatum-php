# ChainTransferKcsEthErc20KMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**to** | **string** | The blockchain address to send the fungible tokens to |
**contract_address** | **string** | The blockchain address of the fungible token smart contract |
**amount** | **string** | The amount of the fungible tokens to be sent |
**digits** | **float** | The number of decimal places that the fungible tokens have |
**signature_id** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\ApproveTransferCustodialWalletFee**](ApproveTransferCustodialWalletFee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
