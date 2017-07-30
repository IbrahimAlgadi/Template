<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $pay = new export();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $pay->emp_id = $_POST['emp_id'];
        $pay->export = $_POST['export_date'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($pay);
        //echo "</pre>";
        if ($pay->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../exports.php");
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