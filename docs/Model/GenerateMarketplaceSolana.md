---
title: GenerateMarketplaceSolana
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getMarketplaceFee()** | **float** | The percentage of the amount that an NFT was sold for that will be sent to the marketplace as a fee. To set the fee to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on. |
**getFrom()** | **string** | The address that will be the owner of the marketplace |
**getTreasuryMint()** | **string** | Address of a SPL token contract | [optional]
**getTreasuryWithdrawalDestination()** | **string** | The address that will be able to withdraw funds from the marketplace treasury account to own address | [optional]
**getFeeWithdrawalDestination()** | **string** | The address that will be able to withdraw funds from the marketplace fee account to own address | [optional]
**getRequiresSignOff()** | **bool** | Set to "false" if you do not want the marketplace to sign all operations related to the listings and sales; if not set, defaults to "true" (the marketplace must sign all the operations) | [optional]
**getCanChangeSalePrice()** | **bool** | Set to "true" to allow the marketplace to change the sale price that the seller intentionally set to 0; if not set, defaults to "false" (the marketplace cannot change the sale price) | [optional]
**getFromPrivateKey()** | **string** | The private key of the blockchain address from which the fee will be deducted |

[[Back to Index]](../index.md)
