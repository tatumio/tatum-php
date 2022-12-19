# FlowAccountKeysInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **float** | Index of the public key. | [optional]
**public_key** | **string** |  | [optional]
**sign_algo** | **float** | Type of signature algorithm. 2 - ECDSA_secp256k1 | [optional]
**hash_algo** | **float** | Type of hash algo. 3 - SHA3_256 | [optional]
**sequence_number** | **float** | Number of outgoing transactions for this public key. | [optional]
**revoked** | **bool** |  | [optional]
**weight** | **float** | Weight of the key. 1000 means single signature necessary. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
