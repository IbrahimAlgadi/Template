<?php require_once("../../../includes/initialize.php"); ?>
<?php
	$py = new export();
    $py->id = (int)$_GET['id'];
    
    if($py->delete()){
        //echo "<script>alert(\"Deleted Successfult\")</script>";
        redirect_to('../../exports.php');
    }else{
        //echo "<script>alert(\"Not Deleted\")</script>";
        redirect_to('../../exports.php');
    }
?>