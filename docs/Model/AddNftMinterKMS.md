# AddNftMinterKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**contract_address** | **string** | The blockchain address of the NFT smart contract |
**minter** | **string** | The blockchain address to add to the smart contract as an NFT minter |
**signature_id** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted |
**index** | **float** | (Only if the signature ID is mnemonic-based) The index of the address to pay the transaction fee that was generated from the mnemonic | [optional]
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**fee_currency** | **string** | (Celo only) The currency in which the transaction fee will be paid | [optional]

[[Back to API list]](../../README.md#api-endpoints)
