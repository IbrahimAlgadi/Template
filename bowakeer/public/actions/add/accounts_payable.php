<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $Emp = new accounts_payable();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $Emp->name = $_POST['name'];
        $Emp->end_date = $_POST['end_date'];
        $Emp->cheque_number = $_POST['cheque_number'];
        $Emp->cheque_date = $_POST['cheque_date'];
        $Emp->bank_id = $_POST['bank_id'];
        $Emp->amount = $_POST['amount'];
        
        //echo "<br />";
        //echo "<pre>";
        //var_dump($Emp);
        //echo "</pre>";
        if ($Emp->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../accounts_payables.php");
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