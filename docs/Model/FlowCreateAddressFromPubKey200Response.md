# FlowCreateAddressFromPubKey200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**signature_id** | **string** | The internal Tatum ID of the prepared transaction for Key Management Sysytem (KMS) to sign&lt;br/&gt;This is different from the &lt;code&gt;signatureId&lt;/code&gt; parameter that you provided in the request body. The &lt;code&gt;signatureId&lt;/code&gt; parameter in the request body specifies the signature ID associated with the private key in KMS. |
**tx_id** | **string** | Id of the transaction | [optional]
**address** | **string** | Generated blockchain address | [optional]

[[Back to API list]](../../README.md#api-endpoints)
