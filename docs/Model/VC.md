# VC

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Virtual currency name. Must be prefixed with 'VC_'. |
**supply** | **string** | Supply of virtual currency. |
**account_id** | **string** | Virtual currency account. |
**base_rate** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. | [default to 1]
**precision** | **float** | Number of decimal places of this virtual currency. | [optional]
**trc_type** | **string** | Type of Tron token. | [optional]
**base_pair** | **string** | Base pair for virtual currency. Transaction value will be calculated according to this base pair. e.g. 1 VC_VIRTUAL is equal to 1 BTC, if basePair is set to BTC. |
**customer_id** | **string** | ID of customer associated with virtual currency. | [optional]
**description** | **string** | Used as a description within Tatum system. | [optional]
**erc20_address** | **string** | Address of ERC20 token, when virtual currency is based on the Ethereum blockchain. | [optional]
**issuer_account** | **string** | Blockchain account for XLM or XRP based virtual currencies, which is marked as the issuer of the custom blockchain asset. | [optional]
**chain** | **string** | Blockchain, on which this virtual currency is paired on. Not present, when Tatum's private ledger is used as a base ledger. | [optional]
**initial_address** | **string** | Ethereum address, where initial supply was minted, when virtual currency is based on the Ethereum blockchain. | [optional]

[[Back to Index]](../index.md)
