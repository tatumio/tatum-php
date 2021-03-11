# tatum-php
Tatum.io Official PHP SDK for dev

To Install This SDK clone to a folder eg: tatum-php

<h1>Installation and Running.</h1>
Linux Ubuntu 16.04 requirements:

```linux
apt-get install php php-gmp php-mbstring php-mcrypt
```

<h4> To Install this Lib</h4>

```bash
 git clone https://github.com/HighBreedTech/tatum-php
 cd tatum-php
 php -r "readfile('https://getcomposer.org/installer');" | php
 php composer.phar install
 ```
 
<h3>Try an example</h3>

<h6>To let Library generate mnemonic</h6>

```php
<?php
require('vendor/autoload.php');

$Tatum = new Tatum\Tatum();
$coin = "BTC";
$wallet = $Tatum->generateWallet($coin); 
echo $wallet;

$walletX = json_decode($wallet);

echo "<hr/>";
echo $Tatum->generatePrivateKey($coin, $walletX->mnemonic, '0');

echo "<hr/>";
echo $Tatum->generateAddressFromXPub($coin, $walletX->xpub, '0');

echo "<hr/>";
```

<h6>To Generate From mnemonic given</h6>

```php
<?php
require('vendor/autoload.php');

$Tatum = new Tatum\Tatum();
$mnemonic = 'book review judge pelican powder talk onion shuffle panda foot scheme rail rather pond logic private month sure harsh leader double zero pave happy';
$xpub = "";
$coin = "BTC";
$wallet = $Tatum->generateWallet($coin, $mnemonic); 
echo $wallet;

$walletX = json_decode($wallet);

echo "<hr/>";
echo $Tatum->generatePrivateKey($coin, $walletX->mnemonic, '0');

echo "<hr/>";
echo $Tatum->generateAddressFromXPub($coin, $walletX->xpub, '0');

echo "<hr/>";
```

<h6>To Sign Ethereum and ERC20 Transaction</h6>

```php
<?php
require('vendor/autoload.php');

$Tatum = new Tatum\Tatum();
$body = array(
    'ETH', //Currency EG: ETH, USDT, USDC etc
    '0x07849dd09c66e90742831afbcafee041a3f0a0c674678b6f0fa31f0e2dc284ca', //Private Key Wif
    '0x309981C7302e9f650880fbc6282E28A87384eE39', // From Address
    '0x83214dd08f7995ad436b1bfda15dffe985485e42', //To Address
    '0.0328', // Amount in ETH
    '1', // Fee in Gwei
    '', //Gas Limit minimum is 21000
    '', //Data
    '' // Nonce
);

To Send Directly Use

echo $Tatum->sendEthereumTransaction($body);

Sign and Get Hex use 

echo $Tatum->prepareSignedEthereumTransaction($body);


echo "<hr/>";
```

Bitcoin, Ethereum and ERC20 Tokens, BitcoinCash and Litecoin only is supported yet.