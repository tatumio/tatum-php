<?php
require("../src/Tatum.php");

$Tatum = new Tatum\Tatum();
$coin = "BTC";
$wallet = $Tatum->generateWallet($coin); 
echo $wallet;

$walletX = json_decode($wallet);

echo "<hr />";
echo $Tatum->generatePrivateKey($coin, $walletX->mnemonic, '0');

echo "<hr/>";
echo $Tatum->generateAddressFromXPub($coin, $walletX->xpub, '0');

echo "<hr/>";