# ChainTransferSolanaSpl

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**from** | **string** | The blockchain address to send the fungible tokens from |
**to** | **string** | The blockchain address to send the fungible tokens to |
**contract_address** | **string** | The blockchain address of the fungible tokens |
**amount** | **string** | The amount of the fungible tokens to be sent |
**digits** | **float** | The number of decimal places that the fungible tokens have |
**from_private_key** | **string** | The private key of the blockchain address that you are sending the fungible tokens from (the address that you specified in the <code>from</code> parameter); the transaction fee will be deducted from this address |
**fee_payer** | **string** | The blockchain address from which the fee will be deducted; if not set, defaults to the address that you specified in the <code>from</code> parameter | [optional]
**fee_payer_private_key** | **string** | The private key of the blockchain address that you specified in the <code>feePayer</code> parameter; if not set, defaults to the private key that you specified in the <code>fromPrivateKey</code> parameter | [optional]

[[Back to Index]](../index.md)
