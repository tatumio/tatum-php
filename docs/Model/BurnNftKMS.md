# BurnNftKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**token_id** | **string** | The ID of the NFT to burn. |
**contract_address** | **string** | The blockchain address of the NFT to burn |
**index** | **float** | (Only if the signature ID is mnemonic-based) The index of the address to pay the transaction fee that was generated from the mnemonic | [optional]
**signature_id** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
