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
require("../src/Tatum.php");

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
require("../src/Tatum.php");

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
Bitcoin and Litecoin only is supported yet.