# Tatum/Api/AccountApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateAccount()**](#activateAccount) | **PUT** /v3/ledger/account/{id}/activate | Activate account
[**blockAmount()**](#blockAmount) | **POST** /v3/ledger/account/block/{id} | Block an amount in an account
[**createAccount()**](#createAccount) | **POST** /v3/ledger/account | Create a virtual account
[**createAccountBatch()**](#createAccountBatch) | **POST** /v3/ledger/account/batch | Create multiple accounts in a batch call
[**deactivateAccount()**](#deactivateAccount) | **PUT** /v3/ledger/account/{id}/deactivate | Deactivate account
[**deleteAllBlockAmount()**](#deleteAllBlockAmount) | **DELETE** /v3/ledger/account/block/account/{id} | Unblock all blocked amounts in an account
[**deleteBlockAmount()**](#deleteBlockAmount) | **DELETE** /v3/ledger/account/block/{id} | Unblock a blocked amount in an account
[**freezeAccount()**](#freezeAccount) | **PUT** /v3/ledger/account/{id}/freeze | Freeze account
[**getAccountBalance()**](#getAccountBalance) | **GET** /v3/ledger/account/{id}/balance | Get account balance
[**getAccountByAccountId()**](#getAccountByAccountId) | **GET** /v3/ledger/account/{id} | Get account by ID
[**getAccounts()**](#getAccounts) | **GET** /v3/ledger/account | List all accounts
[**getAccountsByCustomerId()**](#getAccountsByCustomerId) | **GET** /v3/ledger/account/customer/{id} | List all customer accounts
[**getAccountsCount()**](#getAccountsCount) | **GET** /v3/ledger/account/count | Count of found entities for get accounts request
[**getBlockAmount()**](#getBlockAmount) | **GET** /v3/ledger/account/block/{id} | Get blocked amounts in an account
[**getBlockAmountById()**](#getBlockAmountById) | **GET** /v3/ledger/account/block/{id}/detail | Get blocked amount by ID
[**unblockAmountWithTransaction()**](#unblockAmountWithTransaction) | **PUT** /v3/ledger/account/block/{id} | Unblock an amount in an account and perform a transaction
[**unfreezeAccount()**](#unfreezeAccount) | **PUT** /v3/ledger/account/{id}/unfreeze | Unfreeze account
[**updateAccountByAccountId()**](#updateAccountByAccountId) | **PUT** /v3/ledger/account/{id} | Update account


## `activateAccount()`

```php
api()->account()->activateAccount(
    ?string $id
)
```

Activate account

<h4>2 credits per API call.</h4><br/><p>Activates an account.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account ID
$id = '5e68c66581f2ee32bc354087';

try {
        $sdk
        ->mainnet()
        ->api()
        ->account()
        ->activateAccount($id);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->activateAccount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->activateAccount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Account ID |

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `blockAmount()`

```php
api()->account()->blockAmount(
    ?string $id, 
    ?\Tatum\Model\BlockAmount $block_amount
): \Tatum\Model\Id
```

Block an amount in an account

<h4>2 credits per API call.</h4><br/> <p>Blocks an amount in an account. Any number of distinct amounts can be blocked in one account. Every new blockage has its own distinct ID, which is used as a reference. When the amount is blocked, it is debited from the available balance of the account. The account balance remains the same. The account balance represents the total amount of funds in the account. The available balance represents the total amount of funds that can be used to perform transactions. When an account is frozen, the available balance is set to 0 minus all blockages for the account.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account ID
$id = '5e6be89ee6aa436299950c3f';

$block_amount = new \Tatum\Model\BlockAmount();

try {
    /** @var \Tatum\Model\Id $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->account()
        ->blockAmount($id, $block_amount);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->blockAmount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->blockAmount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Account ID |
 **$block_amount** | [**\Tatum\Model\BlockAmount**](../Model/BlockAmount.md)|  |

### Return type

[**\Tatum\Model\Id**](../Model/Id.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `createAccount()`

```php
api()->account()->createAccount(
    ?\Tatum\Model\CreateAccountRequest $create_account_request
): \Tatum\Model\Account
```

Create a virtual account

<p><b>2 credits per API call</b></p> <p>Create a new virtual account for a customer.</p> <ul> <li>If the customer that you specified in the request body already exists, the newly created virtual account is added to this customer's list of accounts.</li> <li>If the customer that you specified in the request body does not exist yet, a new customer is created together with the virtual account, and the virtual account is added to this customer.</li> </ul> <p>You can create a virtual account for any supported cryptocurrency, fiat currency, Tatum virtual currency, or fungible tokens created within Tatum. Once the currency/asset is set for a virtual account, it cannot be changed.</p> <p><b>Virtual account balance</b></p> <p>A virtual account has its own balance. The balance can be logically presented by the account balance and available balance:</p> <ul> <li>The <b>account balance</b> (<code>accountBalance</code>) represents all assets on the account, both available and blocked.</li> <li>The <b>available balance</b> (<code>availableBalance</code>) represents the account balance minus the blocked assets. Use the available balance to determine how much a customer can send or withdraw from their virtual account.</li> </ul> <p><b>Cryptocurrency virtual accounts</b></p> <p>When you create a virtual account based on a cryptocurrency (for example, BTC or ETH), you have to provide the extended public key (<code>xpub</code>) of the blockchain wallet that will be connected to this account.</p> <p><b>NOTE:</b> Adding <code>xpub</code> to the virtual account does <b>not</b> connect any specific blockchain address to this account. <code>xpub</code> is a generator of addresses, not an address itself.</p> <p>Not all blockchains provide <code>xpub</code> for wallets, or Tatum may not support wallets on some blockchains. In such cases, use the wallet address or the account address instead.</p> <ul> <li><b>ALGO:</b> No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/Algorand#operation/AlgorandGenerateWallet" target="_blank">generated wallet</a> instead.</li> <li><b>BCH:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Bitcoin-Cash#operation/BchGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>BNB:</b> No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/BNB-Beacon-Chain#operation/BnbGenerateWallet" target="_blank">generated wallet</a> instead.</li> <li><b>BSC:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/BNB-Smart-Chain#operation/BscGenerateWallet" target="_blank">generated wallet</a> instead.</li> <li><b>BTC:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Bitcoin#operation/BtcGenerateWallet" target="_blank">generated wallet</a> instead.</li> <li><b>CELO:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Celo#operation/CeloGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>DOGE:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Dogecoin#operation/DogeGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>EGLD:</b> No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/Elrond#operation/EgldGenerateAddress" target="_blank">generated blockchain address</a> instead.<br />Blockchain addresses on Elrond are generated based on the mnemonic of an Elrond wallet. If you do not have an Elrond wallet, <a href="https://apidoc.tatum.io/tag/Elrond/#operation/EgldGenerateWallet" target="_blank">create one</a>.</li> <li><b>ETH:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Ethereum#operation/EthGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>FLOW:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Flow#operation/FlowGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>KCS:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/KuCoin#operation/KcsGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>KLAY:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Klaytn#operation/KlaytnGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>LTC:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Litecoin#operation/LtcGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>MATIC:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Polygon#operation/PolygonGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>SOL:</b> No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/Solana#operation/SolanaGenerateWallet" target="_blank">generated wallet</a> instead.</li> <li><b>TRON:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Tron#operation/GenerateTronwallet" target="_blank">generated wallet</a>.</li> <li><b>XDC:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/XinFin#operation/XdcGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>XLM:</b> No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/Stellar#operation/XlmWallet" target="_blank">generated account</a> instead.</li> <li><b>XRP:</b> No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/XRP#operation/XrpWallet" target="_blank">generated account</a> instead.</li> </ul> <p><b>Connect a virtual account to the blockchain</b></p> <ul> <li>If the virtual account was created with the wallet's <code>xpub</code>, <a href="https://apidoc.tatum.io/tag/Blockchain-addresses#operation/generateDepositAddress" target="_blank">generate a new blockchain address</a> for this account.</li> <li>If the virtual account was created with the wallet's or account's address instead of the wallet's <code>xpub</code>, <a href="https://apidoc.tatum.io/tag/Blockchain-addresses#operation/assignAddress" target="_blank">assign an existing blockchain address</a> to this account.</li> </ul> <p>You can connect multiple blockchain addresses to one virtual account.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$create_account_request = new \Tatum\Model\CreateAccountRequest();

try {
    /** @var \Tatum\Model\Account $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->account()
        ->createAccount($create_account_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->createAccount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->createAccount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_account_request** | [**\Tatum\Model\CreateAccountRequest**](../Model/CreateAccountRequest.md)|  |

### Return type

[**\Tatum\Model\Account**](../Model/Account.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `createAccountBatch()`

```php
api()->account()->createAccountBatch(
    ?\Tatum\Model\CreateAccountBatch $create_account_batch
): \Tatum\Model\Account[]
```

Create multiple accounts in a batch call

<h4>2 credits per API call + 1 credit for every account created.</h4><br/> <p>Creates new accounts for the customer in a batch call.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$create_account_batch = new \Tatum\Model\CreateAccountBatch();

try {
    /** @var \Tatum\Model\Account[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->account()
        ->createAccountBatch($create_account_batch);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->createAccountBatch(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->createAccountBatch(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_account_batch** | [**\Tatum\Model\CreateAccountBatch**](../Model/CreateAccountBatch.md)|  |

### Return type

[**\Tatum\Model\Account[]**](../Model/Account.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `deactivateAccount()`

```php
api()->account()->deactivateAccount(
    ?string $id
)
```

Deactivate account

<h4>2 credits per API call.</h4><br/><p>Deactivates an account. Only accounts with account and available balances of zero can be deactivated. Deactivated accounts are not visible in the list of accounts, it is not possible to send funds to these accounts or perform transactions. However, they are still present in the ledger and all transaction histories.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account ID
$id = '5e68c66581f2ee32bc354087';

try {
        $sdk
        ->mainnet()
        ->api()
        ->account()
        ->deactivateAccount($id);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->deactivateAccount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->deactivateAccount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Account ID |

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `deleteAllBlockAmount()`

```php
api()->account()->deleteAllBlockAmount(
    ?string $id
)
```

Unblock all blocked amounts in an account

<h4>1 credit per API call, 1 credit for each deleted blockage. 1 API call + 2 blockages  = 3 credits.</h4><br/><p>Unblocks previously blocked amounts in an account. Increases the available balance in the account where the amount was blocked.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account ID
$id = '5e6be89ee6aa436299950c3f';

try {
        $sdk
        ->mainnet()
        ->api()
        ->account()
        ->deleteAllBlockAmount($id);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->deleteAllBlockAmount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->deleteAllBlockAmount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Account ID |

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `deleteBlockAmount()`

```php
api()->account()->deleteBlockAmount(
    ?string $id
)
```

Unblock a blocked amount in an account

<h4>1 credit per API call.</h4><br/><p>Unblocks a previously blocked amount in an account. Increases the available balance in the account where the amount was blocked.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Blockage ID
$id = '5e6be89ee6aa436299950c3f';

try {
        $sdk
        ->mainnet()
        ->api()
        ->account()
        ->deleteBlockAmount($id);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->deleteBlockAmount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->deleteBlockAmount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Blockage ID |

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `freezeAccount()`

```php
api()->account()->freezeAccount(
    ?string $id
)
```

Freeze account

<h4>2 credits per API call.</h4><br/><p>Disables all outgoing transactions. Incoming transactions to the account are available. When an account is frozen, its available balance is set to 0. This operation will create a new blockage of type ACCOUNT_FROZEN, which is automatically deleted when the account is unfrozen.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account ID
$id = '5e68c66581f2ee32bc354087';

try {
        $sdk
        ->mainnet()
        ->api()
        ->account()
        ->freezeAccount($id);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->freezeAccount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->freezeAccount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Account ID |

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `getAccountBalance()`

```php
api()->account()->getAccountBalance(
    ?string $id
): \Tatum\Model\AccountBalance
```

Get account balance

<h4>1 credit per API call.</h4><br/><p>Get balance for the account.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account ID
$id = '5e68c66581f2ee32bc354087';

try {
    /** @var \Tatum\Model\AccountBalance $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->account()
        ->getAccountBalance($id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->getAccountBalance(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->getAccountBalance(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Account ID |

### Return type

[**\Tatum\Model\AccountBalance**](../Model/AccountBalance.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `getAccountByAccountId()`

```php
api()->account()->getAccountByAccountId(
    ?string $id
): \Tatum\Model\Account
```

Get account by ID

<h4>1 credit per API call.</h4><br/><p>Gets active account by ID. Displays all information regarding the given account.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account ID
$id = '5e68c66581f2ee32bc354087';

try {
    /** @var \Tatum\Model\Account $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->account()
        ->getAccountByAccountId($id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->getAccountByAccountId(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->getAccountByAccountId(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Account ID |

### Return type

[**\Tatum\Model\Account**](../Model/Account.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `getAccounts()`

```php
api()->account()->getAccounts(
    ?float $page_size, 
    ?float $page, 
    ?string $sort, 
    ?string $sort_by, 
    ?bool $active, 
    ?bool $only_non_zero_balance, 
    ?bool $frozen, 
    ?string $currency, 
    ?string $account_number
): \Tatum\Model\Account[]
```

List all accounts

<h4>1 credit per API call.</h4><br/><p>Lists all accounts. Inactive accounts are also visible.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Max number of items per page is 50.
$page_size = 20;

// Page number
$page = 0;

// Direction of sorting. Can be asc or desc
$sort = 'asc';

// Sort by
$sort_by = '_id';

// Filter only active or non active accounts
$active = 'true';

// Filter only accounts with non zero balances
$only_non_zero_balance = 'true';

// Filter only frozen or non frozen accounts
$frozen = 'true';

// Filter by currency
$currency = 'BTC';

// Filter by account number
$account_number = 'AC_1011_B';

try {
    /** @var \Tatum\Model\Account[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->account()
        ->getAccounts($page_size, $page, $sort, $sort_by, $active, $only_non_zero_balance, $frozen, $currency, $account_number);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->getAccounts(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->getAccounts(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**| Max number of items per page is 50. | [optional]
 **$page** | **float**| Page number | [optional]
 **$sort** | **string**| Direction of sorting. Can be asc or desc | [optional]
 **$sort_by** | **string**| Sort by | [optional]
 **$active** | **bool**| Filter only active or non active accounts | [optional]
 **$only_non_zero_balance** | **bool**| Filter only accounts with non zero balances | [optional]
 **$frozen** | **bool**| Filter only frozen or non frozen accounts | [optional]
 **$currency** | **string**| Filter by currency | [optional]
 **$account_number** | **string**| Filter by account number | [optional]

### Return type

[**\Tatum\Model\Account[]**](../Model/Account.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `getAccountsByCustomerId()`

```php
api()->account()->getAccountsByCustomerId(
    ?float $page_size, 
    ?string $id, 
    ?float $offset, 
    ?string $account_code
): \Tatum\Model\Account[]
```

List all customer accounts

<h4>1 credit per API call.</h4><br/><p>Lists all accounts associated with a customer. Only active accounts are visible.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Max number of items per page is 50.
$page_size = 10;

// Internal customer ID
$id = '5e68c66581f2ee32bc354087';

// Offset to obtain the next page of data.
$offset = 0;

// For bookkeeping to distinct account purpose.
$account_code = 'AC_1011_B';

try {
    /** @var \Tatum\Model\Account[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->account()
        ->getAccountsByCustomerId($page_size, $id, $offset, $account_code);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->getAccountsByCustomerId(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->getAccountsByCustomerId(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**| Max number of items per page is 50. |
 **$id** | **string**| Internal customer ID |
 **$offset** | **float**| Offset to obtain the next page of data. | [optional]
 **$account_code** | **string**| For bookkeeping to distinct account purpose. | [optional]

### Return type

[**\Tatum\Model\Account[]**](../Model/Account.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `getAccountsCount()`

```php
api()->account()->getAccountsCount(
    ?float $page_size, 
    ?float $page, 
    ?string $sort, 
    ?string $sort_by, 
    ?bool $active, 
    ?bool $only_non_zero_balance, 
    ?bool $frozen, 
    ?string $currency, 
    ?string $account_number
): \Tatum\Model\EntitiesCount
```

Count of found entities for get accounts request

<h4>1 credit per API call.</h4><br/><p>Count of accounts that were found from /v3/ledger/account</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Max number of items per page is 50.
$page_size = 20;

// Page number
$page = 0;

// Direction of sorting. Can be asc or desc
$sort = 'sort_example';

// Sort by
$sort_by = '_id';

// Filter only active or non active accounts
$active = 'true';

// Filter only accounts with non zero balances
$only_non_zero_balance = 'true';

// Filter only frozen or non frozen accounts
$frozen = 'true';

// Filter by currency
$currency = 'BTC';

// Filter by account number
$account_number = 'AC_1011_B';

try {
    /** @var \Tatum\Model\EntitiesCount $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->account()
        ->getAccountsCount($page_size, $page, $sort, $sort_by, $active, $only_non_zero_balance, $frozen, $currency, $account_number);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->getAccountsCount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->getAccountsCount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**| Max number of items per page is 50. | [optional]
 **$page** | **float**| Page number | [optional]
 **$sort** | **string**| Direction of sorting. Can be asc or desc | [optional]
 **$sort_by** | **string**| Sort by | [optional]
 **$active** | **bool**| Filter only active or non active accounts | [optional]
 **$only_non_zero_balance** | **bool**| Filter only accounts with non zero balances | [optional]
 **$frozen** | **bool**| Filter only frozen or non frozen accounts | [optional]
 **$currency** | **string**| Filter by currency | [optional]
 **$account_number** | **string**| Filter by account number | [optional]

### Return type

[**\Tatum\Model\EntitiesCount**](../Model/EntitiesCount.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `getBlockAmount()`

```php
api()->account()->getBlockAmount(
    ?string $id, 
    ?float $page_size, 
    ?float $offset
): \Tatum\Model\Blockage[]
```

Get blocked amounts in an account

<h4>1 credit per API call.</h4><br/><p>Gets blocked amounts for an account.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account ID
$id = '5e6be89ee6aa436299950c3f';

// Max number of items per page is 50.
$page_size = 10;

// Offset to obtain the next page of data.
$offset = 0;

try {
    /** @var \Tatum\Model\Blockage[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->account()
        ->getBlockAmount($id, $page_size, $offset);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->getBlockAmount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->getBlockAmount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Account ID |
 **$page_size** | **float**| Max number of items per page is 50. |
 **$offset** | **float**| Offset to obtain the next page of data. | [optional]

### Return type

[**\Tatum\Model\Blockage[]**](../Model/Blockage.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `getBlockAmountById()`

```php
api()->account()->getBlockAmountById(
    ?string $id
): \Tatum\Model\Blockage
```

Get blocked amount by ID

<h4>1 credit per API call.</h4><br/><p>Gets blocked amount by id.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Blocked amount ID
$id = '5e6be89ee6aa436299950c3f';

try {
    /** @var \Tatum\Model\Blockage $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->account()
        ->getBlockAmountById($id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->getBlockAmountById(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->getBlockAmountById(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Blocked amount ID |

### Return type

[**\Tatum\Model\Blockage**](../Model/Blockage.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `unblockAmountWithTransaction()`

```php
api()->account()->unblockAmountWithTransaction(
    ?string $id, 
    ?\Tatum\Model\UnblockAmount $unblock_amount
): \Tatum\Model\TransactionResult
```

Unblock an amount in an account and perform a transaction

<h4>2 credits per API call.</h4><br/> <p>Unblocks a previously blocked amount in an account and invokes a ledger transaction from that account to a different recipient. If the request fails, the amount is not unblocked.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Blockage ID
$id = '5e6be89ee6aa436299950c3f';

$unblock_amount = new \Tatum\Model\UnblockAmount();

try {
    /** @var \Tatum\Model\TransactionResult $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->account()
        ->unblockAmountWithTransaction($id, $unblock_amount);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->unblockAmountWithTransaction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->unblockAmountWithTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Blockage ID |
 **$unblock_amount** | [**\Tatum\Model\UnblockAmount**](../Model/UnblockAmount.md)|  |

### Return type

[**\Tatum\Model\TransactionResult**](../Model/TransactionResult.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `unfreezeAccount()`

```php
api()->account()->unfreezeAccount(
    ?string $id
)
```

Unfreeze account

<h4>2 credits per API call.</h4><br/><p>Unfreezes a previously frozen account. Unfreezing a non-frozen account not affect the account.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account ID
$id = '5e68c66581f2ee32bc354087';

try {
        $sdk
        ->mainnet()
        ->api()
        ->account()
        ->unfreezeAccount($id);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->unfreezeAccount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->unfreezeAccount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Account ID |

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `updateAccountByAccountId()`

```php
api()->account()->updateAccountByAccountId(
    ?string $id, 
    ?\Tatum\Model\UpdateAccount $update_account
)
```

Update account

<h4>2 credits per API call.</h4><br/><p>Update account by ID. Only a small number of fields can be updated.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account ID
$id = '5e68c66581f2ee32bc354087';

$update_account = new \Tatum\Model\UpdateAccount();

try {
        $sdk
        ->mainnet()
        ->api()
        ->account()
        ->updateAccountByAccountId($id, $update_account);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling account()->updateAccountByAccountId(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling account()->updateAccountByAccountId(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Account ID |
 **$update_account** | [**\Tatum\Model\UpdateAccount**](../Model/UpdateAccount.md)|  |

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)
