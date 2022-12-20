# AlgoDeployErc20Ledger200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Account ID with the type of currency as created ERC20 token symbol. Account will be unfrozen when ERC20 contract address will be set. |
**tx_id** | **string** | TX hash of successful transaction. From this transaction receipt contract address can be obtained. |
**signature_id** | **string** | ID of prepared payment template to sign. This is should be stored on a client side to retrieve ID of the blockchain transaction, when signing application signs the transaction and broadcasts it to the blockchain. |

[[Back to Index]](../index.md)
