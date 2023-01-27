---
title: FlowTx
parent: Model
layout: page
---

# FlowTx

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getReferenceBlockId()** | **string** | Id of the block | ex.: `ad8b9ab637d56e19188cd5410db6e993fbf66216296c99f7934cf9f3594f9658` [optional]
**getScript()** | **string** | Script to execute in the transaction | ex.: `null` [optional]
**getArgs()** | [**\Tatum\Model\FlowTxArgsInner[]**](../FlowTxArgsInner) | Args to the transaction | ex.: `null` [optional]
**getGasLimit()** | **float** | Gas limit for the transaction | ex.: `1000` [optional]
**getProposalKey()** | [**\Tatum\Model\FlowTxProposalKey**](../FlowTxProposalKey) |  | ex.: `null` [optional]
**getPayer()** | **string** | Address from which the assets and fees were debited | ex.: `955cd3f17b2fd8ad` [optional]
**getPayloadSignatures()** | [**\Tatum\Model\FlowTxPayloadSignaturesInner[]**](../FlowTxPayloadSignaturesInner) | Array of payload signatures. | ex.: `null` [optional]
**getEnvelopeSignatures()** | [**\Tatum\Model\FlowTxPayloadSignaturesInner[]**](../FlowTxPayloadSignaturesInner) | Array of envelope signatures. | ex.: `null` [optional]
**getStatus()** | **float** | Status of the transaction | ex.: `4` [optional]
**getStatusCode()** | **float** | Status cofe of the transaction | ex.: `0` [optional]
**getErrorMessage()** | **string** |  | ex.: `null` [optional]
**getEvents()** | [**\Tatum\Model\FlowTxEventsInner[]**](../FlowTxEventsInner) |  | ex.: `null` [optional]

