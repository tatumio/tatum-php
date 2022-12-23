# TransferAlgo

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | The ID of the virtual account to send Algos from |
**getAddress()** | **string** | The blockchain address to send Algos to |
**getAmount()** | **string** | The amount to send in Algos |
**getFee()** | **string** | The transaction fee in Algos |
**getPrivateKey()** | **string** | The secret of the Algorand wallet (account). Secret, or signature Id must be present. |
**getCompliant()** | **bool** | Compliance check; if the withdrawal is not compliant, it will not be processed | [optional]
**getPaymentId()** | **string** | The identifier of the Algo transfer that is shown on the virtual account for the created transaction | [optional]
**getSenderNote()** | **string** | The note for the recipient; must not contain spaces | [optional]

[[Back to Index]](../index.md)
