<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $allow = new allowance();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $allow->emp_id = $_POST['emp_id'];
        $allow->allow_date = $_POST['allow_date'];
        $allow->amount = $_POST['amount'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($allow);
        //echo "</pre>";
        if ($allow->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../allowances.php");
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