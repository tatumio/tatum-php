# Address

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Blockchain address. |
**currency** | **string** | Currency of generated address. BTC, LTC, DOGE, BCH, ETH, XRP, XLM, BNB, TRX, ERC20, TRC20. |
**derivation_key** | **int** | Derivation key index for given address. | [optional]
**xpub** | **string** | Extended public key to derive address from. In case of XRP, this is account address, since address is defined as DestinationTag, which is address field. In case of XLM, this is account address, since address is defined as message, which is address field. | [optional]
**destination_tag** | **float** | In case of XRP, destinationTag is the distinguisher of the account. | [optional]
**memo** | **string** | In case of BNB, message is the distinguisher of the account. | [optional]
**message** | **string** | In case of XLM, message is the distinguisher of the account. | [optional]

[[Back to Index]](../index.md)
