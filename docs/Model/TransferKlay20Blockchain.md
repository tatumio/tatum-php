# Model/TransferKlay20Blockchain

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTo()** | **string** | Blockchain address to send ERC20 token to |
**getAmount()** | **string** | Amount to be sent. |
**getContractAddress()** | **string** | Address of ERC20 token |
**getDigits()** | **float** | Number of decimal points that ERC20 token has. |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to Klaytn transaction. If not present, last known nonce will be used. | [optional]
**getFee()** | [**\Tatum\Model\TransferKlay20BlockchainFee**](TransferKlay20BlockchainFee.md) |  | [optional]

[[Back to Index]](../index.md)
