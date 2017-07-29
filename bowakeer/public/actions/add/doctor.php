<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $doc = new doctor();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $doc->name = $_POST['name'];
        $doc->phone = (int)$_POST['phone'];
        $doc->address = $_POST['address'];
        $doc->specialization = $_POST['specialization'];
        $doc->department_id = (int)$_POST['did'];
        $doc->marital_status = $_POST['ms'];
        $doc->age = (int)$_POST['age'];
        $doc->gender = $_POST['gender'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($doc);
        //echo "</pre>";
        if ($doc->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../doctors.php");
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