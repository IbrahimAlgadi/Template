<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $pay = new pharm_category();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $pay->id = $_POST['id'];
        $pay->pharm_category = $_POST['Name'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($pay);
        //echo "</pre>";
        if ($pay->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../pharm_categories.php");
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