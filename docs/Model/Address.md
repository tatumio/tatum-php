---
title: Address
parent: Model
layout: page
---

# Address

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | Blockchain address. | ex.: `7c21ed165e294db78b95f0f181086d6f`
**getCurrency()** | **string** | Currency of generated address. BTC, LTC, DOGE, BCH, ETH, XRP, XLM, BNB, TRX, ERC20, TRC20. | ex.: `BTC`
**getDerivationKey()** | **int** | Derivation key index for given address. | ex.: `null` [optional]
**getXpub()** | **string** | Extended public key to derive address from. In case of XRP, this is account address, since address is defined as DestinationTag, which is address field. In case of XLM, this is account address, since address is defined as message, which is address field. | ex.: `xpub6FB4LJzdKNkkpsjggFAGS2p34G48pqjtmSktmK2Ke3k1LKqm9ULsg8bGfDakYUrdhe2EHw5uGKX9DrMbrgYnVfDwrksT4ZVQ3vmgEruo3Ka` [optional]
**getDestinationTag()** | **float** | In case of XRP, destinationTag is the distinguisher of the account. | ex.: `5` [optional]
**getMemo()** | **string** | In case of BNB, message is the distinguisher of the account. | ex.: `5` [optional]
**getMessage()** | **string** | In case of XLM, message is the distinguisher of the account. | ex.: `5` [optional]

