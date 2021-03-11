<?php
require("../src/Tatum.php");

$Tatum = new Tatum\Tatum();

$body = array(
array(
array('privateKey' => 'cTepWniFexVXexBYZiNbrNAY5tPEHfgA1bgBxuUALf4rDR2C7PmT',
'txHash' => '51c700f6ab26d65a77252f6978a0b20a9afa7948039a3f075507e0878b2de8ba', 'index' => 2),
array('privateKey' => 'cRpcmSsC61awf7ZRQxy3RLcRwWqrkdJpueQpU3HxYayQJNpQPTgG',
'txHash' => '51c700f6ab26d65a77252f6978a0b20a9afa7948039a3f075507e0878b2de8ba', 'index' => 3),
array('privateKey' => 'cVtQWpKopxXbWgbNCJjvcByuYJ2y1JLpkqBa7uR4ubbZVUxS84hU',
'txHash' => '51c700f6ab26d65a77252f6978a0b20a9afa7948039a3f075507e0878b2de8ba', 'index' => 1),
),
//Send From Address Start Here
'',

array(
'fee' => 0.000200,
'addresses' => array(
array('address' => 'mxNdvFA436U9nUTZUtTbmfezuvdFaibi3w', 'value' => 0.0001521),
)
)
);

echo "<textarea>".$Tatum->prepareSignedBitcoinTransaction($body)."</textarea>";
//echo $Tatum->sendBitcoinTransaction($body);