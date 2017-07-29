<?php require_once("../../../includes/initialize.php"); ?>
<?php
    
    $acc_pay = new accounts_payable();
    $acc_pay->id = (int)$_GET['id'];
    
    if($acc_pay->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../accounts_payables.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../accounts_payables.php');
    }
?>