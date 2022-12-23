# Erc20TransferRequest

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getTo()** | **string** | The blockchain address to send the fungible tokens to |
**getContractAddress()** | **string** | The blockchain address of the fungible token smart contract |
**getAmount()** | **string** | The amount of the fungible tokens to be sent |
**getDigits()** | **float** | The number of decimal places that the fungible tokens have |
**getFromPrivateKey()** | **string** | The private key of the blockchain address from which the fee will be deducted |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**getFrom()** | **string** | The blockchain address to send the fungible tokens from |
**getFeePayer()** | **string** | The blockchain address from which the fee will be deducted; if not set, defaults to the address that you specified in the <code>from</code> parameter | [optional]
**getFeePayerPrivateKey()** | **string** | The private key of the blockchain address that you specified in the <code>feePayer</code> parameter; if not set, defaults to the private key that you specified in the <code>fromPrivateKey</code> parameter | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted |
**getFeePayerSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that you specified in the <code>feePayer</code> parameter; if not set, defaults to the signature ID that you specified in the <code>signatureId</code> parameter | [optional]

[[Back to Index]](../index.md)
