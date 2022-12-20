# ApproveCeloErc20

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**contract_address** | **string** | The address of the smart contract |
**spender** | **string** | The blockchain address to be allowed to transfer or burn the fungible tokens |
**amount** | **string** | The amount of the tokens allowed to be transferred or burnt |
**from_private_key** | **string** | The private key of the smart contract's owner; the fee will be deducted from the owner's address |
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]

[[Back to Index]](../index.md)
