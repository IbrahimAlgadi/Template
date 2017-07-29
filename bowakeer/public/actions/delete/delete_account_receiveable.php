<?php require_once("../../../includes/initialize.php"); ?>
<?php
    
    $acc = new account_receiveable();
    $acc->id = (int)$_GET['id'];
    
    if($acc->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../account_receiveables.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../account_receiveables.php');
    }
?>