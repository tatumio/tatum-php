<?php
require("../src/Tatum.php");

$Tatum = new Tatum\Tatum();
$mnemonic = 'allow symbol play float page buddy bus impose february sister junk mouse torch improve dad grape industry regular kick student scout off vocal year';
$coin = "BCH";
$wallet = $Tatum->generateWallet($coin, $mnemonic); 
echo $wallet;

$walletX = json_decode($wallet);

echo "<hr />";
$priv = $Tatum->generatePrivateKey($coin, $walletX->mnemonic, '0');

echo $priv;

echo "<hr/>";
echo $Tatum->generateAddressFromXPub($coin, $walletX->xpub, '0');

echo "<hr/>";

echo $Tatum->generateAddressFromPrivatekey($coin, json_decode($priv)->key);