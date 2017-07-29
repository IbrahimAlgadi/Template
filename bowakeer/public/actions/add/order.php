<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $ord = new order();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $ord->order_date = $_POST['date'];
        $ord->id = (int)$_POST['id'];
        
        //echo "<br />";
        //echo "<pre>";
        //var_dump($ord);
        //echo "</pre>";
        if ($ord->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../orders.php");
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