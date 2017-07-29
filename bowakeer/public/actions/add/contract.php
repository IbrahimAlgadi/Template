<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $contract = new contract();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $contract->id = (int)$_POST['id'];
        $contract->name = $_POST['name'];
        $contract->contract_type = (int)$_POST['contract_type'];
        $contract->period = $_POST['period'];
        $contract->start_date = $_POST['start_date'];
        $contract->end_date = $_POST['end_date'];
        $contract->description = $_POST['description'];
        
        //echo "<br />";
        //echo "<pre>";
        //var_dump($contract);
        //echo "</pre>";
        if ($contract->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../contracts.php");
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