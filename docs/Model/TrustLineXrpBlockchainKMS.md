# TrustLineXrpBlockchainKMS

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | XRP account address. Must be the one used for generating deposit tags. |
**getIssuerAccount()** | **string** | Blockchain address of the issuer of the assets to create trust line for. |
**getLimit()** | **string** | Amount of the assets to be permitted to send over this trust line. 0 means deletion of the trust line. |
**getToken()** | **string** | Asset name. Must be 160bit HEX string, e.g. SHA1. |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |
**getFee()** | **string** | Fee to be paid, in XRP. If omitted, current fee will be calculated. | [optional]

[[Back to Index]](../index.md)
