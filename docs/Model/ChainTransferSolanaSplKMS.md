# ChainTransferSolanaSplKMS

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getFrom()** | **string** | The blockchain address to send the fungible tokens from |
**getTo()** | **string** | The blockchain address to send the fungible tokens to |
**getContractAddress()** | **string** | The blockchain address of the fungible tokens |
**getAmount()** | **string** | The amount of the fungible tokens to be sent |
**getDigits()** | **float** | The number of decimal places that the fungible tokens have |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that you are sending the fungible tokens from (the address that you specified in the <code>from</code> parameter); the transaction fee will be deducted from this address |
**getFeePayer()** | **string** | The blockchain address from which the fee will be deducted; if not set, defaults to the address that you specified in the <code>from</code> parameter | [optional]
**getFeePayerSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that you specified in the <code>feePayer</code> parameter; if not set, defaults to the signature ID that you specified in the <code>signatureId</code> parameter | [optional]

[[Back to Index]](../index.md)
