<?php require_once("../../../includes/initialize.php"); ?>
<?php
	$pt = new patient();
    $pt->id = (int)$_GET['id'];
    
    if($pt->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../patients.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../patients.php');
    }
?>