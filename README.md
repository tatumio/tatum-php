# tatum-php
Tatum.io Official PHP SDK for dev

To Install This SDK clone to a folder eg: tatum-php

<h1>Installation and Running.</h1>
Linux Ubuntu 16.04 requirements:

```linux
apt-get install php php-gmp php-mbstring php-mcrypt
```

MacoS GMP installation:

find your right php version with below code to install gmp

```bash
php -v
```

<i> Replace 7.4 with your real php version </i>

```bash
brew reinstall php@7.4
export PATH="/usr/local/opt/php@7.4/bin:$PATH"
brew services restart php@7.4
php -info | grep "GMP"

```

it should return result like 

```bash
GMP version => 6.2.1
```

then you are good to go.

<h4> To Install this Lib</h4>
<h4> Create a file called <b>composer.json</b> and insert below code into it</h4>

```json
 {
     "require": {
         "tatumio/tatum-php": "dev-master"
      },
     "minimum-stability": "dev"
}
 ```

 <h6>save it and go to your project folder and run:</h6>

```bash
composer install
 ```

 and to update the Lib if you already have it installed use 


 ```bash
composer update
 ```
 
 <i>After done installing the Lib it will generate a vendor folder inside your project, then inside the vendor folder locate tatomio/tatum-php/src when you get into this folder you will see example.env create .env file inside your root folder and copy the example.env content from example.env to the .env created on your root folder and fill this details with your tatum api key and your network type then you are good to go.
 </i>

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
    '1', // Fee in Gwei if empty the Lib will get best fee
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