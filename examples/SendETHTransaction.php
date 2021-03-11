<?php
require("../src/Tatum.php");
$Tatum = new Tatum\Tatum();

$body = array(
    'ETH',
    '0x07849dd09c66e90742831afbcafee041a3f0a0c674678b6f0fa31f0e2dc284ca',
    '0x309981C7302e9f650880fbc6282E28A87384eE39',
    '0x83214dd08f7995ad436b1bfda15dffe985485e42',
    '0.03280',
    '1',
    '',
    '',
    ''
);

echo $Tatum->sendEthereumTransaction($body);

echo "<hr/>";

echo "<textarea>".$Tatum->prepareSignedEthereumTransaction($body)."</textarea>";
//echo $Tatum->sendEthereumTransaction($body);