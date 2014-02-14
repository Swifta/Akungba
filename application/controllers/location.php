<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of location
 *
 * @author dunicorn
 */
class location extends CI_Controller {

    function location() {
        parent::__construct();
    }

    function loadLocalGovt() {
        $stateid = $_GET["stateid"];

        $url = "http://192.168.1.3:9765/services/schoolDBasService/countrystateslga/$stateid";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept:application/json"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); # timeout after 10 seconds, you can increase it
        curl_setopt($ch, CURLOPT_URL, $url); #set the url and get string together

        $response = curl_exec($ch);

        $result = json_decode($response);

        $lgas = "";
        foreach ($result->Country->States as $key => $values) {
            foreach($values as $lga_id => $lga_names){
                $lgas .= "<option value = '$lga_names->locationId'>$lga_names->Name</option>";
            }
        }
        echo $lgas;
    }

}
