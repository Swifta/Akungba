<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HttpRequest
 *
 * @author dunicorn
 */
class HttpRequest extends CI_Model {

    function HttpRequest() {
        parent::__construct();
    }

    function loadUrl($url, $method) {
        if ($method == "POST") {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept:application/json"));
            curl_setopt($ch, CURLOPT_POST, count($fields));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            $result = curl_exec($ch);
            
            curl_close($ch);
            
            return $result;
        } else {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept:application/json"));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); # timeout after 10 seconds, you can increase it
            curl_setopt($ch, CURLOPT_URL, $url); #set the url and get string together

            $response = curl_exec($ch);
            
            curl_close($ch);
            
            return $response;
        }
        
    }

}
