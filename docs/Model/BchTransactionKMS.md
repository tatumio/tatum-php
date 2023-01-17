---
title: BchTransactionKMS
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromUtxo()** | [**\Tatum\Model\AdaTransactionFromUTXOKMSFromUTXOInner[]**](../AdaTransactionFromUTXOKMSFromUTXOInner) | The array of transaction hashes, indexes of its UTXOs, and the signature IDs of the associated blockchain addresses |
**getTo()** | [**\Tatum\Model\BchTransactionToInner[]**](../BchTransactionToInner) | The array of blockchain addresses to send the assets to and the amounts that each address should receive (in BCH). The difference between the UTXOs calculated in the <code>fromUTXO</code> section and the total amount to receive calculated in the <code>to</code> section will be used as the gas fee. To explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent, set the <code>fee</code> and <code>changeAddress</code> parameters. |
**getFee()** | **string** | The fee to be paid for the transaction (in BCH); if you are using this parameter, you have to also use the <code>changeAddress</code> parameter because these two parameters only work together. | [optional]
**getChangeAddress()** | **string** | The blockchain address to send any extra assets remaning after covering the fee; if you are using this parameter, you have to also use the <code>fee</code> parameter because these two parameters only work together. | [optional]

