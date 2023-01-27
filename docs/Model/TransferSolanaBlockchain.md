---
title: TransferSolanaBlockchain
parent: Model
layout: page
---

# TransferSolanaBlockchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Blockchain address to send assets from <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` |
**getTo()** | **string** | Blockchain address to send assets to <br>Example: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU` |
**getAmount()** | **string** | Amount to be sent in SOL. <br>Example: `100000` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `zgsAKfjuXrAxEyuYRxbbxPM3rdsPbJPnGreaGMbcdUApJ6wHnCqQnf9b1RNPdeZxsRMkezh4VgXQ7YrbpndGtEv` |
**getFeePayer()** | **string** | Address on the Solana blockchain, from which the fee will be paid for transaction. Defaults to from. <br>Example: `BL4Xgn1jkuU4Yr3SQ4HG8cD5SBrsSk7BihKzkb5zTUfs` | [optional]
**getFeePayerPrivateKey()** | **string** | Private key of the fee payer address. <br>Example: `YdQ1iy2NYs93dtkHdz3ijDuhRJj6uXYAUZmixirCrgCsTMj42BN1Q1buYcGZaMxw5buk9VU5ogQ6zuzn8DMsGaf` | [optional]

