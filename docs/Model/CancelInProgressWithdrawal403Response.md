---
title: CancelInProgressWithdrawal403Response
parent: Model
layout: page
---

# CancelInProgressWithdrawal403Response

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getErrorCode()** | **string** | withdrawal.not.cancelled.transaction.failed | ex.: `withdrawal.not.cancelled.transaction.failed`
**getMessage()** | **string** | Unable to cancel withdrawal ${id}, it is impossible to create refund transaction. | ex.: `Unable to cancel withdrawal ${id}, it is impossible to create refund transaction.`
**getStatusCode()** | **float** | 403 | ex.: `403`

