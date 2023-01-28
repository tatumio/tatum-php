---
title: Order Book
parent: API
layout: page
---

# Api/OrderBookApi

[Order Book API Reference](https://apidoc.tatum.io/tag/Order-Book/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->orderBook();

// TestNet API Call
$sdk->testnet()->api()->orderBook();
```

## Methods

Method | Description
------------- | -------------
[**chartRequest()**](#chartrequest) | Obtain chart data from historical closed trades
[**createFutureTrade()**](#createfuturetrade) | Store buy / sell trade
[**createTrade()**](#createtrade) | Store buy / sell trade
[**deleteAccountTrades()**](#deleteaccounttrades) | Cancel all existing trades for account
[**deleteTrade()**](#deletetrade) | Cancel existing trade
[**getBuyTradesBody()**](#getbuytradesbody) | List all active buy trades
[**getHistoricalTradesBody()**](#gethistoricaltradesbody) | List all historical trades
[**getMatchedTrades()**](#getmatchedtrades) | List all matched orders from FUTURE_SELL/FUTURE_BUY trades
[**getSellTradesBody()**](#getselltradesbody) | List all active sell trades
[**getTradeById()**](#gettradebyid) | Get existing trade


## `chartRequest()`

### Example

[👉 View "**chartRequest.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/OrderBookApi/chartRequest.php)

### Request

> **POST** `/v3/trade/chart`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->orderBook()->chartRequest(
    \Tatum\Model\ChartRequest $chart_request
): \Tatum\Model\Chart[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chart_request** | [**\Tatum\Model\ChartRequest**](../../Model/ChartRequest) |  |

### Return type

[**\Tatum\Model\Chart[]**](../../Model/Chart)

### Description

Obtain chart data from historical closed trades

<h4>2 credits for API call.</h4>

 Obtain data from the closed trades for entering in the chart. Time interval is set between __from__ and __to__ and there is defined time frame. There can be obtained at most 200 time points in the time interval.

[Back to top](#top)



## `createFutureTrade()`

### Example

[👉 View "**createFutureTrade.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/OrderBookApi/createFutureTrade.php)

### Request

> **POST** `/v3/trade`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->orderBook()->createFutureTrade(
    \Tatum\Model\CreateFutureTrade $create_future_trade
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_future_trade** | [**\Tatum\Model\CreateFutureTrade**](../../Model/CreateFutureTrade) |  |

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Store buy / sell trade

CreateFutureTrade operation

[Back to top](#top)



## `createTrade()`

### Example

[👉 View "**createTrade.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/OrderBookApi/createTrade.php)

### Request

> **POST** `/v3/trade`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->orderBook()->createTrade(
    \Tatum\Model\CreateTrade $create_trade
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_trade** | [**\Tatum\Model\CreateTrade**](../../Model/CreateTrade) |  |

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Store buy / sell trade

<h4>2 credits for API call, 2 credits for each fill of the counter trade. 1 API call + 2 fills = 6 credits.</h4>

 Store new buy / sell trade. If there is trade already available to fill, fill as much trades as possible.

 It is possible to charge fees for the trades. Fees are an extra amount on top of the trade amount and are paid in the currency that you going to block e.g.: - BUY BTC/USDT - fees will be paid in USDT - SELL BTC/ETH - fees will be paid in BTC 

 If you fill type of the trade with FUTURE_BUY or FUTURE_SELL the trade will behave as a trade future. The trade is concluded now but will be fulfilled in future. The date of fulfillment is by the “Seal Date” field. You can also block a percentage of the amount until the future trade has expired. 

 Futures can also penalize contracting parties if they don’t have the agreed balance available in their accounts. The penalty is calculated in the following way: Penalty amount = (Percentage of incomplete deal amount because of shortage from user) × (Maximum Penalty percentage of futures deal based on blocked amount and time interval) × (total blocked value). 

 Example of the BTC/USDT trade future:

 The maker creates a sell with the following properties: 1 BTC at a price of 60000 USDT, with a blocking percentage of 22%, a penalty percentage of 45%, a system commision of 1% and with an expiration time of within 12 hours.

 <pre> { "type": "FUTURE_SELL", "price": "60000", "amount": "1", "pair": "BTC/USDT", "currency1AccountId": "60a236db1b57f60d62612bf3", "currency2AccountId": "609d0696bf835c241ac2920f", "fee": 1, "feeAccountId": "609d0696bf835c251ac2920a", "attr": { "sealDate": 1621990960631, "percentBlock": 22, "percentPenalty": 45 } } </pre> The taker accepts the offer with a buy and blocks 13200 USDT (60000 USDT × 0.22) in their account. <pre> { "type": "FUTURE_BUY", "price": "60000", "amount": "1", "pair": "BTC/USDT", "currency1AccountId": "60a236db1b57f60d62612bf2", "currency2AccountId": "609d0696bf835c241ac2920a", "attr": { "sealDate": 1621990960631, "percentBlock": 22, "percentPenalty": 45 } } </pre> At the time of the trade, the maker and taker have the following conditions. The maker has 0.65 BTC (35% deficit) in their account and the taker has 49200 USDT (18% deficit) in their account. 

 The maker penalty is equal to 0.35 × 0.22 × (0.45 × 1 BTC) = 0.03465 BTC. The taker penalty is equal to 0.18 × 0.22 × (0.45 × 60000 USDT) = 1069.2 USDT. 

 The system commission for the maker is 1 BTC × 1% = 0.01 BTC. The system commission for the taker is 60000 USDT × 1% = 600 USDT. 

 The maker’s assets after deducting penalties and commissions equals 0.65 - 0.03465 - 0.01 = 0.60535 BTC. The taker’s assets after deducting penalties and commissions equals 49200 - 1069.2 - 600 = 47530.8 USDT. 

 The amount received by the maker after the trade is (0.60535 × 60000) + 1069.2 = 37390.2 USDT and the taker receives 0.60535 + 0.03465 = 0.64 BTC.

[Back to top](#top)



## `deleteAccountTrades()`

### Example

[👉 View "**deleteAccountTrades.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/OrderBookApi/deleteAccountTrades.php)

### Request

> **DELETE** `/v3/trade/account/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->orderBook()->deleteAccountTrades(
    string $id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |

### Return type

void (empty response body)

### Description

Cancel all existing trades for account

<h4>1 credit for API call, 1 credit for each cancelled trade. 1 API call + 2 cancellations = 3 credits.</h4>

Cancel all trades for account.

[Back to top](#top)



## `deleteTrade()`

### Example

[👉 View "**deleteTrade.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/OrderBookApi/deleteTrade.php)

### Request

> **DELETE** `/v3/trade/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->orderBook()->deleteTrade(
    string $id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Trade ID |

### Return type

void (empty response body)

### Description

Cancel existing trade

<h4>1 credit for API call</h4>

Cancel existing trade.

[Back to top](#top)



## `getBuyTradesBody()`

### Example

[👉 View "**getBuyTradesBody.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/OrderBookApi/getBuyTradesBody.php)

### Request

> **POST** `/v3/trade/buy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->orderBook()->getBuyTradesBody(
    \Tatum\Model\ListOderBookActiveBuyBody $list_oder_book_active_buy_body
): \Tatum\Model\Trade[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$list_oder_book_active_buy_body** | [**\Tatum\Model\ListOderBookActiveBuyBody**](../../Model/ListOderBookActiveBuyBody) |  |

### Return type

[**\Tatum\Model\Trade[]**](../../Model/Trade)

### Description

List all active buy trades

<h4>1 credit per API call.</h4>

List all active buy trades.

[Back to top](#top)



## `getHistoricalTradesBody()`

### Example

[👉 View "**getHistoricalTradesBody.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/OrderBookApi/getHistoricalTradesBody.php)

### Request

> **POST** `/v3/trade/history`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->orderBook()->getHistoricalTradesBody(
    [ \Tatum\Model\ListOderBookHistoryBody $list_oder_book_history_body ]
): \Tatum\Model\Trade[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$list_oder_book_history_body** | [**\Tatum\Model\ListOderBookHistoryBody**](../../Model/ListOderBookHistoryBody) |  | [optional]

### Return type

[**\Tatum\Model\Trade[]**](../../Model/Trade)

### Description

List all historical trades

<h4>1 credit per API call.</h4>

List all historical trades. It is possible to list all trades, trades for specific trading pair and/or account.

[Back to top](#top)



## `getMatchedTrades()`

### Example

[👉 View "**getMatchedTrades.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/OrderBookApi/getMatchedTrades.php)

### Request

> **POST** `/v3/trade/matched`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->orderBook()->getMatchedTrades(
    \Tatum\Model\ListOderBookMatchedBody $list_oder_book_matched_body
): \Tatum\Model\Trade[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$list_oder_book_matched_body** | [**\Tatum\Model\ListOderBookMatchedBody**](../../Model/ListOderBookMatchedBody) |  |

### Return type

[**\Tatum\Model\Trade[]**](../../Model/Trade)

### Description

List all matched orders from FUTURE_SELL/FUTURE_BUY trades

<h4>1 credit per API call.</h4>

List all matched orders from the FUTURE_BUY OR FUTURE_SELL orders.

[Back to top](#top)



## `getSellTradesBody()`

### Example

[👉 View "**getSellTradesBody.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/OrderBookApi/getSellTradesBody.php)

### Request

> **POST** `/v3/trade/sell`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->orderBook()->getSellTradesBody(
    \Tatum\Model\ListOderBookActiveSellBody $list_oder_book_active_sell_body
): \Tatum\Model\Trade[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$list_oder_book_active_sell_body** | [**\Tatum\Model\ListOderBookActiveSellBody**](../../Model/ListOderBookActiveSellBody) |  |

### Return type

[**\Tatum\Model\Trade[]**](../../Model/Trade)

### Description

List all active sell trades

<h4>1 credit per API call.</h4>

List all active sell trades.

[Back to top](#top)



## `getTradeById()`

### Example

[👉 View "**getTradeById.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/OrderBookApi/getTradeById.php)

### Request

> **GET** `/v3/trade/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->orderBook()->getTradeById(
    string $id
): \Tatum\Model\Trade
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Trade ID |

### Return type

[**\Tatum\Model\Trade**](../../Model/Trade)

### Description

Get existing trade

<h4>1 credit for API call</h4>

Get existing opened trade.

[Back to top](#top)

