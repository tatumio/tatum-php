---
title: Account
parent: API
layout: page
---

# Api/AccountApi

[Account API Reference](https://apidoc.tatum.io/tag/Account/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->account();

// TestNet API Call
$sdk->testnet()->api()->account();
```

## Methods

Method | Description
------------- | -------------
[**activateAccount()**](#activateaccount) | Activate account
[**blockAmount()**](#blockamount) | Block an amount in an account
[**createAccount()**](#createaccount) | Create a virtual account
[**createAccountBatch()**](#createaccountbatch) | Create multiple accounts in a batch call
[**createAccountXpub()**](#createaccountxpub) | Create a virtual account
[**deactivateAccount()**](#deactivateaccount) | Deactivate account
[**deleteAllBlockAmount()**](#deleteallblockamount) | Unblock all blocked amounts in an account
[**deleteBlockAmount()**](#deleteblockamount) | Unblock a blocked amount in an account
[**freezeAccount()**](#freezeaccount) | Freeze account
[**getAccountBalance()**](#getaccountbalance) | Get account balance
[**getAccountByAccountId()**](#getaccountbyaccountid) | Get account by ID
[**getAccounts()**](#getaccounts) | List all accounts
[**getAccountsByCustomerId()**](#getaccountsbycustomerid) | List all customer accounts
[**getAccountsCount()**](#getaccountscount) | Count of found entities for get accounts request
[**getBlockAmount()**](#getblockamount) | Get blocked amounts in an account
[**getBlockAmountById()**](#getblockamountbyid) | Get blocked amount by ID
[**unblockAmountWithTransaction()**](#unblockamountwithtransaction) | Unblock an amount in an account and perform a transaction
[**unfreezeAccount()**](#unfreezeaccount) | Unfreeze account
[**updateAccountByAccountId()**](#updateaccountbyaccountid) | Update account


## `activateAccount()`

### Example

[👉 View "**activateAccount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/activateAccount.php)

### Request

> **PUT** `/v3/ledger/account/{id}/activate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->activateAccount(
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

Activate account

<h4>2 credits per API call.</h4>

Activates an account.

[Back to top](#top)



## `blockAmount()`

### Example

[👉 View "**blockAmount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/blockAmount.php)

### Request

> **POST** `/v3/ledger/account/block/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->blockAmount(
    string $id,
    \Tatum\Model\BlockAmount $block_amount
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |
 **$block_amount** | [**\Tatum\Model\BlockAmount**](../../Model/BlockAmount) |  |

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Block an amount in an account

<h4>2 credits per API call.</h4>

 Blocks an amount in an account. Any number of distinct amounts can be blocked in one account. Every new blockage has its own distinct ID, which is used as a reference. When the amount is blocked, it is debited from the available balance of the account. The account balance remains the same. The account balance represents the total amount of funds in the account. The available balance represents the total amount of funds that can be used to perform transactions. When an account is frozen, the available balance is set to 0 minus all blockages for the account.

[Back to top](#top)



## `createAccount()`

### Example

[👉 View "**createAccount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/createAccount.php)

### Request

> **POST** `/v3/ledger/account`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->createAccount(
    \Tatum\Model\CreateAccount $create_account
): \Tatum\Model\Account
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_account** | [**\Tatum\Model\CreateAccount**](../../Model/CreateAccount) |  |

### Return type

[**\Tatum\Model\Account**](../../Model/Account)

### Description

Create a virtual account

CreateAccount operation

[Back to top](#top)



## `createAccountBatch()`

### Example

[👉 View "**createAccountBatch.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/createAccountBatch.php)

### Request

> **POST** `/v3/ledger/account/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->createAccountBatch(
    \Tatum\Model\CreateAccountBatch $create_account_batch
): \Tatum\Model\Account[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_account_batch** | [**\Tatum\Model\CreateAccountBatch**](../../Model/CreateAccountBatch) |  |

### Return type

[**\Tatum\Model\Account[]**](../../Model/Account)

### Description

Create multiple accounts in a batch call

<h4>2 credits per API call + 1 credit for every account created.</h4>

 Creates new accounts for the customer in a batch call.

[Back to top](#top)



## `createAccountXpub()`

### Example

[👉 View "**createAccountXpub.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/createAccountXpub.php)

### Request

> **POST** `/v3/ledger/account`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->createAccountXpub(
    \Tatum\Model\CreateAccountXpub $create_account_xpub
): \Tatum\Model\Account
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_account_xpub** | [**\Tatum\Model\CreateAccountXpub**](../../Model/CreateAccountXpub) |  |

### Return type

[**\Tatum\Model\Account**](../../Model/Account)

### Description

Create a virtual account

**2 credits per API call**

 Create a new virtual account for a customer.

 

<ul> <li>If the customer that you specified in the request body already exists, the newly created virtual account is added to this customer's list of accounts.</li> <li>If the customer that you specified in the request body does not exist yet, a new customer is created together with the virtual account, and the virtual account is added to this customer.</li> </ul>

 You can create a virtual account for any supported cryptocurrency, fiat currency, Tatum virtual currency, or fungible tokens created within Tatum. Once the currency/asset is set for a virtual account, it cannot be changed.

 **Virtual account balance**

 A virtual account has its own balance. The balance can be logically presented by the account balance and available balance:

 

<ul> <li>The **account balance** (<code>accountBalance</code>) represents all assets on the account, both available and blocked.</li> <li>The **available balance** (<code>availableBalance</code>) represents the account balance minus the blocked assets. Use the available balance to determine how much a customer can send or withdraw from their virtual account.</li> </ul>

 **Cryptocurrency virtual accounts**

 When you create a virtual account based on a cryptocurrency (for example, BTC or ETH), you have to provide the extended public key (<code>xpub</code>) of the blockchain wallet that will be connected to this account.

 **NOTE:** Adding <code>xpub</code> to the virtual account does **not** connect any specific blockchain address to this account. <code>xpub</code> is a generator of addresses, not an address itself.

 Not all blockchains provide <code>xpub</code> for wallets, or Tatum may not support wallets on some blockchains. In such cases, use the wallet address or the account address instead.

 

<ul> <li>**ALGO:** No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/Algorand#operation/AlgorandGenerateWallet" target="_blank">generated wallet</a> instead.</li> <li>**BCH:** Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Bitcoin-Cash#operation/BchGenerateWallet" target="_blank">generated wallet</a>.</li> <li>**BNB:** No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/BNB-Beacon-Chain#operation/BnbGenerateWallet" target="_blank">generated wallet</a> instead.</li> <li>**BSC:** Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/BNB-Smart-Chain#operation/BscGenerateWallet" target="_blank">generated wallet</a> instead.</li> <li>**BTC:** Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Bitcoin#operation/BtcGenerateWallet" target="_blank">generated wallet</a> instead.</li> <li>**CELO:** Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Celo#operation/CeloGenerateWallet" target="_blank">generated wallet</a>.</li> <li>**DOGE:** Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Dogecoin#operation/DogeGenerateWallet" target="_blank">generated wallet</a>.</li> <li>**EGLD:** No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/Elrond#operation/EgldGenerateAddress" target="_blank">generated blockchain address</a> instead.

Blockchain addresses on Elrond are generated based on the mnemonic of an Elrond wallet. If you do not have an Elrond wallet, <a href="https://apidoc.tatum.io/tag/Elrond/#operation/EgldGenerateWallet" target="_blank">create one</a>.</li> <li>**ETH:** Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Ethereum#operation/EthGenerateWallet" target="_blank">generated wallet</a>.</li> <li>**FLOW:** Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Flow#operation/FlowGenerateWallet" target="_blank">generated wallet</a>.</li> <li>**KCS:** Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/KuCoin#operation/KcsGenerateWallet" target="_blank">generated wallet</a>.</li> <li>**KLAY:** Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Klaytn#operation/KlaytnGenerateWallet" target="_blank">generated wallet</a>.</li> <li>**LTC:** Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Litecoin#operation/LtcGenerateWallet" target="_blank">generated wallet</a>.</li> <li>**MATIC:** Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Polygon#operation/PolygonGenerateWallet" target="_blank">generated wallet</a>.</li> <li>**SOL:** No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/Solana#operation/SolanaGenerateWallet" target="_blank">generated wallet</a> instead.</li> <li>**TRON:** Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Tron#operation/GenerateTronwallet" target="_blank">generated wallet</a>.</li> <li>**XDC:** Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/XinFin#operation/XdcGenerateWallet" target="_blank">generated wallet</a>.</li> <li>**XLM:** No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/Stellar#operation/XlmWallet" target="_blank">generated account</a> instead.</li> <li>**XRP:** No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/XRP#operation/XrpWallet" target="_blank">generated account</a> instead.</li> </ul>

 **Connect a virtual account to the blockchain**

 

<ul> <li>If the virtual account was created with the wallet's <code>xpub</code>, <a href="https://apidoc.tatum.io/tag/Blockchain-addresses#operation/generateDepositAddress" target="_blank">generate a new blockchain address</a> for this account.</li> <li>If the virtual account was created with the wallet's or account's address instead of the wallet's <code>xpub</code>, <a href="https://apidoc.tatum.io/tag/Blockchain-addresses#operation/assignAddress" target="_blank">assign an existing blockchain address</a> to this account.</li> </ul>

 You can connect multiple blockchain addresses to one virtual account.

[Back to top](#top)



## `deactivateAccount()`

### Example

[👉 View "**deactivateAccount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/deactivateAccount.php)

### Request

> **PUT** `/v3/ledger/account/{id}/deactivate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->deactivateAccount(
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

Deactivate account

<h4>2 credits per API call.</h4>

Deactivates an account. Only accounts with account and available balances of zero can be deactivated. Deactivated accounts are not visible in the list of accounts, it is not possible to send funds to these accounts or perform transactions. However, they are still present in the ledger and all transaction histories.

[Back to top](#top)



## `deleteAllBlockAmount()`

### Example

[👉 View "**deleteAllBlockAmount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/deleteAllBlockAmount.php)

### Request

> **DELETE** `/v3/ledger/account/block/account/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->deleteAllBlockAmount(
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

Unblock all blocked amounts in an account

<h4>1 credit per API call, 1 credit for each deleted blockage. 1 API call + 2 blockages = 3 credits.</h4>

Unblocks previously blocked amounts in an account. Increases the available balance in the account where the amount was blocked.

[Back to top](#top)



## `deleteBlockAmount()`

### Example

[👉 View "**deleteBlockAmount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/deleteBlockAmount.php)

### Request

> **DELETE** `/v3/ledger/account/block/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->deleteBlockAmount(
    string $id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Blockage ID |

### Return type

void (empty response body)

### Description

Unblock a blocked amount in an account

<h4>1 credit per API call.</h4>

Unblocks a previously blocked amount in an account. Increases the available balance in the account where the amount was blocked.

[Back to top](#top)



## `freezeAccount()`

### Example

[👉 View "**freezeAccount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/freezeAccount.php)

### Request

> **PUT** `/v3/ledger/account/{id}/freeze`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->freezeAccount(
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

Freeze account

<h4>2 credits per API call.</h4>

Disables all outgoing transactions. Incoming transactions to the account are available. When an account is frozen, its available balance is set to 0. This operation will create a new blockage of type ACCOUNT_FROZEN, which is automatically deleted when the account is unfrozen.

[Back to top](#top)



## `getAccountBalance()`

### Example

[👉 View "**getAccountBalance.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/getAccountBalance.php)

### Request

> **GET** `/v3/ledger/account/{id}/balance`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->getAccountBalance(
    string $id
): \Tatum\Model\AccountBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |

### Return type

[**\Tatum\Model\AccountBalance**](../../Model/AccountBalance)

### Description

Get account balance

<h4>1 credit per API call.</h4>

Get balance for the account.

[Back to top](#top)



## `getAccountByAccountId()`

### Example

[👉 View "**getAccountByAccountId.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/getAccountByAccountId.php)

### Request

> **GET** `/v3/ledger/account/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->getAccountByAccountId(
    string $id
): \Tatum\Model\Account
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |

### Return type

[**\Tatum\Model\Account**](../../Model/Account)

### Description

Get account by ID

<h4>1 credit per API call.</h4>

Gets active account by ID. Displays all information regarding the given account.

[Back to top](#top)



## `getAccounts()`

### Example

[👉 View "**getAccounts.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/getAccounts.php)

### Request

> **GET** `/v3/ledger/account`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->getAccounts(
    [ float $page_size, ]
    [ float $page, ]
    [ string $sort, ]
    [ string $sort_by, ]
    [ bool $active, ]
    [ bool $only_non_zero_balance, ]
    [ bool $frozen, ]
    [ string $currency, ]
    [ string $account_number ]
): \Tatum\Model\Account[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. | [optional]
 **$page** | **float**  | Page number | [optional]
 **$sort** | **string**  | Direction of sorting. Can be asc or desc | [optional]
 **$sort_by** | **string**  | Sort by | [optional]
 **$active** | **bool**  | Filter only active or non active accounts | [optional]
 **$only_non_zero_balance** | **bool**  | Filter only accounts with non zero balances | [optional]
 **$frozen** | **bool**  | Filter only frozen or non frozen accounts | [optional]
 **$currency** | **string**  | Filter by currency | [optional]
 **$account_number** | **string**  | Filter by account number | [optional]

### Return type

[**\Tatum\Model\Account[]**](../../Model/Account)

### Description

List all accounts

<h4>1 credit per API call.</h4>

Lists all accounts. Inactive accounts are also visible.

[Back to top](#top)



## `getAccountsByCustomerId()`

### Example

[👉 View "**getAccountsByCustomerId.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/getAccountsByCustomerId.php)

### Request

> **GET** `/v3/ledger/account/customer/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->getAccountsByCustomerId(
    float $page_size,
    string $id,
    [ float $offset, ]
    [ string $account_code ]
): \Tatum\Model\Account[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$id** | **string**  | Internal customer ID |
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]
 **$account_code** | **string**  | For bookkeeping to distinct account purpose. | [optional]

### Return type

[**\Tatum\Model\Account[]**](../../Model/Account)

### Description

List all customer accounts

<h4>1 credit per API call.</h4>

Lists all accounts associated with a customer. Only active accounts are visible.

[Back to top](#top)



## `getAccountsCount()`

### Example

[👉 View "**getAccountsCount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/getAccountsCount.php)

### Request

> **GET** `/v3/ledger/account/count`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->getAccountsCount(
    [ float $page_size, ]
    [ float $page, ]
    [ string $sort, ]
    [ string $sort_by, ]
    [ bool $active, ]
    [ bool $only_non_zero_balance, ]
    [ bool $frozen, ]
    [ string $currency, ]
    [ string $account_number ]
): \Tatum\Model\EntitiesCount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. | [optional]
 **$page** | **float**  | Page number | [optional]
 **$sort** | **string**  | Direction of sorting. Can be asc or desc | [optional]
 **$sort_by** | **string**  | Sort by | [optional]
 **$active** | **bool**  | Filter only active or non active accounts | [optional]
 **$only_non_zero_balance** | **bool**  | Filter only accounts with non zero balances | [optional]
 **$frozen** | **bool**  | Filter only frozen or non frozen accounts | [optional]
 **$currency** | **string**  | Filter by currency | [optional]
 **$account_number** | **string**  | Filter by account number | [optional]

### Return type

[**\Tatum\Model\EntitiesCount**](../../Model/EntitiesCount)

### Description

Count of found entities for get accounts request

<h4>1 credit per API call.</h4>

Count of accounts that were found from /v3/ledger/account

[Back to top](#top)



## `getBlockAmount()`

### Example

[👉 View "**getBlockAmount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/getBlockAmount.php)

### Request

> **GET** `/v3/ledger/account/block/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->getBlockAmount(
    string $id,
    float $page_size,
    [ float $offset ]
): \Tatum\Model\Blockage[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]

### Return type

[**\Tatum\Model\Blockage[]**](../../Model/Blockage)

### Description

Get blocked amounts in an account

<h4>1 credit per API call.</h4>

Gets blocked amounts for an account.

[Back to top](#top)



## `getBlockAmountById()`

### Example

[👉 View "**getBlockAmountById.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/getBlockAmountById.php)

### Request

> **GET** `/v3/ledger/account/block/{id}/detail`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->getBlockAmountById(
    string $id
): \Tatum\Model\Blockage
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Blocked amount ID |

### Return type

[**\Tatum\Model\Blockage**](../../Model/Blockage)

### Description

Get blocked amount by ID

<h4>1 credit per API call.</h4>

Gets blocked amount by id.

[Back to top](#top)



## `unblockAmountWithTransaction()`

### Example

[👉 View "**unblockAmountWithTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/unblockAmountWithTransaction.php)

### Request

> **PUT** `/v3/ledger/account/block/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->unblockAmountWithTransaction(
    string $id,
    \Tatum\Model\UnblockAmount $unblock_amount
): \Tatum\Model\TransactionResult
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Blockage ID |
 **$unblock_amount** | [**\Tatum\Model\UnblockAmount**](../../Model/UnblockAmount) |  |

### Return type

[**\Tatum\Model\TransactionResult**](../../Model/TransactionResult)

### Description

Unblock an amount in an account and perform a transaction

<h4>2 credits per API call.</h4>

 Unblocks a previously blocked amount in an account and invokes a ledger transaction from that account to a different recipient. If the request fails, the amount is not unblocked.

[Back to top](#top)



## `unfreezeAccount()`

### Example

[👉 View "**unfreezeAccount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/unfreezeAccount.php)

### Request

> **PUT** `/v3/ledger/account/{id}/unfreeze`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->unfreezeAccount(
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

Unfreeze account

<h4>2 credits per API call.</h4>

Unfreezes a previously frozen account. Unfreezing a non-frozen account not affect the account.

[Back to top](#top)



## `updateAccountByAccountId()`

### Example

[👉 View "**updateAccountByAccountId.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/AccountApi/updateAccountByAccountId.php)

### Request

> **PUT** `/v3/ledger/account/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->account()->updateAccountByAccountId(
    string $id,
    \Tatum\Model\UpdateAccount $update_account
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |
 **$update_account** | [**\Tatum\Model\UpdateAccount**](../../Model/UpdateAccount) |  |

### Return type

void (empty response body)

### Description

Update account

<h4>2 credits per API call.</h4>

Update account by ID. Only a small number of fields can be updated.

[Back to top](#top)

