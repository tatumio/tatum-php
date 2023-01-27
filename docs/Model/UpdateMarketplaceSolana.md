---
title: UpdateMarketplaceSolana
parent: Model
layout: page
---

# UpdateMarketplaceSolana

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. <br>Example: `SOL` |
**getContractAddress()** | **string** | Blockchain address of the smart contract <br>Example: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU` |
**getMarketplaceFee()** | **float** | The percentage of the amount that an NFT was sold for that will be sent to the marketplace as a fee. To set the fee to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on. <br>Example: `150` | [optional]
**getFrom()** | **string** | The blockchain address of the marketplace authority <br>Example: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU` |
**getTreasuryWithdrawalDestination()** | **string** | The address that will be able to withdraw funds from the marketplace treasury account to own address <br>Example: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU` | [optional]
**getFeeWithdrawalDestination()** | **string** | The address that will be able to withdraw funds from the marketplace fee account to own address <br>Example: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU` | [optional]
**getRequiresSignOff()** | **bool** | Set to "false" if you do not want the marketplace to sign all operations related to the listings and sales; if not set, defaults to "true" (the marketplace must sign all the operations) <br>Example: `true` | [optional]
**getCanChangeSalePrice()** | **bool** | Set to "true" to allow the marketplace to change the sale price that the seller intentionally set to 0; if not set, defaults to "false" (the marketplace cannot change the sale price) <br>Example: `true` | [optional]
**getFromPrivateKey()** | **string** | The private key of the marketplace authority <br>Example: `zgsAKfjuXrAxEyuYRxbbxPM3rdsPbJPnGreaGMbcdUApJ6wHnCqQnf9b1RNPdeZxsRMkezh4VgXQ7YrbpndGtEv` |

