# TrustLineXlmBlockchainKMS

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | XLM account address. Must be the one used for generating deposit tags. |
**getIssuerAccount()** | **string** | Blockchain address of the issuer of the assets to create trust line for. |
**getToken()** | **string** | Asset name. |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |
**getLimit()** | **string** | Amount of the assets to be permitted to send over this trust line. 0 means deletion of the trust line. When no limit is specified, maximum amount available is permitted. | [optional]

[[Back to Index]](../index.md)
