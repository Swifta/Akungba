<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admissions
 *
 * @author dunicorn
 */
class admissions extends CI_Controller {

    function admissions() {
        parent::__construct();
        $this->data = array();
        $this->data["base"] = $this->config->item("base");
        $this->data["assets"] = $this->config->item("assets");
    }

    function index() {
        
    }

    function utme() {
        $this->data["header"] = $this->load->view("header/head.php", $this->data, true);
        $this->data["nav"] = $this->load->view("templates/nav.php", $this->data, true);
        $this->data["bottom"] = $this->load->view("templates/bottom.php", $this->data, true);
        $this->data["js"] = $this->load->view("templates/js.php", $this->data, true);
        if (isset($_POST) && count($_POST) > 0) {

            $emailaddress = $_POST["emailaddress"];
            $jambregno = $_POST["jambno"];
            $mobile = $_POST["mobile"];

            $fields = array(
                "EmailAddress" => urlencode($emailaddress),
                "IdentificationNo" => urlencode($jambregno),
                "Msisdn" => urlencode($mobile),
                "TxNodeId" => urlencode("1"),
                "PartnerTypeId" => urlencode("1"),
                "TxTypeId" => urlencode("1"),
                "TxStatusId" => urlencode("1"),
                "RoleId" => urlencode("1"),
                "DistributorID" => urlencode("1"),
                "portIn" => urlencode("1"),
                "Status" => urlencode("0"),
                "portIn" => urlencode("0")
            );

            $fields_string = "";

            foreach ($fields as $key => $value) {
                $fields_string .= $key . '=' . $value . '&';
            }
            rtrim($fields_string);

            $url = ("http://127.0.0.1:8081/dss/1.0/clients");


            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept:application/json"));
            curl_setopt($ch, CURLOPT_POST, count($fields));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            $result = curl_exec($ch);

            if (strlen($result) > 0) {
                $json_result = json_decode($result);

                $return = $json_result->Response;
                $status = $return->Return;
                $s = $status->Status;

                if ($s == "1") {
                    $this->load->helper(array("form", "url"));
                    $base = $this->data["base"];
                    redirect($base . "/index.php?ref=admissions&mm=register", "refresh");
                } else {
                    $this->data["messages"] = "An error has occurred while creating your admission account. Please try again later.";
                    $this->load->view("admissions/utme/login.php", $this->data);
                }
            } else {
                $this->data["messages"] = "An error has occurred while creating your admission account. Please try again later.";
                $this->load->view("admissions/utme/login.php", $this->data);
            }
            curl_close($ch);
        } else {
            $this->load->view("admissions/utme/login.php", $this->data);
        }
    }

    function register() {
        $this->data["header"] = $this->load->view("header/head.php", $this->data, true);
        $this->data["nav"] = $this->load->view("templates/nav.php", $this->data, true);
        $this->data["bottom"] = $this->load->view("templates/bottom.php", $this->data, true);
        $this->data["js"] = $this->load->view("templates/js.php", $this->data, true);

        if (count($_POST) > 0) {
            
        } else {
            $this->load->view("admissions/utme/register.php", $this->data);
        }
    }

}
