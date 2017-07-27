<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $inc = new income();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $inc->name = $_POST['name'];
        $inc->income_date = $_POST['income_date'];
        $inc->amount = $_POST['amount'];
        $inc->description = $_POST['description'];
        $inc->cat_id = $_POST['cat_id'];
        
        //echo "<br />";
        //echo "<pre>";
        //var_dump($inc);
        //echo "</pre>";
        if ($inc->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../incomes.php");
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