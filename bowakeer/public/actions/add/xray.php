<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $pay = new xray();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $pay->id = $_POST['id'];
        $pay->appointment_id = $_POST['appointment_id'];
		$pay->path = $_POST['path'];
		$pay->comments = $_POST['comments'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($pay);
        //echo "</pre>";
        if ($pay->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../xrays.php");
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