# SettleAuctionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**contract_address** | **string** | The blockchain address of the auction smart contract |
**id** | **string** | The ID of the auction |
**from_private_key** | **string** | The private key of the blockchain address from which the fee will be deducted |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**signature_id** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted |
**index** | **float** | (Only if the signature ID is mnemonic-based) The index of the address from which the fee will be deducted that was generated from the mnemonic | [optional]
**fee_currency** | **string** | The currency in which the transaction fee will be paid |

[[Back to Index]](../index.md)
