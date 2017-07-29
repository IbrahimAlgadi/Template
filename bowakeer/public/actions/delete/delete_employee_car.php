<?php require_once("../../../includes/initialize.php"); ?>
<?php
    $emp_car = new employee_car();
    $emp_car->id = (int)$_GET['id'];
    
    if($emp_car->delete()){
        //echo "<script>alert(\"Deleted Successfuly\")</script>";
        redirect_to('../../employee_cars.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../employee_cars.php');
    }
?>