---
title: XlmAccountFlags
parent: Model
layout: page
---

# XlmAccountFlags model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAuthRequired()** | **bool** | If set to true, anyone who wants to hold an asset issued by this account must first be approved by this account. | [optional]
**getAuthRevocable()** | **bool** | If set to true, this account can freeze the balance of a holder of an asset issued by this account. | [optional]
**getAuthImmutable()** | **bool** | If set to true, none of the following flags can be changed. | [optional]

