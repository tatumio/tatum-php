---
title: UpdateFeeAuctionCeloKMS
parent: Model
layout: page
---

# UpdateFeeAuctionCeloKMS model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getContractAddress()** | **string** | The blockchain address of the auction smart contract |
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getAuctionFee()** | **float** | The percentage of the amount that an NFT was sold for that will be sent to the auction as a fee. To set the fee to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on. |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address from which the fee will be deducted that was generated from the mnemonic | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | [optional]

