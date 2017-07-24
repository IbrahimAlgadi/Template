<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $auto = new automotive();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $auto->label = $_POST['label'];
        $auto->model = $_POST['model'];
        $auto->insurance = $_POST['insurance'];
        $auto->period = $_POST['period'];
        $auto->expiry_date = $_POST['expiry_date'];
        $auto->oil_change = $_POST['oil_change'];
        $auto->license_expiry_date = $_POST['license_expiry_date'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($auto);
        //echo "</pre>";
        if ($auto->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../automotives.php");
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