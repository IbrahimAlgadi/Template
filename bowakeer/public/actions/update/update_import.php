<?php require_once("../../../includes/initialize.php"); ?>

<?php
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    //echo $_POST['id'];
    if(isset($_POST['submit'])) {
        
        $pay = new import();
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        
        $pay->id = (int)$_POST['id'];
        $pay->company_id = $_POST['company_id'];
		$pay->import_date = $_POST['import_date'];
        $pay->payment_type = $_POST['payment_type'];
        
        /*
        echo "<pre>";
        var_dump($pay);
        echo "</pre>";
        */
        if ($pay->update()){
            echo "<script>alert('Done')</script>";
            echo redirect_to("../../imports.php");
        }else{ 
            echo "<script>alert('Unable to update import')</script>";
            //require_once("../../error.php");
            
            }
        
       }
    
    
?>