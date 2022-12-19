# DeployErc20

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Symbol of the ERC20 token |
**name** | **string** | Name of the ERC20 token |
**total_cap** | **string** | Max supply of ERC20 token. | [optional]
**supply** | **string** | Max supply of ERC20 token. |
**digits** | **float** | Number of decimal points |
**address** | **string** | Address on XDC blockchain, where all created ERC20 tokens will be transferred. |
**from_private_key** | **string** | Private key of XDC account address, from which the fee for the deployment of ERC20 will be paid. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to XDC transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
