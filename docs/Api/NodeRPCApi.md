---
title: Node RPC
parent: API
layout: page
---

# Api/NodeRPCApi

[Node RPC API Reference](https://apidoc.tatum.io/tag/Node-RPC/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->nodeRPC();

// TestNet API Call
$sdk->testnet()->api()->nodeRPC();
```

## Methods

Method | Description
------------- | -------------
[**nodeJsonPostRpcDriver()**](#nodejsonpostrpcdriver) | Connect to the blockchain node through an RPC driver
[**nodeJsonRpcGetDriver()**](#nodejsonrpcgetdriver) | Connect to the blockchain node through an RPC driver
[**nodeJsonRpcPutDriver()**](#nodejsonrpcputdriver) | Connect to the blockchain node through an RPC driver


## `nodeJsonPostRpcDriver()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **nodeJsonPostRpcDriver.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NodeRPCApi/nodeJsonPostRpcDriver.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nodeRPC()->nodeJsonPostRpcDriver(
    string $chain,
    object $body,
    [ string $x_api_key, ]
    [ string $node_type, ]
    [ string $testnet_type = 'ethereum-sepolia', ]
    [ string $chain_type = 'avax-c', ]
    [ string $rpc_path ]
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to communicate with. |
 **$body** | **object**  |  |
 **$x_api_key** | **string**  | Tatum X-API-Key used for authorization. You can omit this path parameter and either use the X-Api-Key header, or the API key tied to your IP address without any header. | [optional]
 **$node_type** | **string**  | Type of the node to access for Algorand. | [optional]
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]
 **$chain_type** | **string**  | Type of Avalanche network. Defaults to Avalanche C-Chain. | [optional] [default to &#39;avax-c&#39;]
 **$rpc_path** | **string**  | Optional path of rpc call for non EVM nodes, e.g. Algorand or Stellar. | [optional]

### Return type

**object**

### Description

> Connect to the blockchain node through an RPC driver

**The number of credits consumed depends on the number of methods submitted in an API call: \* 50 credits per debug\*\_/trace\* method (for EVM-based blockchains) \* 50 credits per EOS [Trace API](https://developers.eos.io/manuals/eos/v2.0/nodeos/plugins/trace%5Fapi%5Fplugin/api-reference/index) methods \* 5 credits per eth\_call method (for EVM-based blockchains) \* 2 credits per any other RPC method**

Connect directly to the blockchain node provided by Tatum.

The `POST` method is used. The API endpoint URL acts as an HTTP-based RPC driver.

In the request body, provide valid Web3 RPC method content, for example:

` { "jsonrpc": "2.0", "id": 1, "method": "method_name", "params": [] } ` 

For the blockchains using the JSON-RPC 2.0 specification, you can submit multiple RPC methods in one API call:

` [ { "jsonrpc": "2.0", "id": 1, "method": "method_1_name", "params": [] }, { "jsonrpc": "2.0", "id": 2, "method": "method_2_name", "params": [] }, ... ] ` 

This API is supported for the following blockchains:

* [Algorand](https://developer.algorand.org/docs/rest-apis/restendpoints/)
* [Arbitrum](https://ethereum.org/en/developers/docs/apis/json-rpc/)
* [Aurora](https://doc.aurora.dev/evm/rpc/)
* [Avalanche C-Chain](https://docs.avax.network/apis/avalanchego/apis/c-chain)
* [Avalanche P-Chain](https://docs.avax.network/apis/avalanchego/apis/p-chain)
* [Avalanche X-Chain](https://docs.avax.network/apis/avalanchego/apis/x-chain)
* [Bitcoin](https://developer.bitcoin.org/reference/rpc/index.html)
* [Bitcoin Cash](https://docs.bitcoincashnode.org/doc/json-rpc/)
* [BNB Beacon Chain](https://docs.bnbchain.org/docs/beaconchain/develop/api-reference/node-rpc#5-rpc-endpoint-list)
* [BNB Smart Chain](https://docs.bnbchain.org/docs/rpc)
* [Cardano](https://docs.cardano.org/cardano-components/cardano-rosetta)
* [Celo](https://explorer.celo.org/api-docs)
* [Cronos](https://cronos.org/docs/resources/chain-integration.html)
* [Dogecoin](https://dogecoin.com/)
* [Elrond](https://docs.elrond.com/sdk-and-tools/rest-api/nodes/)
* [EOSIO](https://developers.eos.io/welcome/latest/reference/nodeos-rpc-api-reference)
* [Ethereum](https://ethereum.org/en/developers/docs/apis/json-rpc/)
* [Fantom](https://docs.fantom.foundation/api/public-api-endpoints)
* [Flow](https://developers.flow.com/http-api)
* [Gnosis](https://developers.gnosischain.com/for-developers/developer-resources)
* [Harmony](https://docs.harmony.one/home/developers/api)
* [Klaytn](https://docs.klaytn.foundation/dapp/json-rpc)
* [KuCoin Community Chain](https://docs.kcc.io/)
* [Kusama](https://guide.kusama.network/docs/build-node-interaction/)
* [Lisk](https://lisk.com/documentation/lisk-service/references/api.html)
* [Litecoin](https://litecoin.org/)
* [NEAR](https://docs.near.org/api/rpc/introduction)
* [Neo](https://docs.neo.org/docs/en-us/reference/rpc/latest-version/api.html)
* [Oasis Network](https://docs.oasis.dev/oasis-core/oasis-node/rpc/)
* [Optimism](https://community.optimism.io/docs/developers/build/json-rpc/)
* [Palm](https://docs.palm.io/Get-Started/Connect/Overview/)
* [Polkadot](https://wiki.polkadot.network/docs/build-node-interaction)
* [Polygon](https://polygon.technology/developers)
* [RSK](https://developers.rsk.co/rsk/node/architecture/json-rpc/)
* [Solana](https://docs.solana.com/developing/clients/jsonrpc-api)
* [Stellar](https://developers.stellar.org/api)
* [Tezos](https://opentezos.com/tezos-basics/cli-and-rpc/)
* [TRON](https://developers.tron.network/reference/full-node-api-overview)
* [VeChain](https://www.vechain.org/)
* [XinFin](https://apidocs.xinfin.network/docs/)
* [XRP](https://xrpl.org/public-api-methods.html)
* [ZCash](https://zcash-rpc.github.io/)
* [Zilliqa](https://dev.zilliqa.com/docs/apis/api-introduction)

[Back to top](#top){: .btn .btn-purple }

---


## `nodeJsonRpcGetDriver()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **nodeJsonRpcGetDriver.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NodeRPCApi/nodeJsonRpcGetDriver.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nodeRPC()->nodeJsonRpcGetDriver(
    string $chain,
    [ string $x_api_key, ]
    [ string $node_type, ]
    [ string $rpc_path ]
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to communicate with. |
 **$x_api_key** | **string**  | Tatum X-API-Key used for authorization. You can omit this path parameter and either use the X-Api-Key header, or the API key tied to your IP address without any header. | [optional]
 **$node_type** | **string**  | Type of the node to access for Algorand. | [optional]
 **$rpc_path** | **string**  | Optional path of rpc call for non EVM nodes, e.g. Algorand or Stellar. | [optional]

### Return type

**object**

### Description

> Connect to the blockchain node through an RPC driver

**2 credits per RPC method in an API call**

Connect directly to the blockchain node provided by Tatum.

The `GET` method is used. The API endpoint URL acts as an HTTP-based RPC driver.

This API is supported for the following blockchains:

* [Algorand](https://developer.algorand.org/docs/rest-apis/restendpoints/)
* [BNB Beacon Chain](https://docs.bnbchain.org/docs/beaconchain/develop/api-reference/node-rpc#5-rpc-endpoint-list)
* [Elrond](https://docs.elrond.com/sdk-and-tools/rest-api/nodes/)
* [Flow](https://developers.flow.com/http-api)
* [Lisk](https://lisk.com/documentation/lisk-service/references/api.html)
* [Stellar](https://developers.stellar.org/api)
* [Tezos](https://opentezos.com/tezos-basics/cli-and-rpc/)
* [TRON](https://developers.tron.network/reference/full-node-api-overview)

[Back to top](#top){: .btn .btn-purple }

---


## `nodeJsonRpcPutDriver()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **nodeJsonRpcPutDriver.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NodeRPCApi/nodeJsonRpcPutDriver.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nodeRPC()->nodeJsonRpcPutDriver(
    string $chain,
    object $body,
    [ string $x_api_key, ]
    [ string $node_type, ]
    [ string $rpc_path ]
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to communicate with. |
 **$body** | **object**  |  |
 **$x_api_key** | **string**  | Tatum X-API-Key used for authorization. You can omit this path parameter and either use the X-Api-Key header, or the API key tied to your IP address without any header. | [optional]
 **$node_type** | **string**  | Type of the node to access for Algorand. | [optional]
 **$rpc_path** | **string**  | Optional path of rpc call for non EVM nodes, e.g. Algorand or Stellar. | [optional]

### Return type

**object**

### Description

> Connect to the blockchain node through an RPC driver

**2 credits per RPC method in an API call**

Connect directly to the blockchain node provided by Tatum.

The `PUT` method is used. The API endpoint URL acts as an HTTP-based RPC driver.

In the request body, provide valid Web3 RPC method content, for example:

` { "jsonrpc": "2.0", "id": 1, "method": "method_name", "params": [] } ` 

For the blockchains using the JSON-RPC 2.0 specification, you can submit multiple RPC methods in one API call:

` [ { "jsonrpc": "2.0", "id": 1, "method": "method_1_name", "params": [] }, { "jsonrpc": "2.0", "id": 2, "method": "method_2_name", "params": [] }, ... ] ` 

This API is supported for the following blockchains:

* [Algorand](https://developer.algorand.org/docs/rest-apis/restendpoints/)
* [BNB Beacon Chain](https://docs.bnbchain.org/docs/beaconchain/develop/api-reference/node-rpc#5-rpc-endpoint-list)
* [Elrond](https://docs.elrond.com/sdk-and-tools/rest-api/nodes/)
* [Stellar](https://developers.stellar.org/api)

[Back to top](#top){: .btn .btn-purple }

---
