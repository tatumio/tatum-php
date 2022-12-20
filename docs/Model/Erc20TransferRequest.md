# Erc20TransferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**to** | **string** | The blockchain address to send the fungible tokens to |
**contract_address** | **string** | The blockchain address of the fungible token smart contract |
**amount** | **string** | The amount of the fungible tokens to be sent |
**digits** | **float** | The number of decimal places that the fungible tokens have |
**from_private_key** | **string** | The private key of the blockchain address from which the fee will be deducted |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**from** | **string** | The blockchain address to send the fungible tokens from |
**fee_payer** | **string** | The blockchain address from which the fee will be deducted; if not set, defaults to the address that you specified in the <code>from</code> parameter | [optional]
**fee_payer_private_key** | **string** | The private key of the blockchain address that you specified in the <code>feePayer</code> parameter; if not set, defaults to the private key that you specified in the <code>fromPrivateKey</code> parameter | [optional]
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**signature_id** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted |
**fee_payer_signature_id** | **string** | The KMS identifier of the private key of the blockchain address that you specified in the <code>feePayer</code> parameter; if not set, defaults to the signature ID that you specified in the <code>signatureId</code> parameter | [optional]

[[Back to Index]](../index.md)
