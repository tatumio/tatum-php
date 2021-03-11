<?php
require("../src/Tatum.php");

$Tatum = new Tatum\Tatum();
$mnemo = "allow symbol play float page buddy bus impose february sister junk mouse torch improve dad grape industry regular kick student scout off vocal year";
$mnemo = "allow symbol play float page buddy bus impose february sister junk mouse torch improve dad grape industry regular kick student scout off vocal year";
$priv = json_decode($Tatum->generatePrivateKey("BTC", $mnemo, '10'));
$priv2 = json_decode($Tatum->generatePrivateKey("BTC", $mnemo, '11'));
$priv3 = json_decode($Tatum->generatePrivateKey("BTC", $mnemo, '12'));

$body = array(
'', 
array(
'privateKeys' => array(
    'cNprM2LCP8zcYsPBSXbyP8ybf25mycBq1Tuxbm7Ef3YpCKncdnqc', 
    'cUUzSdfSzbSmHu2fbSAfVcdvYmrqHn7nPDrg9AvFBSdj3puiUULd',
), 
'addresses' => array(
    'n116YMw6TSUWLMQwRe1bKUvnspVu53FnCv',
    'mmQZsRQMMaPEBSNWskPas1XsQKSaje9Wrs',
),
),

array(
'fee' => 0.00000650,
'addresses' => array(
array('address' => 'mqiD9peRUMxyDT1yZHsX7CQBVXQNSBEq8t', 'value' => 0.0000152),
array('address' => 'QZ25e25uGBhtWVmjttQRyY46ZmRqYNw8zb', 'value' => 0.0000151),
array('address' => 'QbBDbwmefNQxmD1whFv9XfsphcMm64gEog', 'value' => 0.0000150),
)
)
);

echo "<textarea>".$Tatum->prepareSignedLitecoinTransaction($body)."</textarea>";
//echo $Tatum->sendLitecoinTransaction($body);