<?php require_once("../../../includes/initialize.php"); ?>


<?php

    if(isset($_POST['submit'])) {
        //'id', 'patient_id', 'doctor_id', 'apoint_date', 'apoint_type', 'status', 'notes', 'labcomments', 'imgcomments'
        $pay = new appointment();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $pay->patient_id = $_POST['patient_id'];
        $pay->doctor_id = $_POST['doctor_id'];
        $pay->apoint_date = $_POST['apoint_date'];
        $pay->apoint_type = $_POST['apoint_type'];
        $pay->status = $_POST['status'];
        $pay->notes = $_POST['notes'];
        $pay->labcomments = $_POST['labcomments'];
        $pay->imgcomments = $_POST['imgcomments'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($pay);
        //echo "</pre>";
        if ($pay->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../appointments.php");
        }else{ 
            //$message_title = "Faluire";
            //$message_body = "There is a problem trying";
            //require_once("../../error.php");
            echo "<h1>Failure</h1>";
            }
       }else{
        echo "<h1>Not Done Right</h1>";
    }
    
    
?>