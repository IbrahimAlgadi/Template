<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $Emp = new employee();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $Emp->Id = (int)$_POST['id'];
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
        
        /*
        echo "<pre>";
        var_dump($Emp);
        echo "</pre>";
        */
        if ($Emp->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../employees.php");
        }else{ 
            echo "<script>alert('Error')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>