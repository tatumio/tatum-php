# AdaTx

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash** | **string** | Transaction hash. | [optional]
**fee** | **string** | Fee paid for this transaction, in ADA. | [optional]
**block** | [**\Tatum\Model\AdaTxBlock**](AdaTxBlock.md) |  | [optional]
**inputs** | [**\Tatum\Model\AdaTxInputsInner[]**](AdaTxInputsInner.md) | List of transactions, from which assets are being sent. | [optional]
**outputs** | [**\Tatum\Model\AdaUTXO[]**](AdaUTXO.md) | List of recipient addresses and amounts to send to each of them. | [optional]

[[Back to Index]](../index.md)
