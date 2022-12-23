# TransferLtcKMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID |
**getAddress()** | **string** | Blockchain address to send assets to. For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain addresses as a comma separated string. |
**getAmount()** | **string** | Amount to be withdrawn to blockchain. |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**getFee()** | **string** | Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 0.0005 LTC is used. Minimum fee is 0.00001 LTC. | [optional]
**getMultipleAmounts()** | **string[]** | For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain amounts. List of recipient addresses must be present in the address field and total sum of amounts must be equal to the amount field. | [optional]
**getAttr()** | **string** | Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used. | [optional]
**getSignatureId()** | **string** | Signature hash of the mnemonic, which will be used to sign transactions locally. All signature Ids should be present, which might be used to sign transaction. Tatum KMS does not support keyPair type of off-chain transaction, only mnemonic based. |
**getXpub()** | **string** | Extended public key (xpub) of the wallet associated with the accounts. Should be present, when mnemonic is used. |
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account | [optional]

[[Back to Index]](../index.md)
