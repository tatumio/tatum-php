# PolygonBlockchainSmartContractInvocationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract_address** | **string** | The address of the smart contract |
**method_name** | **string** | Name of the method to invoke on smart contract. |
**method_abi** | **object** | ABI of the method to invoke. |
**params** | **string[]** | Parameters of the method to be invoked. |
**amount** | **string** | Amount of the assets to be sent. | [optional]
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Polygon transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**caller** | **string** | The address of the account, which will be sender and fee payer of this transaction |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

[[Back to API list]](../../README.md#api-endpoints)
