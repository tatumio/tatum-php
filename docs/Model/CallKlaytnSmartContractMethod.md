# CallKlaytnSmartContractMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract_address** | **string** | The address of the smart contract |
**amount** | **string** | Amount of the assets to be sent. | [optional]
**method_name** | **string** | Name of the method to invoke on smart contract. |
**method_abi** | **object** | ABI of the method to invoke. |
**params** | **string[]** |  |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Klaytn transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\TransferKlay20BlockchainFee**](TransferKlay20BlockchainFee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
