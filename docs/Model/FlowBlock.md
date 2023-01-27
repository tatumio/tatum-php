---
title: FlowBlock
parent: Model
layout: page
---

# FlowBlock

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | The hash of the block <br>Example: `e11ca8f92f2d5dea7406e64ab8cb1780a8a19185d9ac670b16ca8c4f09f05add` | [optional]
**getParentId()** | **string** | The hash of the parent block <br>Example: `7bd701e87f319254d19dc17459f97df6a44052d05df5e1cd442dd2e3f48ecedc` | [optional]
**getHeight()** | **float** | The number of the block <br>Example: `31733102` | [optional]
**getTimestamp()** | **string** | The timestamp of the block <br>Example: `2021-05-11T13:00:54.913131268Z` | [optional]
**getCollectionGuarantees()** | [**\Tatum\Model\FlowBlockCollectionGuaranteesInner[]**](../FlowBlockCollectionGuaranteesInner) | Collection guaranties <br>Example: `null` | [optional]
**getBlockSeals()** | [**\Tatum\Model\FlowBlockBlockSealsInner[]**](../FlowBlockBlockSealsInner) | Block seals <br>Example: `null` | [optional]
**getTransactions()** | **string[]** | The IDs of transactions <br>Example: `null` | [optional]

