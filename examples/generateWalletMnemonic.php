<?php
require("../src/Tatum.php");

$Tatum = new Tatum\Tatum();
$mnemonic = 'allow symbol play float page buddy bus impose february sister junk mouse torch improve dad grape industry regular kick student scout off vocal year';
//$mnemonic = 'lift tomato broccoli fade mercy subject fog genuine issue crouch fly usage monkey debris uphold eager common matter syrup wood glance ship imitate inmate';
//$mnemonic = 'pretty erase host arrive depart pioneer else palm thunder away mind job toast mirror chuckle banner balcony color vital someone unfair attract learn blossom';
$xpub = "";
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