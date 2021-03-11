<?php
require("../src/Tatum.php");

$Tatum = new Tatum\Tatum();

$body = array(
array(
array('privateKey' => 'cNprM2LCP8zcYsPBSXbyP8ybf25mycBq1Tuxbm7Ef3YpCKncdnqc',
'txHash' => '51c700f6ab26d65a77252f6978a0b20a9afa7948039a3f075507e0878b2de8ba', 'index' => 2),
array('privateKey' => 'cUUzSdfSzbSmHu2fbSAfVcdvYmrqHn7nPDrg9AvFBSdj3puiUULd',
'txHash' => '51c700f6ab26d65a77252f6978a0b20a9afa7948039a3f075507e0878b2de8ba', 'index' => 3),
array('privateKey' => 'cUUzSdfSzbSmHu2fbSAfVcdvYmrqHn7nPDrg9AvFBSdj3puiUULd',
'txHash' => '51c700f6ab26d65a77252f6978a0b20a9afa7948039a3f075507e0878b2de8ba', 'index' => 1),
),
//Send From Address Start Here
'',

array(
'fee' => 0.000200,
'addresses' => array(
array('address' => 'mmQZsRQMMaPEBSNWskPas1XsQKSaje9Wrs', 'value' => 0.0001521),
)
)
);


echo "<textarea>".$Tatum->prepareSignedLitecoinTransaction($body)."</textarea>";
//echo $Tatum->sendLitecoinTransaction($body);