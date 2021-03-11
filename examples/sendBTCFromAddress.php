<?php
require("../src/Tatum.php");

$Tatum = new Tatum\Tatum();

$body = array(
'', 
array(
'privateKeys' => array(
    'cRpcmSsC61awf7ZRQxy3RLcRwWqrkdJpueQpU3HxYayQJNpQPTgG', 
    'cTepWniFexVXexBYZiNbrNAY5tPEHfgA1bgBxuUALf4rDR2C7PmT',
    'cQUfSemaDNnmsbgg33G4iTeB7vKuPeb1kBZnM4wrfGdTbgmWb4VH',
), 
'addresses' => array(
    'mzsWneM8GHaG5eRV8jGA7D3fjhxsiJ8yPZ',
    'mgkus3xGmyCdmNKVbJbY5JmD668WRd8Am5',
    'mpzN8DbXRKc49Tf7yhUCv1KsY9EELQPxYN',
),
),

array(
'fee' => 0.000200,
'addresses' => array(
array('address' => 'mxNdvFA436U9nUTZUtTbmfezuvdFaibi3w', 'value' => 0.0001521),
array('address' => 'mwfzsJbzygUEvTUzLzkhhuBfb6jCsg1svp', 'value' => 0.000151),
array('address' => 'mgkus3xGmyCdmNKVbJbY5JmD668WRd8Am5', 'value' => 0.0001421),
)
)
);

echo "<textarea>".$Tatum->prepareSignedBitcoinTransaction($body)."</textarea>";
//echo $Tatum->sendBitcoinTransaction($body);