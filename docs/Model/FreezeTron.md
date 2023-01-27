---
title: FreezeTron
parent: Model
layout: page
---

# FreezeTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromPrivateKey()** | **string** | Private key of the address, from which the TRX will be sent. | ex.: `842E09EB40D8175979EFB0071B28163E11AED0F14BDD84090A4CEFB936EF5701`
**getReceiver()** | **string** | Recipient address of frozen BANDWIDTH or ENERGY. | ex.: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh`
**getDuration()** | **float** | Duration of frozen funds, in days<br/>Set this parameter to 3. | ex.: `3`
**getResource()** | **string** | Resource to obtain, BANDWIDTH or ENERGY. | ex.: `ENERGY`
**getAmount()** | **string** | Amount to be frozen in TRX. | ex.: `100000`

