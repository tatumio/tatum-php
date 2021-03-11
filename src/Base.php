<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

trait Base{
    
    static function in_arrayi($needle, $haystack) {
        return in_array(strtolower($needle), array_map('strtolower', $haystack));
    }

     //Get Base Address
     function baseHash(){
        global $config;
        $timeHash = uniqid(rand()).time().microtime().uniqid(rand()).md5(time()).base64_encode(microtime()).md5(uniqid(rand())).rand(500900,900977).uniqid(rand());
             $code = $timeHash;
             $code = md5($code).uniqid(rand());
             $code = sha1($code);
             $code = base64_encode($code).uniqid(rand());
             $code = md5($code.uniqid(rand()));
             $code = sha1($code);
             $code = hash('sha256',$code);
             return substr(rtrim(base64_encode($code),"="), 0, 250);
        }

        //Get Hash String
        function shaHash(){
        $timeHash = uniqid(rand()).time().microtime().uniqid(rand()).md5(time()).uniqid(rand()).base64_encode(uniqid(rand()).microtime()).rand(500900,900977).uniqid(rand()).md5(uniqid(rand()));
             $code = $timeHash;
             $code = md5($code).uniqid(rand());
             $code = sha1($code);
             $code = base64_encode($code).uniqid(rand());
             $code = md5($code);
             $code = sha1($code);
             $code = hash('sha256',$code);
             return substr(rtrim(hash('sha256',$code),"="), 0, 250);
        }

    function getHash(){
     return substr($this->shaHash().$this->baseHash(), 0, 500);
    }

    function shortHash(){
        $timeHash = time().microtime().md5(time()).base64_encode(microtime()).rand(500900,900977).uniqid(rand());
             $code = $timeHash;
             $code = md5($code);
             $code = sha1($code);
             $code = base64_encode($code);
             $code = md5($code);
             $code = sha1($code);
             $code = hash('sha256',$code);
             return substr(rtrim(base64_encode($code),"="),0,25);
        }
        function mdHash(){
        $timeHash = time().microtime().md5(time()).base64_encode(microtime()).rand(500900,900977).uniqid(rand());
             $code = $timeHash;
             $code = md5($code);
             $code = sha1($code);
             $code = base64_encode($code);
             $code = md5($code);
             $code = sha1($code);
             $code = hash('sha256',$code);
             return md5($code);
        }
        function shortNum(){
         $nos = rand(10, 99).rand(100, 999).rand(1, 9).(time() + microtime() + rand(1000,9000) + rand(1000,9000) + rand(1000,9000) + time());
         $nos = filter_var($nos,FILTER_SANITIZE_NUMBER_INT);
         return substr($nos,2,12);
        }
        
        function shortNumX(){
         $nos = rand(10, 99).rand(100, 999).rand(1, 9).(time() + microtime() + rand(1000,9000) + rand(1000,9000) + rand(1000,9000) + time());
         $nos = filter_var($nos,FILTER_SANITIZE_NUMBER_INT);
         return substr($nos,2,8);
        }

}