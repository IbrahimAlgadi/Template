<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $exp = new expense();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $exp->expense_date = $_POST['expense_date'];
        $exp->amount = $_POST['amount'];
        $exp->description = $_POST['description'];
        $exp->cat_id = $_POST['cat_id'];
        
        //echo "<br />";
        //echo "<pre>";
        //var_dump($exp);
        //echo "</pre>";
        if ($exp->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../expenses.php");
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