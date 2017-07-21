<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $vouch = new end_voucher();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $vouch->payroll_id = $_POST['payroll_id'];
        $vouch->end_date = $_POST['end_date'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($vouch);
        //echo "</pre>";
        if ($vouch->create()){
            //require_once("../message.php");
            echo redirect_to("../../end_vouchers.php");
        }else{ 
            //require_once("../../error.php");
            echo "<h1>Failure</h1>";
            }
       }else{
        echo "<h1>Not Done Right</h1>";
    }
    
    
?>