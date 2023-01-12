# MintNftExpressAlgorandAttr

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAssetUnit()** | **string** | The unit name of the NFT | [optional]
**getClawback()** | **string** | The address of the clawback account that can claw back holdings of the NFT | [optional]
**getManager()** | **string** | The address of the manager account that can manage the configuration of the NFT or burn it; specify this parameter if you want to be able to <a href="#operation/NftBurnErc721">burn the minted NFT</a> any time later | [optional]
**getReserve()** | **string** | The address of the reserve account that holds the reserve (non-minted) units of the NFT | [optional]
**getFreeze()** | **string** | The address of the freeze account that is used to freeze holdings of the NFT | [optional]
**getTotal()** | **float** | (For minting the NFT as a <a href="https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts" target="_blank">fractional NFT</a>) The number of fractions that the minted NFT should be divided into<br/>The number must be a power of 10 and greater that 1, for example, 10, 100, 1000...<br/>If not set, the parameter defaults to 1, which means that one regular (not fractional) NFT will be minted. | [optional] [default to 1]
**getDecimals()** | **float** | (For minting the NFT as a <a href="https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts" target="_blank">fractional NFT</a>) The number of decimal places in a fraction of the minted NFT<br/>The number must be greater that 0 and equal to the logarithm in base 10 of the number of the fractions (see the <code>total</code> parameter); for example, if <code>total</code> is set to 10, <code>decimals</code> must be set to 1.<br/>If not set, the parameter defaults to 0, which means that one regular (not fractional) NFT will be minted. | [optional] [default to 0]

[[Back to Index]](../index.md)
