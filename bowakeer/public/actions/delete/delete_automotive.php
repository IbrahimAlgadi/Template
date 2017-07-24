<?php require_once("../../../includes/initialize.php"); ?>
<?php
    $auto = new automotive();
    $auto->id = (int)$_GET['id'];
    
    if($auto->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../automotives.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../automotives.php');
    }
?>