<?php require_once("../../../includes/initialize.php"); ?>
<?php
	$ord = new order();
    $ord->id = (int)$_GET['id'];
    
    if($ord->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../orders.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../orders.php');
    }
?>