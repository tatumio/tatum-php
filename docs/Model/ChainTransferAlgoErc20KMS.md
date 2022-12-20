# ChainTransferAlgoErc20KMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**from** | **string** | The blockchain address to send the fungible tokens from |
**to** | **string** | The blockchain address to send the fungible tokens to |
**contract_address** | **string** | The asset ID (the ID of the fungible tokens) |
**amount** | **string** | The amount of the fungible tokens to be sent |
**digits** | **float** | The number of decimal places that the fungible tokens have |
**signature_id** | **string** | The KMS identifier of the private key of the blockchain address that you are sending the fungible tokens from (the address that you specified in the &lt;code&gt;from&lt;/code&gt; parameter); the transaction fee will be deducted from this address |

[[Back to Index]](../index.md)
