# VC

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getName()** | **string** | Virtual currency name. Must be prefixed with 'VC_'. |
**getSupply()** | **string** | Supply of virtual currency. |
**getAccountId()** | **string** | Virtual currency account. |
**getBaseRate()** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. | [default to 1]
**getPrecision()** | **float** | Number of decimal places of this virtual currency. | [optional]
**getTrcType()** | **string** | Type of Tron token. | [optional]
**getBasePair()** | **string** | Base pair for virtual currency. Transaction value will be calculated according to this base pair. e.g. 1 VC_VIRTUAL is equal to 1 BTC, if basePair is set to BTC. |
**getCustomerId()** | **string** | ID of customer associated with virtual currency. | [optional]
**getDescription()** | **string** | Used as a description within Tatum system. | [optional]
**getErc20Address()** | **string** | Address of ERC20 token, when virtual currency is based on the Ethereum blockchain. | [optional]
**getIssuerAccount()** | **string** | Blockchain account for XLM or XRP based virtual currencies, which is marked as the issuer of the custom blockchain asset. | [optional]
**getChain()** | **string** | Blockchain, on which this virtual currency is paired on. Not present, when Tatum's private ledger is used as a base ledger. | [optional]
**getInitialAddress()** | **string** | Ethereum address, where initial supply was minted, when virtual currency is based on the Ethereum blockchain. | [optional]

[[Back to Index]](../index.md)
