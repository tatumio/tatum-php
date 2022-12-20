# GenerateMarketplace200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tx_id** | **string** | The hash (ID) of the transaction |
**contract_address** | **string** | The address of deployed marketplace contract |
**fee_account** | **string** | The blockchain address of the fee account |
**treasury_account** | **string** | The blockchain address of the treasury account |
**signature_id** | **string** | The internal Tatum ID of the prepared transaction for Key Management Sysytem (KMS) to sign&lt;br/&gt;This is different from the &lt;code&gt;signatureId&lt;/code&gt; parameter that you provided in the request body. The &lt;code&gt;signatureId&lt;/code&gt; parameter in the request body specifies the signature ID associated with the private key in KMS. |

[[Back to Index]](../index.md)