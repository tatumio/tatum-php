<?php
require("../src/Tatum.php");

$Tatum = new Tatum\Tatum();

$body = array(
'', 
array(
'privateKeys' => array(
    'cNeCsvY5P9EZ1hu5t4GLY5nzoUwRVhS5sP4sXuXrcjC4GtNLUqAh', 
    'cRzW4wdGGzLVACPizDWXXvNPbm9gA9oPBFdGVkiFJsQM7zGEWkmF',
), 
'addresses' => array(
    'bchtest:qzy06aq7cfqzcpcfp537nuz2h5d59e5mdunx44jfec',
    'bchtest:qzzaqqyf7talc3j9s5c7vkacw8p4tnw3jyfm378pr4',
),
),

array(
'fee' => 0.000200,
'addresses' => array(
array('address' => 'bchtest:qpmqf8ewkam0muwqz3evu42pg6sph74mmyzzchx4j3', 'value' => 0.0001521),
/*array('address' => 'mwfzsJbzygUEvTUzLzkhhuBfb6jCsg1svp', 'value' => 0.000151),
array('address' => 'mgkus3xGmyCdmNKVbJbY5JmD668WRd8Am5', 'value' => 0.0001421),*/
)
)
);

echo "<textarea>".$Tatum->prepareSignedBcashTransaction($body)."</textarea>";
//echo $Tatum->sendBcashTransaction($body);