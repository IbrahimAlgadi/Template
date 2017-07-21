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
        
        $Emp->id = (int)$_POST['id'];
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
        
        /*
        echo "<pre>";
        var_dump($Emp);
        echo "</pre>";
        */
        if ($Emp->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../employees.php");
        }else{ 
            echo "<script>alert('Unable to update employee')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>