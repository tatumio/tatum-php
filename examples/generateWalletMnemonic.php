<?php
require("../src/Tatum.php");

$Tatum = new Tatum\Tatum();
$mnemonic = 'book review judge pelican powder talk onion shuffle panda foot scheme rail rather pond logic private month sure harsh leader double zero pave happy';
$xpub = "";
$coin = "BTC";
$wallet = $Tatum->generateWallet($coin, $mnemonic); 
echo $wallet;

$walletX = json_decode($wallet);

echo "<hr />";
echo $Tatum->generatePrivateKey($coin, $walletX->mnemonic, '0');

echo "<hr/>";
echo $Tatum->generateAddressFromXPub($coin, $walletX->xpub, '0');

echo "<hr/>";