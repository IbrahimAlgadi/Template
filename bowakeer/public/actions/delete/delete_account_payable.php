<?php require_once("../../../includes/initialize.php"); ?>
<?php
    
    $acc_pay = new account_payable();
    $acc_pay->id = (int)$_GET['id'];
    
    if($acc_pay->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../account_payables.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../account_payables.php');
    }
?>