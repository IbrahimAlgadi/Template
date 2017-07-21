<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $pay = new payroll();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $pay->id = (int)$_POST['id'];
        $pay->start_date = $_POST['sdate'];
        $pay->salary = (int)$_POST['salary'];
        $pay->period = $_POST['period'];
        
        /*
        echo "<pre>";
        var_dump($pay);
        echo "</pre>";
        */
        if ($pay->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../payrolls.php");
        }else{ 
            echo "<script>alert('Unable to update payroll')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>