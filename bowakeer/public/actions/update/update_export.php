<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $pay = new export();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $pay->id = (int)$_POST['id'];
        $pay->emp_id = $_POST['emp_id'];
        $pay->export_date =$_POST['export_date'];
        
        /*
        echo "<pre>";
        var_dump($pay);
        echo "</pre>";
        */
        if ($pay->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../exports.php");
        }else{ 
            echo "<script>alert('Unable to update export')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>