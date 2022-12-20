# TronFreezeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_private_key** | **string** | Private key of the address, from which the TRX will be sent. |
**receiver** | **string** | Recipient address of frozen BANDWIDTH or ENERGY. |
**duration** | **float** | Duration of frozen funds, in days. |
**resource** | **string** | Resource to obtain, BANDWIDTH or ENERGY. |
**amount** | **string** | Amount to be frozen in TRX. |
**from** | **string** | Sender address of TRON account in Base58 format. |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]

[[Back to Index]](../index.md)
