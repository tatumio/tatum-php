---
title: BtcTransactionFromUTXO
parent: Model
layout: page
---

# BtcTransactionFromUTXO

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromUtxo()** | [**\Tatum\Model\BtcTransactionFromUTXOSource[]**](../BtcTransactionFromUTXOSource) | The array of transaction hashes, indexes of its UTXOs, and the private keys of the associated blockchain addresses <br>Example: `null` |
**getTo()** | [**\Tatum\Model\BtcTransactionFromUTXOTarget[]**](../BtcTransactionFromUTXOTarget) | The array of blockchain addresses to send the assets to and the amounts that each address should receive (in BTC). The difference between the UTXOs calculated in the <code>fromUTXO</code> section and the total amount to receive calculated in the <code>to</code> section will be used as the gas fee. To explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent, set the <code>fee</code> and <code>changeAddress</code> parameters. <br>Example: `null` |
**getFee()** | **string** | The fee to be paid for the transaction (in BTC); if you are using this parameter, you have to also use the <code>changeAddress</code> parameter because these two parameters only work together. <br>Example: `0.0015` | [optional]
**getChangeAddress()** | **string** | The blockchain address to send any extra assets remaining after covering the fee; if you are using this parameter, you have to also use the <code>fee</code> parameter because these two parameters only work together. <br>Example: `2MzNGwuKvMEvKMQogtgzSqJcH2UW3Tc5oc7` | [optional]

