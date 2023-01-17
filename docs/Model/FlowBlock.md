---
title: FlowBlock
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | The hash of the block | [optional]
**getParentId()** | **string** | The hash of the parent block | [optional]
**getHeight()** | **float** | The number of the block | [optional]
**getTimestamp()** | **string** | The timestamp of the block | [optional]
**getCollectionGuarantees()** | [**\Tatum\Model\FlowBlockCollectionGuaranteesInner[]**](../FlowBlockCollectionGuaranteesInner) | Collection guaranties | [optional]
**getBlockSeals()** | [**\Tatum\Model\FlowBlockBlockSealsInner[]**](../FlowBlockBlockSealsInner) | Block seals | [optional]
**getTransactions()** | **string[]** | The IDs of transactions | [optional]

