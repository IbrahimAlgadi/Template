<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $pt = new patient();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $pt->name = $_POST['name'];
        $pt->age = (int)$_POST['age'];
        $pt->gender = $_POST['gender'];
        $pt->occupation = $_POST['occupation'];
        $pt->address = $_POST['address'];
        $pt->phone = (int)$_POST['phone'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($pt);
        //echo "</pre>";
        if ($pt->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../patients.php");
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