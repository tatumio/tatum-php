<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

trait Request{

/** Make A GET Request to Tatum Api Endpoint **/
protected function curlGet($url){

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  
  curl_close($curl);
  
  if ($err) {
      $this->LogException("cURL Error #:" . $err);
  } else {
    return $response;
  }
  }

/** Make A POST Request to Tatum Api Endpoint **/
protected function post($data, $path){
$data = json_encode($data);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->TatumApiUrl.$path,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
            "content-type: application/json",
            "x-api-key: {$this->apiKey}"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            $this->LogException("cURL Error #:" . $err);
        } else {
          return $response;
        }
        }
        
/** Make A GET Request to Tatum Api Endpoint **/
protected function get($path){

            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => $this->TatumApiUrl.$path,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_HTTPHEADER => array(
              "x-api-key: {$this->apiKey}"
              ),
            ));
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
                $this->LogException("cURL Error #:" . $err);
            } else {
              return $response;
            }
            }

        /** Make A PUT Request to Tatum Api Endpoint **/
        protected function put($path){

            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => $this->TatumApiUrl.$path,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "PUT",
              CURLOPT_HTTPHEADER => array(
              "x-api-key: {$this->apiKey}"
              ),
            ));
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
                $this->LogException("cURL Error #:" . $err);
            } else {
              return $response;
            }
            }

           /** Make A PUT Request to Tatum Api Endpoint **/
        protected function putData($data, $path){
          $data = json_encode($data);
          $curl = curl_init();
          curl_setopt_array($curl, array(
            CURLOPT_URL => $this->TatumApiUrl.$path,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
            "x-api-key: {$this->apiKey}"
            ),
          ));
          
          $response = curl_exec($curl);
          $err = curl_error($curl);
          
          curl_close($curl);
          
          if ($err) {
              $this->LogException("cURL Error #:" . $err);
          } else {
            return $response;
          }
          }

        /** Make A GET Request to Tatum Api Endpoint **/
        protected function delete($path){

            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => $this->TatumApiUrl.$path,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "DELETE",
              CURLOPT_HTTPHEADER => array(
              "x-api-key: {$this->apiKey}"
              ),
            ));
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
                $this->LogException("cURL Error #:" . $err);
            } else {
              return $response;
            }
            }
        
         /** Class For Login Exception  */
        private function LogException($err){
        if($this->doLogException){
        $logFile = "../TatumException/exception.log";
        $logDir = "../TatumException";
        if(file_exists($logFile)){
            $file = "in ".pathinfo(__FILE__, PATHINFO_FILENAME);
            file_put_contents($logFile, "[".date("d-M-Y h:i:s A")." ".date_default_timezone_get()."] ".$err." $file\r\n", FILE_APPEND | LOCK_EX);
        }
        else{
        if(!is_dir($logDir)){
            mkdir($logDir, 0777, true);
            chmod($logDir, 0777);
        }
        else{
        if(!file_exists($logFile)){
        fopen($logFile, "w");
        chmod($logFile, 0644);
        }
        }
        }
        }
        else{
            return false;
        }
        }
}