<?php require_once("../../../includes/initialize.php"); ?>

<?php

    if(isset($_POST['submit'])) {
        
        $Emp = new employee();
        /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        */
        $Emp->Name = $_POST['name'];
        $Emp->Phone = (int)$_POST['phone'];
        $Emp->Address = $_POST['address'];
        $Emp->Qualifications = $_POST['qualifications'];
        $Emp->Date_of_birth = $_POST['dob'];
        $Emp->Next_of_kin = $_POST['nok'];
        $Emp->Next_of_kin_phone = (int)$_POST['nokphone'];
        $Emp->Annual_leave = $_POST['al'];
        $Emp->SSID = $_POST['ssid'];
        $Emp->Driving_license = $_POST['dl'];
        $Emp->Payroll_id = $_POST['pid'];
        $Emp->Work_zone = $_POST['workz'];
        //echo "<br />";
        //echo "<pre>";
        //var_dump($Emp);
        //echo "</pre>";
        if ($Emp->create()){
            $message_title = "Success";
            $message_body = "You Have Submitted Information Successfuly";
            //require_once("../message.php");
            echo redirect_to("../../message.php");
        }else{ 
            $message_title = "Faluire";
            $message_body = "There is a problem trying";
            require_once("../../message.php");
            echo "<h1>Failure</h1>";
            }
       }else{
        echo "<h1>Not Done Right</h1>";
    }
    
    
?>