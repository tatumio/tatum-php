# TrustLineXlmBlockchainKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_account** | **string** | XLM account address. Must be the one used for generating deposit tags. |
**issuer_account** | **string** | Blockchain address of the issuer of the assets to create trust line for. |
**token** | **string** | Asset name. |
**signature_id** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |
**limit** | **string** | Amount of the assets to be permitted to send over this trust line. 0 means deletion of the trust line. When no limit is specified, maximum amount available is permitted. | [optional]

[[Back to Index]](../index.md)
