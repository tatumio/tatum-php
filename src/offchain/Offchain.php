<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}
require("Bcash.php");
require("Bitcoin.php");
require("Ethereum.php");
require("Litecoin.php");
require("Common.php");
require("KMS.php");