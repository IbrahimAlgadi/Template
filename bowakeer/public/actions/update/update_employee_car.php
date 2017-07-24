<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $emp_car = new employee_car();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $emp_car->id = (int)$_POST['id'];
        $emp_car->emp_id = $_POST['emp_id'];
        $emp_car->auto_id = $_POST['auto_id'];
        $emp_car->start_date = $_POST['start_date'];
        $emp_car->end_date = $_POST['end_date'];
        
        /*
        echo "<pre>";
        var_dump($emp_car);
        echo "</pre>";
        */
        if ($emp_car->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../employee_cars.php");
        }else{ 
            echo "<script>alert('Unable to update employee_car')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>