<?php require_once("../../../includes/initialize.php"); ?>
<?php
    $acc_pay = new contract();
    $acc_pay->id = (int)$_GET['id'];
    
    if($acc_pay->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../employees.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../employees.php');
    }
?>