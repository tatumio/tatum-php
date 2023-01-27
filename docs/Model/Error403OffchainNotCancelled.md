---
title: Error403OffchainNotCancelled
parent: Model
layout: page
---

# Error403OffchainNotCancelled

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getErrorCode()** | **string** | withdrawal.not.cancelled.transaction.failed | ex.: `withdrawal.not.cancelled.transaction.failed`
**getMessage()** | **string** | Unable to broadcast transaction, and impossible to cancel withdrawal. ID is attached, "${withdrawalId}", cancel it manually. | ex.: `Unable to broadcast transaction, and impossible to cancel withdrawal. ID is attached, &quot;${withdrawalId}&quot;, cancel it manually.`
**getStatusCode()** | **float** | 403 | ex.: `403`

