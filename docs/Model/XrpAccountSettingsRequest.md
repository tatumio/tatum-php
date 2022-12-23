# XrpAccountSettingsRequest

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | XRP account address. Must be the one used for generating deposit tags. |
**getFromSecret()** | **string** | Secret for account. Secret, or signature Id must be present. |
**getFee()** | **string** | Fee to be paid, in XRP. If omitted, current fee will be calculated. | [optional]
**getRippling()** | **bool** | Should be true, if an account is the issuer of assets. | [optional]
**getRequireDestinationTag()** | **bool** | Should be true, if an account should support off-chain processing. | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Secret or signature Id must be present. |

[[Back to Index]](../index.md)
