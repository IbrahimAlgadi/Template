<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $pay = new payroll();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $pay->Start_date = $_POST['sdate'];
        $pay->Salary = (int)$_POST['salary'];
        $pay->Period = $_POST['period'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($pay);
        //echo "</pre>";
        if ($pay->create()){
            $message_title = "Success";
            $message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../payrolls.php");
        }else{ 
            $message_title = "Faluire";
            $message_body = "There is a problem trying";
            require_once("../../error.php");
            echo "<h1>Failure</h1>";
            }
       }else{
        echo "<h1>Not Done Right</h1>";
    }
    
    
?>