---
title: CreateAccount
parent: Model
layout: page
---

# CreateAccount

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getCurrency()** | **string** | The currency for the virtual account  <b>Native blockchain assets:</b> ALGO, BCH, BNB, BSC, BTC, CELO, DOGE, EGLD, ETH, FLOW, KCS, KLAY, LTC, MATIC, ONE, SOL, TRON, VET, XDC, XLM, XRP <b>Digital assets:</b> BADA, BAT, BBCH, BBTC, BDOT, BETH, BLTC, BUSD, BUSD_BSC, BXRP, CAKE, FREE, GMC, LEO, LINK, MKR, MMY, PAX, PAXG, TUSD, UNI, USD_BSC, USDC, USDC_MATIC, USDT, USDT_TRON, WBNB, WBTC, XCON <b><a href="https://apidoc.tatum.io/tag/Virtual-Currency" target="_blank">Virtual currency</a></b> registered on the Tatum platform and starting with the "VC_" prefix <b><a href="https://apidoc.tatum.io/tag/Blockchain-operations#operation/BnbAssetOffchain" target="_blank">BNB assets</a>, <a href="https://apidoc.tatum.io/tag/Blockchain-operations#operation/XlmAssetOffchain" target="_blank">XLM assets</a>, and <a href="https://apidoc.tatum.io/tag/Blockchain-operations#operation/XrpAssetOffchain" target="_blank">XRP assets</a></b> created via the Tatum platform <b>Custom fungible tokens</b> (ERC-20 or equivalent, such as BEP-20 or TRC-10/20) registered on the Tatum platform; for more information, see <a href="https://docs.tatum.io/guides/ledger-and-off-chain/how-to-connect-custom-erc-20-token-to-the-ledger" target="_blank">our user documentation</a> <br/>The fungible tokens do not have direct faucets on the testnet. To use them in a testnet environment, you have to register a new fungible token in a virtual account (use <a href="https://apidoc.tatum.io/tag/Blockchain-operations/#operation/createTrc" target="_blank">this API</a> for TRON TRC-10/20 tokens and <a href="https://apidoc.tatum.io/tag/Blockchain-operations/#operation/registerErc20Token" target="_blank">this API</a> for any other tokens) and make sure that your tokens minted on the testnet are <a href="https://apidoc.tatum.io/tag/Blockchain-operations/#operation/storeTokenAddress" target="_blank">linked to the token smart contract</a>. <br>Example: `BTC` |
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](../CustomerRegistration) |  <br>Example: `null` | [optional]
**getCompliant()** | **bool** | Enable compliant checks. If this is enabled, it is impossible to create account if compliant check fails. <br>Example: `false` | [optional]
**getAccountCode()** | **string** | For bookkeeping to distinct account purpose. <br>Example: `AC_1011_B` | [optional]
**getAccountingCurrency()** | **string** | All transaction will be accounted in this currency for all accounts. Currency can be overridden per account level. If not set, customer accountingCurrency is used or EUR by default. ISO-4217 <br>Example: `USD` | [optional]
**getAccountNumber()** | **string** | Account number from external system. <br>Example: `123456` | [optional]

