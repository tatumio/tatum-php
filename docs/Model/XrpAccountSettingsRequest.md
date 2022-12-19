# XrpAccountSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_account** | **string** | XRP account address. Must be the one used for generating deposit tags. |
**from_secret** | **string** | Secret for account. Secret, or signature Id must be present. |
**fee** | **string** | Fee to be paid, in XRP. If omitted, current fee will be calculated. | [optional]
**rippling** | **bool** | Should be true, if an account is the issuer of assets. | [optional]
**require_destination_tag** | **bool** | Should be true, if an account should support off-chain processing. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Secret or signature Id must be present. |

[[Back to API list]](../../README.md#api-endpoints)
