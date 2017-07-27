<?php require_once("../../../includes/initialize.php"); ?>
<?php
    
    $acc_pay = new accounts_reciveable();
    $acc_pay->id = (int)$_GET['id'];
    
    if($acc_pay->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../accounts_reciveables.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../accounts_reciveables.php');
    }
?>