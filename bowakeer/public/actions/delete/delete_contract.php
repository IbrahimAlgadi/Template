<?php require_once("../../../includes/initialize.php"); ?>
<?php
    $con = new contract();
    $con->id = (int)$_GET['id'];
    
    if($con->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../contracts.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../contracts.php');
    }
?>