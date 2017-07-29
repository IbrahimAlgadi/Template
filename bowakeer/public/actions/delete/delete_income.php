<?php require_once("../../../includes/initialize.php"); ?>
<?php
    
    $inc = new income();
    $inc->id = (int)$_GET['id'];
    
    if($inc->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../incomes.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../incomes.php');
    }
?>