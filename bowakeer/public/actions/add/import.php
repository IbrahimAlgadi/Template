<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $pay = new import();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $pay->company_id = $_POST['company_id'];
        $pay->import_date = $_POST['import_date'];
		$pay->payment_type = $_POST['payment_type'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($pay);
        //echo "</pre>";
        if ($pay->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../imports.php");
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