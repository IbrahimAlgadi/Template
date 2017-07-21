<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $vouch = new end_voucher();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $vouch->id = (int)$_POST['id'];
        $vouch->payroll_id = $_POST['payroll_id'];
        $vouch->end_date = $_POST['end_date'];
        
        /*
        echo "<pre>";
        var_dump($vouch);
        echo "</pre>";
        */
        if ($vouch->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../end_vouchers.php");
        }else{ 
            echo "<script>alert('Unable to update end_voucher')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>