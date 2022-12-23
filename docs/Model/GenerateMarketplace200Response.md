# GenerateMarketplace200Response

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxId()** | **string** | The hash (ID) of the transaction |
**getContractAddress()** | **string** | The address of deployed marketplace contract |
**getFeeAccount()** | **string** | The blockchain address of the fee account |
**getTreasuryAccount()** | **string** | The blockchain address of the treasury account |
**getSignatureId()** | **string** | The internal Tatum ID of the prepared transaction for Key Management Sysytem (KMS) to sign<br/>This is different from the <code>signatureId</code> parameter that you provided in the request body. The <code>signatureId</code> parameter in the request body specifies the signature ID associated with the private key in KMS. |

[[Back to Index]](../index.md)
