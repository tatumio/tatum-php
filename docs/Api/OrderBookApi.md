# Tatum/Api/OrderBookApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**chartRequest()**](#chartrequest) | **POST** [/v3/trade/chart](https://apidoc.tatum.io/tag/OrderBook#operation/chartRequest) | Obtain chart data from historical closed trades
[**deleteAccountTrades()**](#deleteaccounttrades) | **DELETE** [/v3/trade/account/{id}](https://apidoc.tatum.io/tag/OrderBook#operation/deleteAccountTrades) | Cancel all existing trades for account
[**deleteTrade()**](#deletetrade) | **DELETE** [/v3/trade/{id}](https://apidoc.tatum.io/tag/OrderBook#operation/deleteTrade) | Cancel existing trade
[**getBuyTrades()**](#getbuytrades) | **GET** [/v3/trade/buy](https://apidoc.tatum.io/tag/OrderBook#operation/getBuyTrades) | List all active buy trades
[**getBuyTradesBody()**](#getbuytradesbody) | **POST** [/v3/trade/buy](https://apidoc.tatum.io/tag/OrderBook#operation/getBuyTradesBody) | List all active buy trades
[**getHistoricalTrades()**](#gethistoricaltrades) | **GET** [/v3/trade/history](https://apidoc.tatum.io/tag/OrderBook#operation/getHistoricalTrades) | List all historical trades
[**getHistoricalTradesBody()**](#gethistoricaltradesbody) | **POST** [/v3/trade/history](https://apidoc.tatum.io/tag/OrderBook#operation/getHistoricalTradesBody) | List all historical trades
[**getMatchedTrades()**](#getmatchedtrades) | **POST** [/v3/trade/matched](https://apidoc.tatum.io/tag/OrderBook#operation/getMatchedTrades) | List all matched orders from FUTURE_SELL/FUTURE_BUY trades
[**getSellTrades()**](#getselltrades) | **GET** [/v3/trade/sell](https://apidoc.tatum.io/tag/OrderBook#operation/getSellTrades) | List all active sell trades
[**getSellTradesBody()**](#getselltradesbody) | **POST** [/v3/trade/sell](https://apidoc.tatum.io/tag/OrderBook#operation/getSellTradesBody) | List all active sell trades
[**getTradeById()**](#gettradebyid) | **GET** [/v3/trade/{id}](https://apidoc.tatum.io/tag/OrderBook#operation/getTradeById) | Get existing trade
[**tradeCreateFutureTrade()**](#tradecreatefuturetrade) | **POST** [/v3/trade#postCreateFutureTrade](https://apidoc.tatum.io/tag/OrderBook#operation/tradeCreateFutureTrade) | Store buy / sell trade
[**tradeCreateTrade()**](#tradecreatetrade) | **POST** [/v3/trade#postCreateTrade](https://apidoc.tatum.io/tag/OrderBook#operation/tradeCreateTrade) | Store buy / sell trade


## `chartRequest()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->orderBook()->chartRequest(
    \Tatum\Model\ChartRequest $chart_request
): \Tatum\Model\Chart[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chart_request** | [**\Tatum\Model\ChartRequest**](../Model/ChartRequest.md) |  |

### Return type

[**\Tatum\Model\Chart[]**](../Model/Chart.md)

### Description

Obtain chart data from historical closed trades

<h4>2 credits for API call.</h4><br/> <p>Obtain data from the closed trades for entering in the chart. Time interval is set between <i>from</i> and <i>to</i> and there is defined time frame. There can be obtained at most 200 time points in the time interval.</p>

### Example

[✨ View "chartRequest.php"](../../examples/Api/OrderBookApi/chartRequest.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deleteAccountTrades()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->orderBook()->deleteAccountTrades(
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

<h4>1 credit for API call, 1 credit for each cancelled trade. 1 API call + 2 cancellations  = 3 credits.</h4><br/><p>Cancel all trades for account.</p>

### Example

[✨ View "deleteAccountTrades.php"](../../examples/Api/OrderBookApi/deleteAccountTrades.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deleteTrade()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->orderBook()->deleteTrade(
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

<h4>1 credit for API call</h4><br/><p>Cancel existing trade.</p>

### Example

[✨ View "deleteTrade.php"](../../examples/Api/OrderBookApi/deleteTrade.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getBuyTrades()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->orderBook()->getBuyTrades(
    float $page_size,
    [ string $id, ]
    [ string $customer_id, ]
    [ float $offset, ]
    [ string $pair, ]
    [ bool $count, ]
    [ string $trade_type ]
): \Tatum\Model\Trade[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$id** | **string**  | Account ID. If present, list current active buy trades for that account. | [optional]
 **$customer_id** | **string**  | Customer ID. If present, list current active buy trades for that customer. | [optional]
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]
 **$pair** | **string**  | Trade pair. If present, list current active buy trades for that pair. | [optional]
 **$count** | **bool**  | Get the total trade pair count based on the filter. Either count or pageSize is accepted. | [optional]
 **$trade_type** | **string**  | Trade type. | [optional]

### Return type

[**\Tatum\Model\Trade[]**](../Model/Trade.md)

### Description

List all active buy trades

<h4>1 credit per API call.</h4><br/><p>List all active buy trades.</p>

### Example

[✨ View "getBuyTrades.php"](../../examples/Api/OrderBookApi/getBuyTrades.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getBuyTradesBody()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->orderBook()->getBuyTradesBody(
    \Tatum\Model\ListOderBookActiveBuyBody $list_oder_book_active_buy_body
): \Tatum\Model\Trade[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$list_oder_book_active_buy_body** | [**\Tatum\Model\ListOderBookActiveBuyBody**](../Model/ListOderBookActiveBuyBody.md) |  |

### Return type

[**\Tatum\Model\Trade[]**](../Model/Trade.md)

### Description

List all active buy trades

<h4>1 credit per API call.</h4><br/><p>List all active buy trades.</p>

### Example

[✨ View "getBuyTradesBody.php"](../../examples/Api/OrderBookApi/getBuyTradesBody.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getHistoricalTrades()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->orderBook()->getHistoricalTrades(
    float $page_size,
    [ string $id, ]
    [ string $pair, ]
    [ float $offset, ]
    [ bool $count, ]
    [ string[] $types ]
): \Tatum\Model\Trade[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$id** | **string**  | Account ID. If present, only closed trades for given account will be present. | [optional]
 **$pair** | **string**  | Trade pair. If present, only closed trades on given trade pair will be present. | [optional]
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]
 **$count** | **bool**  | Get the total trade pair count based on the filter. Either count or pageSize is accepted. | [optional]
 **$types** | [**string[]**](../Model/string.md) | Trade types. | [optional]

### Return type

[**\Tatum\Model\Trade[]**](../Model/Trade.md)

### Description

List all historical trades

<h4>1 credit per API call.</h4><br/><p>List all historical trades. It is possible to list all trades, trades for specific trading pair and/or account.</p>

### Example

[✨ View "getHistoricalTrades.php"](../../examples/Api/OrderBookApi/getHistoricalTrades.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getHistoricalTradesBody()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->orderBook()->getHistoricalTradesBody(
    [ \Tatum\Model\ListOderBookHistoryBody $list_oder_book_history_body ]
): \Tatum\Model\Trade[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$list_oder_book_history_body** | [**\Tatum\Model\ListOderBookHistoryBody**](../Model/ListOderBookHistoryBody.md) |  | [optional]

### Return type

[**\Tatum\Model\Trade[]**](../Model/Trade.md)

### Description

List all historical trades

<h4>1 credit per API call.</h4><br/><p>List all historical trades. It is possible to list all trades, trades for specific trading pair and/or account.</p>

### Example

[✨ View "getHistoricalTradesBody.php"](../../examples/Api/OrderBookApi/getHistoricalTradesBody.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getMatchedTrades()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->orderBook()->getMatchedTrades(
    \Tatum\Model\ListOderBookMatchedBody $list_oder_book_matched_body
): \Tatum\Model\Trade[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$list_oder_book_matched_body** | [**\Tatum\Model\ListOderBookMatchedBody**](../Model/ListOderBookMatchedBody.md) |  |

### Return type

[**\Tatum\Model\Trade[]**](../Model/Trade.md)

### Description

List all matched orders from FUTURE_SELL/FUTURE_BUY trades

<h4>1 credit per API call.</h4><br/><p>List all matched orders from the FUTURE_BUY OR FUTURE_SELL orders.</p>

### Example

[✨ View "getMatchedTrades.php"](../../examples/Api/OrderBookApi/getMatchedTrades.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getSellTrades()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->orderBook()->getSellTrades(
    float $page_size,
    [ string $id, ]
    [ string $customer_id, ]
    [ float $offset, ]
    [ string $pair, ]
    [ bool $count, ]
    [ string $trade_type ]
): \Tatum\Model\Trade[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$id** | **string**  | Account ID. If present, list current active sell trades for that account. | [optional]
 **$customer_id** | **string**  | Customer ID. If present, list current active buy trades for that customer. | [optional]
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]
 **$pair** | **string**  | Trade pair. If present, list current active sell trades for that pair. | [optional]
 **$count** | **bool**  | Get the total trade pair count based on the filter. Either count or pageSize is accepted. | [optional]
 **$trade_type** | **string**  | Trade type. | [optional]

### Return type

[**\Tatum\Model\Trade[]**](../Model/Trade.md)

### Description

List all active sell trades

<h4>1 credit per API call.</h4><br/><p>List all active sell trades.</p>

### Example

[✨ View "getSellTrades.php"](../../examples/Api/OrderBookApi/getSellTrades.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getSellTradesBody()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->orderBook()->getSellTradesBody(
    \Tatum\Model\ListOderBookActiveSellBody $list_oder_book_active_sell_body
): \Tatum\Model\Trade[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$list_oder_book_active_sell_body** | [**\Tatum\Model\ListOderBookActiveSellBody**](../Model/ListOderBookActiveSellBody.md) |  |

### Return type

[**\Tatum\Model\Trade[]**](../Model/Trade.md)

### Description

List all active sell trades

<h4>1 credit per API call.</h4><br/><p>List all active sell trades.</p>

### Example

[✨ View "getSellTradesBody.php"](../../examples/Api/OrderBookApi/getSellTradesBody.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getTradeById()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->orderBook()->getTradeById(
    string $id
): \Tatum\Model\Trade
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Trade ID |

### Return type

[**\Tatum\Model\Trade**](../Model/Trade.md)

### Description

Get existing trade

<h4>1 credit for API call</h4><br/><p>Get existing opened trade.</p>

### Example

[✨ View "getTradeById.php"](../../examples/Api/OrderBookApi/getTradeById.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tradeCreateFutureTrade()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->orderBook()->tradeCreateFutureTrade(
    \Tatum\Model\CreateFutureTrade $create_future_trade
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_future_trade** | [**\Tatum\Model\CreateFutureTrade**](../Model/CreateFutureTrade.md) |  |

### Return type

[**\Tatum\Model\Id**](../Model/Id.md)

### Description

Store buy / sell trade

CreateFutureTrade operation

### Example

[✨ View "tradeCreateFutureTrade.php"](../../examples/Api/OrderBookApi/tradeCreateFutureTrade.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tradeCreateTrade()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->orderBook()->tradeCreateTrade(
    \Tatum\Model\CreateTrade $create_trade
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_trade** | [**\Tatum\Model\CreateTrade**](../Model/CreateTrade.md) |  |

### Return type

[**\Tatum\Model\Id**](../Model/Id.md)

### Description

Store buy / sell trade

<h4>2 credits for API call, 2 credits for each fill of the counter trade. 1 API call + 2 fills  = 6 credits.</h4><br/> <p>Store new buy / sell trade. If there is trade already available to fill, fill as much trades as possible.<br/> It is possible to charge fees for the trades. Fees are an extra amount on top of the trade amount and are paid in the currency that you going to block e.g.: - BUY BTC/USDT - fees will be paid in USDT - SELL BTC/ETH - fees will be paid in BTC </p>  <p> If you fill type of the trade with FUTURE_BUY or FUTURE_SELL the trade will behave as a trade future. The trade is concluded now but will be fulfilled in future. The date of fulfillment is by the “Seal Date” field. You can also block a percentage of the amount until the future trade has expired. </p> <p>Futures can also penalize contracting parties if they don’t have the agreed balance available in their accounts. The penalty is calculated in the following way: Penalty amount = (Percentage of incomplete deal amount because of shortage from user) × (Maximum Penalty percentage of futures deal based on blocked amount and time interval) × (total blocked value). </p> <p>Example of the BTC/USDT trade future:</p> <p>The maker creates a sell with the following properties: 1 BTC at a price of 60000 USDT, with a blocking percentage of 22%, a penalty percentage of 45%, a system commision of 1% and with an expiration time of within 12 hours.</p> <pre> {   "type": "FUTURE_SELL",   "price": "60000",   "amount": "1",   "pair": "BTC/USDT",   "currency1AccountId": "60a236db1b57f60d62612bf3",   "currency2AccountId": "609d0696bf835c241ac2920f",   "fee": 1,   "feeAccountId": "609d0696bf835c251ac2920a",   "attr": {     "sealDate": 1621990960631,     "percentBlock": 22,     "percentPenalty": 45   } } </pre>  The taker accepts the offer with a buy and blocks 13200 USDT (60000 USDT × 0.22) in their account. <pre> {   "type": "FUTURE_BUY",   "price": "60000",   "amount": "1",   "pair": "BTC/USDT",   "currency1AccountId": "60a236db1b57f60d62612bf2",   "currency2AccountId": "609d0696bf835c241ac2920a",   "attr": {     "sealDate": 1621990960631,     "percentBlock": 22,     "percentPenalty": 45   } } </pre> <p>At the time of the trade, the maker and taker have the following conditions. The maker has 0.65 BTC (35% deficit) in their account and the taker has 49200 USDT (18% deficit) in their account. </p>  <p> The maker penalty is equal to 0.35 × 0.22 × (0.45 × 1 BTC) = 0.03465 BTC. The taker penalty is equal to 0.18 × 0.22 × (0.45 × 60000 USDT) = 1069.2 USDT. </p> <p> The system commission for the maker is 1 BTC × 1% = 0.01 BTC. The system commission for the taker is 60000 USDT × 1% = 600 USDT. </p> <p> The maker’s assets after deducting penalties and commissions equals 0.65 - 0.03465 - 0.01 = 0.60535 BTC. The taker’s assets after deducting penalties and commissions equals 49200 - 1069.2 - 600 = 47530.8 USDT. </p> <p> The amount received by the maker after the trade is (0.60535 × 60000) + 1069.2 = 37390.2 USDT and the taker receives 0.60535 + 0.03465 = 0.64 BTC. </p>

### Example

[✨ View "tradeCreateTrade.php"](../../examples/Api/OrderBookApi/tradeCreateTrade.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
