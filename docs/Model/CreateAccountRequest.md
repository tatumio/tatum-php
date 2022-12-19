# CreateAccountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | Account currency. Supported values are BTC, BNB, LTC, DOGE, BCH, ETH, XLM, XRP, TRON, BSC, SOL, MATIC, ALGO, KCS, EGLD, CELO, KLAY, XDC, FLOW, Tatum virtual currencies started with the \&quot;VC_\&quot; prefix (this includes fiat currencies), USDT, WBTC, LEO, LINK, GMC, UNI, FREE, MKR, USDC, BAT, TUSD, BUSD, PAX, PAXG, MMY, XCON, USDT_TRON, BETH, BUSD, BBTC, BADA, WBNB, BDOT, BXRP, BLTC, BBCH, CAKE, BUSD_BSC, ERC-20, BEP-20 or TRC-10/20 custom tokens registered on the Tatum platform, XLM or XRP assets created via the Tatum platform. ERC-20 tokens and BEP-20 tokens do not have testnet blockchains, therefore you cannot use them in a non-production environment. You can emulate a testnet environment by &lt;a href&#x3D;\&quot;https://apidoc.tatum.io/tag/Blockchain-operations#operation/registerErc20Token\&quot; target&#x3D;\&quot;_blank\&quot;&gt;registering a custom ERC-20 or BEP-20 token&lt;/a&gt; on the Tatum  platform and then minting some tokens from the token&#39;s address using the &lt;a href&#x3D;\&quot;https://erc20faucet.com/\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Ethereum ERC-20 Token Faucet&lt;/a&gt;. |
**xpub** | **string** | Extended public key to generate addresses from. |
**customer** | [**\Tatum\Model\CustomerRegistration**](CustomerRegistration.md) |  | [optional]
**compliant** | **bool** | Enable compliant checks. If this is enabled, it is impossible to create account if compliant check fails. | [optional]
**account_code** | **string** | For bookkeeping to distinct account purpose. | [optional]
**accounting_currency** | **string** | All transaction will be accounted in this currency for all accounts. Currency can be overridden per account level. If not set, customer accountingCurrency is used or EUR by default. ISO-4217 | [optional]
**account_number** | **string** | Account number from external system. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
