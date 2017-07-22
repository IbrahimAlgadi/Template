<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $allow = new allowance();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $allow->id = (int)$_POST['id'];
        $allow->emp_id = $_POST['emp_id'];
        $allow->allow_date = $_POST['allow_date'];
        $allow->amount = $_POST['amount'];
        
        /*
        echo "<pre>";
        var_dump($allow);
        echo "</pre>";
        */
        if ($allow->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../allowances.php");
        }else{ 
            echo "<script>alert('Unable to update allowance')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>