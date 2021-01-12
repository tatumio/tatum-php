<?php
require("src/Tatum.php");

$Tatum = new Tatum\Tatum();

echo $Tatum->GetApiVersion();
echo "<hr/>";
echo $Tatum->GetRates("BTC", "USD");
echo "<hr/>";
echo $Tatum->GetUsage();