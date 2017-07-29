<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $dept = new department();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $dept->name = $_POST['name'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($dept);
        //echo "</pre>";
        if ($dept->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../departments.php");
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