<?php require_once("../../../includes/initialize.php"); ?>
<?php
    
    $inc = new lab_test();
    $inc->id = (int)$_GET['id'];
    
    if($inc->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../lab_tests.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../lab_tests.php');
    }
?>