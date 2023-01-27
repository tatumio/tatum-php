---
title: XlmAccountThresholds
parent: Model
layout: page
---

# XlmAccountThresholds

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getLowThreshold()** | **float** | The weight required for a valid transaction including the Allow Trust and Bump Sequence operations. | ex.: `0` [optional]
**getMedThreshold()** | **float** | The weight required for a valid transaction including the Create Account, Payment, Path Payment, Manage Buy Offer, Manage Sell Offer, Create Passive Sell Offer, Change Trust, Inflation, and Manage Data operations. | ex.: `0` [optional]
**getHighThreshold()** | **float** | The weight required for a valid transaction including the Account Merge and Set Options operations. | ex.: `0` [optional]

