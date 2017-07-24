<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $allow = new employee_car();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $allow->emp_id = $_POST['emp_id'];
        $allow->auto_id = $_POST['auto_id'];
        $allow->start_date = $_POST['start_date'];
        $allow->end_date = $_POST['end_date'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($allow);
        //echo "</pre>";
        if ($allow->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../employee_cars.php");
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