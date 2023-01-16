# Model/AccountSettingsXrpBlockchainKMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | XRP account address. Must be the one used for generating deposit tags. |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Secret or signature Id must be present. |
**getFee()** | **string** | Fee to be paid, in XRP. If omitted, current fee will be calculated. | [optional]
**getRippling()** | **bool** | Should be true, if an account is the issuer of assets. | [optional]
**getRequireDestinationTag()** | **bool** | Should be true, if an account should support off-chain processing. | [optional]

[[Back to Index]](../index.md)
