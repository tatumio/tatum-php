# ActivateGasPumpCeloKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**owner** | **string** | The blockchain address that owns the precalculated gas pump addresses and is used to pay gas fees for operations made on the gas pump addresses; can be referred to as "master address" |
**from** | **int** | The start index of the range of gas pump addresses to activate |
**to** | **int** | The end index of the range of gas pump addresses to activate; must be greater than or equal to the value in the <code>from</code> parameter |
**fee_currency** | **string** | The currency to pay for the gas fee; if not set, defaults to CELO | [optional]
**signature_id** | **string** | The KMS identifier of the private key of the blockchain address that will pay the gas fee for the activation transaction |
**index** | **float** | (Only if the signature ID is mnemonic-based) The index of the specific address from the mnemonic | [optional]

[[Back to Index]](../index.md)
