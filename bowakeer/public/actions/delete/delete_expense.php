<?php require_once("../../../includes/initialize.php"); ?>
<?php
    
    $inc = new expense();
    $inc->id = (int)$_GET['id'];
    
    if($inc->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../expenses.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../expenses.php');
    }
?>