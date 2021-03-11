<?php
require("../src/Tatum.php");

$Tatum = new Tatum\Tatum();
$coin = "ETH";
$wallet = $Tatum->generateWallet($coin); 
echo $wallet;

$walletX = json_decode($wallet);

echo "<hr />";
$priv = $Tatum->generatePrivateKey($coin, $walletX->mnemonic, '0');
echo $priv;

echo "<hr/>";
echo $Tatum->generateAddressFromXPub($coin, $walletX->xpub, '0');

echo "<hr/>";

echo $Tatum->generateAddressFromPrivatekey($coin, json_decode($priv)->key);