<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $Emp = new employee();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $Emp->name = $_POST['name'];
        $Emp->phone = (int)$_POST['phone'];
        $Emp->address = $_POST['address'];
        $Emp->qualifications = $_POST['qualifications'];
        $Emp->date_of_birth = $_POST['dob'];
        $Emp->next_of_kin = $_POST['nok'];
        $Emp->next_of_kin_phone = (int)$_POST['nokphone'];
        $Emp->annual_leave = $_POST['al'];
        $Emp->ssid = $_POST['ssid'];
        $Emp->driving_license = $_POST['dl'];
        $Emp->payroll_id = $_POST['pid'];
        $Emp->work_zone = $_POST['workz'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($Emp);
        //echo "</pre>";
        if ($Emp->create()){
            //$message_title = "Success";
            //$message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../employees.php");
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